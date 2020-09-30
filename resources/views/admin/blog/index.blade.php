@extends('layout_admin.admin')
@section('title')Quan li Blog
@endsection
@section('css')
<link href="{{ asset('admins\setting\index\index.css') }} " rel="stylesheet" type="text/css">
    @endsection
@section('js')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9">
    </script>
    <script src="{{ asset('admins\main.js') }}" type="text/javascript">
    </script>
    @endsection

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        @include('partials.content-header',['name' =>'Blog','key'=>'List'])
        <!-- /.content-header -->
        <!-- Main content -->
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="col-md-12">
                             <form action="{{ route('search.blog') }}">
                                <input class="form-control" name="key" placeholder="Nhập tiêu đề blog" style="width: 50%;" type="text">
                                </input>
                            </form>
                            @can('blog-add')
                            <a class="btn btn-success float-right n-2" href="{{ route('blog.create') }}">
                                Add
                            </a>
                           @endcan
                        </div>
                    </div>
                    <div class="col-md-12">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">
                                        Người Đăng Bài
                                    </th>
                                    <th scope="col">
                                        Ảnh
                                    </th>
                                    <th scope="col">
                                        Tiêu đề
                                    </th>
                                    <th scope="col">
                                        Nội dung
                                    </th>
                                    <th scope="col">
                                        Trạng thái
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
                                       <img width="300"  src="{{ $item->link_image }}"> 
                                    </td>
                                    <td>
                                        {{ $item->title }}
                                    </td>
                                    <td>
                                        <div class="slow">{{ $item->content }}</div>
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
                                  
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="col-md-12">
                        {{ $blog->links() }}
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
</link>