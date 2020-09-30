@extends('layout_admin.admin')
@section('title')Trang Search Product
@endsection
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    @include('partials.content-header',['name' =>'Product','key'=>'Search'])
    <!-- /.content-header -->
    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="section-title">
                <h2>
                    Kết quả tìm kiếm cho: "
                    <u style="color: red;">
                        {{$search_name}}
                    </u>
                    "
                </h2>
            </div>
            <div class="section-title">
                <h3>
                    Tìm thấy
                    <b style="color: red;">
                        {{count($product)}}
                    </b>
                    kết quả
                </h3>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <form action="{{ route('search.product') }}">
                        <input class="form-control" name="key" placeholder="Nhập tên danh mục để tìm kiếm" style="margin-bottom: 10px;" type="text">
                        </input>
                    </form>
                </div>
                <div class="col-md-12">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">
                                    ID
                                </th>
                                <th scope="col">
                                    Ten danh muc
                                </th>
                                <th scope="col">
                                    Parent ID
                                </th>
                                <th scope="col">
                                    Trang thai
                                </th>
                                <th scope="col">
                                    Ngay tao
                                </th>
                                <th>
                                </th>
                                <th>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($product as $item)
                            <tr>
                                <td scope="row">
                                    {{ $item->id }}
                                </td>
                                <td>
                                    {{ $item->name_product }}
                                </td>
                                <td>
                                    <img height="100px" src="{{ $item->link_image }}" width="100px">
                                    </img>
                                </td>
                                <td>
                                    <img height="100px" src="{{ $item->feature_image_path }}" width="100px">
                                    </img>
                                </td>
                                <td>
                                    {{ number_format( $item->price) }} VND
                                </td>
                                <td>
                                    {{ $item->content }}
                                </td>
                                <td>
                                    {{ optional( $item->category)->name }}
                                </td>
                                <td>
                                    @can('product-edit')
                                    <a class="btn btn-success" href="{{ route('product.edit',['id'=>$item->id]) }}">
                                        Sua
                                    </a>
                                    @endcan
                                </td>
                                <td>
                                    @can('product-delete')
                                    <a class="btn btn-danger action_delete" data-url="{{ route('product.delete',['id'=>$item->id]) }}" href="">
                                        Xoa
                                    </a>
                                    @endcan
                                </td>
                                <td>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="col-md-12">
                    {!! $product->links() !!}
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection
