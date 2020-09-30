@extends('layout_admin.admin')
@section('title')Trang Search Blog
@endsection
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    @include('partials.content-header',['name' =>'Blog','key'=>'Search'])
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
                        {{count($blog)}}
                    </b>
                    kết quả
                </h3>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <form action="{{ route('search.blog') }}">
                        <input class="form-control" name="key" placeholder="Nhập tiêu đề bài viết" style="margin-bottom: 10px;" type="text">
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
                                @foreach ($blog as $item)
                                <tr>
                                    <td scope="row">
                                        {{ $item->name }}
                                    </td>
                                    <td>
                                       <img src="{{ $item->link_image }}"> 
                                    </td>
                                    <td>
                                        {{ $item->title }}
                                    </td>
                                    <td>
                                        {{ $item->content }}
                                    </td>
                                    <td>
                                        {{ $item->status }}
                                    </td>
                                    <td>
                                        @can('blog-edit')
                                        <a class="btn btn-success" href="{{ route('blog.edit',['id'=>$item->id]) }}">
                                            Sua
                                        </a>
                                       @endcan
                                    </td>
                                    <td>
                                       @can('blog-delete')
                                        <a class="btn btn-danger action_delete" data-url="{{ route('blog.delete',['id'=>$item->id]) }}">
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
                    {!! $blog->links() !!}
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
