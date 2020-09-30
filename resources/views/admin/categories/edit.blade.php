@extends('layout_admin.admin')
@section('title')Trang Edit Category
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
					<form action="{{ route('categories.update',['id'=> $category->id]) }}" method="post">
						@csrf
					<div class="form-group">
						<label>Ten danh muc</label>
						<input name="name" type="text" class="form-control" placeholder="Nhap ten danh muc" value="{{ $category->name }}">
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
@endsection
