@extends('layout_admin.admin')
@section('title')Trang Admin
@endsection
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	@include('partials.content-header',['name' =>'Category','key'=>'Add'])
	<!-- /.content-header -->

	<!-- Main content -->
	<div class="content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-6">
					<form action="{{ route('categories.store') }}" method="post">
						@csrf
					<div class="form-group">
						<label>Ten danh muc</label>
						<input name="name" type="text" class="form-control @error('name') is-invalid @enderror" placeholder="Nhap ten danh muc">
						@error('name')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
					</div>
					<div class="form-group">
						<label >CHon danh muc cha</label>
						<select class="form-control" name="parent_id" >
							<option value="0">CHon danh muc cha</option>
							{!! $htmlOption !!}
						</select>
					</div>
					<button type="submit" class="btn btn-primary">Submit</button>
				</form>
				</div>
				
			</div>
			<!-- /.row -->
		</div><!-- /.container-fluid -->
	</div>
	<!-- /.content -->
</div>
<!-- /.content-wrapper -->
@section('js')
<script src="//cdn.tinymce.com/4/tinymce.min.js">
</script>
<script src="{{ asset('admins/product/add.js') }}">
</script>
@endsection
@endsection
