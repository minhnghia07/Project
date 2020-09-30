@extends('layout_admin.admin')
@section('title')Trang Add User
@endsection
@section('css')
<link href="{{ asset('admins/role/add.css') }}" rel="stylesheet"/>
@endsection
@section('js')
<script type="text/javascript" src="{{ asset('admins/role/add.js') }}"></script>
@endsection
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	@include('partials.content-header',['name' =>'Role','key'=>'Add'])
	<div class="col-md-12">
	</div>
	<!-- /.content-header -->
	<!-- Main content -->
	<form action="{{ route('roles.store') }}" enctype="multipart/form-data" method="post">
		<div class="content">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-12">
						@csrf
						<div class="form-group">
							<label>
								Tên Vai Trò
							</label>
							<input class="form-control @error('name') is-invalid @enderror" name="name" placeholder="Nhập tên vai trò" type="text" value="{{ old('name') }}">
						</input>
						@error('name')
						<div class="alert alert-danger">{{ $message }}</div>
						@enderror
					</div>
					<div class="form-group">
						<label>
							Mô tả vai trò :
						</label>
						<textarea class="form-control @error('display_name') is-invalid @enderror" name="display_name" placeholder="Nhập mô tả vai trò" type="text" value="{{ old('display_name') }}" rows="3"></textarea> 
					</input>
					@error('display_name')
					<div class="alert alert-danger">{{ $message }}</div>
					@enderror
				</div>				
				<div class="col-md-12">
					<div class="row">
						<div class="col-md-12">
							<label>
								<input type="checkbox" class="checkall" name="">
							Check All</label>
						</div>

						@foreach ($permissionParent as $PermissionItem)
						<div class="card border-primary mb-3 col-md-12" >
							<div class="card-header">
								<label>
									<input class="checkbox_wrapper" type="checkbox" name="">
								</label>
								Module {{ $PermissionItem->name }}
							</div>
							<div class="row">
								@foreach ($PermissionItem->permissionChildrent as $item )
								<div class="card-body text-primary col-md-3">
									<h5 class="card-title">
										<label>
											<input class="checkbox_childrent" type="checkbox" name="permission_id[]" value="{{ $item->id }}">
										</label>
										{{ $item->name }}</h5>								
									</div>
									@endforeach															
								</div>
							</div>						
							@endforeach															
						</div>
					</div>
					<div class="col-md-12">
						<button class="btn btn-primary" type="submit">
							Submit
						</button>
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

