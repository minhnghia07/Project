@extends('layout_admin.admin')
@section('title')Trang Add Blog
@endsection
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    @include('partials.content-header',['name' =>'Blog','key'=>'Add'])
    <div class="col-md-12">
    </div>
    <!-- /.content-header -->
    <!-- Main content -->
    <form action="{{ route('blog.store') }}" enctype="multipart/form-data" method="post">
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        @csrf
                        <div class="form-group">
                            <label>
                                Link Ảnh
                            </label>
                            <input class="form-control @error('link_image') is-invalid @enderror" name="link_image" placeholder="Nhập link ảnh" type="text" value="{{ old('link_image') }}">
                            </input>
                             @error('link_image')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>
                                Tiêu đề :
                            </label>
                            <input class="form-control @error('title') is-invalid @enderror" name="title" placeholder="Nhập tiêu đề" type="text" value="{{ old('title') }}">
                            </input>
                             @error('title')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>
                                Nội dung :
                            </label>
                            <textarea class="tinymce_editor_init form-control @error('contents') is-invalid @enderror" name="contents" placeholder="Nhập nội dung" rows="10">{{ old('contents') }}
                            </textarea>
                             @error('contents')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>
                                Trạng thái :
                            </label>
                            <input class="form-control @error('status') is-invalid @enderror" name="status" placeholder="Nhập trạng thái" type="number" value="{{ old('status') }}">
                            </input>
                             @error('status')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
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
@section('js')
<script src="//cdn.tinymce.com/4/tinymce.min.js">
</script>
<script src="{{ asset('admins/product/add.js') }}">
</script>
@endsection
@endsection
