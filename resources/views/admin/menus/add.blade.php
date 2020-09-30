@extends('layout_admin.admin')
@section('title')Trang Menu
@endsection
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	@include('partials.content-header',['name' =>'Menu','key'=>'Add'])
	<!-- /.content-header -->

	<!-- Main content -->
	<div class="content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-6">
					<form action="{{ route('menu.store') }}" method="post">
						@csrf
						<div class="form-group">
							<label>Ten Menu</label>
							<input name="name" type="text" class="form-control @error('name') is-invalid @enderror" placeholder="Nhap ten menu">
							@error('name')
							<div class="alert alert-danger">{{ $message }}</div>
							@enderror    
						</div>
						<div class="form-group">
							<label >CHon Menu cha</label>
							<select class="form-control" name="parent_id" >
								<option value="0">CHon menu cha</option>
								{!! $optionSelect !!}
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
