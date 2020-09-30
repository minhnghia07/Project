@extends('layout_admin.admin')
@section('title')Trang Product
@endsection
@section('css')
<link href="{{ asset('vendors/select2/select2.min.css') }}" rel="stylesheet"/>
<link href="{{ asset('admins/product/add.css') }}" rel="stylesheet" type="text/css">
@endsection

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    @include('partials.content-header',['name' =>'Product','key'=>'Add'])
    <div class="col-md-12">
           {{--  @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>
                        {{ $error }}
                    </li>
                    @endforeach
                </ul>
            </div>
            @endif --}}
        </div>
        <!-- /.content-header -->
        <!-- Main content -->
        <form action="{{ route('product.store') }}" enctype="multipart/form-data" method="post">
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6">
                            @csrf
                            <div class="form-group">
                                <label>
                                    Ten san pham
                                </label>
                                <input class="form-control @error('name_product') is-invalid @enderror" name="name_product" placeholder="Nhap ten san pham" type="text" value="{{ old('name_product') }}">
                            </input>
                            @error('name_product')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>
                                Link anh
                            </label>
                            <input class="form-control @error('link') is-invalid @enderror" name="link" placeholder="Nhap link anh san pham" type="text" value="{{ old('link') }}">
                        </input>
                        @error('link')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>
                            Avatar san pham
                        </label>
                        <input class="form-control-file" name="image_avatar" placeholder="Nhap  anh san pham" type="file" value="{{ old('image_avatar') }}"/>
                </div>
                <div class="form-group">
                    <label>
                        Gia san pham
                    </label>
                    <input class="form-control @error('price') is-invalid @enderror" name="price" placeholder="Nhap gia san pham" type="text" value="{{ old('price') }}">
                </input>
                @error('price')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label>
                    Trang thai
                </label>
                <input class="form-control" name="status" placeholder="Nhap trang thai san pham" type="text">
            </input>
        </div>
        <div class="form-group">
            <label>
                CHon danh muc
            </label>
            <select class="form-control select2_init @error('category_id') is-invalid @enderror" name="category_id">
                <option value="">
                    CHon danh muc
                </option>
                {!! $htmlOption !!}
            </select>
            @error('category_id')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
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
            <textarea class="form-control tinymce_editor_init" id="exampleFormControlTextarea1" name="contents" rows="10" >{{ old('contents') }}
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