@extends('layout_admin.admin')
@section('title')Trang Edit Product
@endsection
@section('css')
<link href="{{ asset('vendors/select2/select2.min.css') }}" rel="stylesheet"/>
<link href="{{ asset('admins/product/add.css') }}" rel="stylesheet" type="text/css">
    @endsection

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        @include('partials.content-header',['name' =>'Product','key'=>'Edit'])
        <!-- /.content-header -->
        <!-- Main content -->
        <form action="{{ route('product.update',['id'=> $product->id]) }}" method="post"  enctype="multipart/form-data">
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6">
                            @csrf
                            <div class="form-group">
                                <label>
                                    Ten san pham
                                </label>
                                <input class="form-control" name="name_product" placeholder="Nhap ten san pham" type="text" value="{{ $product->name_product }}">
                                </input>
                            </div>
                            <div class="form-group">
                                <label>
                                    Link anh
                                </label>
                                <input class="form-control" name="link" placeholder="Nhap link anh san pham" type="text" value="{{ $product->link_image }}">
                                </input>
                            </div>
                            <div class="form-group">
                                <label>
                                    Avatar san pham
                                </label>
                                <input class="form-control-file" name="image_avatar" placeholder="Nhap anh san pham" type="file" value="{{ $product->feature_image_path }}">
                                </input>
                                <div class="col-md-12">
                                    <div class="row">
                                        <img height="150px" width="150px" width="100%" src="{{ $product->feature_image_path }}">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>
                                    Gia san pham
                                </label>
                                <input class="form-control" name="price" placeholder="Nhap gia san pham" type="text" value="{{ $product->price }}">
                                </input>
                            </div>
                            <div class="form-group">
                                <label>
                                    Trang thai
                                </label>
                                <input class="form-control" name="status" placeholder="Nhap trang thai san pham" type="text" >
                                </input>
                            </div>
                            <div class="form-group">
                                <label>
                                    CHon danh muc
                                </label>
                                <select class="form-control select2_init" name="category_id">
                                    <option value="">
                                        CHon danh muc
                                    </option>
                                    {!! $htmlOption !!}
                                </select>
                            </div>
                            <div class="form-group">
                                <label>
                                    Nhap tag cho san pham
                                </label>
                                <select class="form-control tags_select_choose" multiple="multiple" name="tags[]">
                                </select>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>
                                    Noi dung
                                </label>
                                <textarea class="form-control tinymce_editor_init" id="exampleFormControlTextarea1" name="contents" rows="10">{{ $product->content }}
                                </textarea>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <button class="btn btn-primary" type="submit">
                                Submit
                            </button>
                        </div>
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- /.content -->
        </form>
    </div>
    <!-- /.content-wrapper -->
    @endsection
@section('js')
    <script src="{{ asset('vendors/select2/select2.min.js') }}">
    </script>
    <script src="//cdn.tinymce.com/4/tinymce.min.js">
    </script>
    <script src="{{ asset('admins/product/add.js') }}">
    </script>
    @endsection
</link>