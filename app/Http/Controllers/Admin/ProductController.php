<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\ProductAddRequest;
use App\Category;
use App\Components\Recusive;
use App\Http\Controllers\Controller;
use App\Product;
use App\Traits\StorageImageTrait;
use DB;
use Illuminate\Http\Request;
use App\Traits\DeleteTrait;

class ProductController extends Controller
{
    use StorageImageTrait,DeleteTrait;
    private $category;
    private $product;
    public function __construct(Category $category, Product $product)
    {
        $this->category = $category;
        $this->product  = $product;
    }
    public function index()
    {
        $products = $this->product->latest()->paginate(5);
        return view('admin.product.index', compact('products'));
    }
    public function create()
    {
        $htmlOption = $this->getCategory($parentId = '');
        return view('admin.product.add', compact('htmlOption'));
    }
    public function getCategory($parentId)
    {
        $data       = $this->category->all();
        $recusive   = new Recusive($data);
        $htmlOption = $recusive->categoryRecusive($parentId);
        return $htmlOption;
    }
    public function store(ProductAddRequest $request)
    {
        try {
            $dataProductCreate = [
                'name_product' => $request->name_product,
                'link_image'   => $request->link,
                'price'   => $request->price,
                'id_category'  => $request->category_id,
                'content'      => strip_tags($request->contents)

            ];

            $dataUploadFeatureImage = $this->StorageTraitUpload($request, 'image_avatar', 'product');
            //dd($dataUpload);
            if (!empty($dataUploadFeatureImage)) {
                $dataProductCreate['feature_image_name'] = $dataUploadFeatureImage['file_name'];
                $dataProductCreate['feature_image_path'] = $dataUploadFeatureImage['file_path'];
            }
            $product = $this->product->create($dataProductCreate);
            //dd($product);
            DB::commit();
            return redirect()->route('product.index');
        } catch (Exception $e) {
            DB::rollBack();
            Log::error('Message:' . $e->getMessage() . 'Line:' . $e->getLine());
        }

    }
    public function edit($id)
    {
        $product    = $this->product->find($id);
        $htmlOption = $this->getCategory($product->id_category);
        return view('admin.product.edit', compact('htmlOption', 'product'));
    }
    public function update(Request $request, $id)
    {
        DB::beginTransaction();
        try {
            $dataProductUpdate = [
                'name_product' => $request->name_product,
                'link_image'   => $request->link,
                'price'   => $request->price,
                'id_category'  => $request->category_id,
                'content'      =>strip_tags($request->contents)
            ];

            $dataUploadFeatureImage = $this->StorageTraitUpload($request, 'image_avatar', 'products');
            //dd($dataUpload);
            if (!empty($dataUploadFeatureImage)) {
                $dataProductUpdate['feature_image_name'] = $dataUploadFeatureImage['file_name'];
                $dataProductUpdate['feature_image_path'] = $dataUploadFeatureImage['file_path'];
            }
            $product = $this->product->find($id)->update($dataProductUpdate);
            //dd($product);
            DB::commit();
            return redirect()->route('product.index');
        } catch (Exception $e) {
            DB::rollBack();
            Log::error('Message:' . $e->getMessage() . 'Line:' . $e->getLine());
        }
    }
    public function delete($id)
    {
     return $this->deleteTrait($id,$this->product);
    }
    public function getSearch(Request $req){
        $search_name = $req->key;
        if ($search_name!==null && $search_name!=='') {
            $product = Product::where('name_product', 'like', '%'.$req->key.'%')->paginate(5);
            return view('admin.product.search', compact('product','search_name'));
        }else{
            $alert = 'Bạn chưa nhập nội dung tìm kiếm';
            return redirect()->back()->with('alert',$alert);
        }
    }
}
