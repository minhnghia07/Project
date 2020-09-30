@extends('layout_admin.admin')
@section('title')Trang Edit Blog
@endsection
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    @include('partials.content-header',['name' =>'Blog','key'=>'Edit'])
    <div class="col-md-12">
    </div>
    <!-- /.content-header -->
    <!-- Main content -->
    <form action="{{ route('blog.update',['id'=>$blog->id]) }}" enctype="multipart/form-data" method="post">
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        @csrf
                        <div class="form-group">
                            <label>
                                Link Ảnh
                            </label>
                            <input class="form-control" name="link_image" placeholder="Nhập link ảnh" type="text" value="{{ $blog->link_image }}">
                            </input>
                        </div>
                        <div class="form-group">
                            <label>
                                Tiêu đề :
                            </label>
                            <input class="form-control" name="title" placeholder="Nhập tiêu đề" type="text" value="{{ $blog->title }}">
                            </input>
                        </div>
                        <div class="form-group">
                            <label>
                                Nội dung :
                            </label>
                            <textarea class="form-control" name="contents" placeholder="Nhập nội dung" rows="5">{{ $blog->content }}
                            </textarea>
                        </div>
                        <div class="form-group">
                            <label>
                                Trạng thái :
                            </label>
                            <input class="form-control" name="status" placeholder="Nhập trạng thái" type="number" value="{{ $blog->status }}">
                            </input>
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
        </div>
    </form>
</div>
<!-- /.content-wrapper -->
@endsection
