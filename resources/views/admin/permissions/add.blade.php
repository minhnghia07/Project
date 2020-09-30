@extends('layout_admin.admin')
@section('title')Trang Thêm Quyền 
@endsection
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	@include('partials.content-header',['name' =>'Permisson','key'=>'Add'])
	<!-- /.content-header -->

	<!-- Main content -->
	<div class="content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<form action="{{ route('permissions.store') }}" method="post">
						@csrf
					
					<div class="form-group">
						<label >Chọn tên module</label>
						<select class="form-control" name="module_parent" >
							<option value="">Chọn tên module</option>
							@foreach (config('permissions.table_module') as $item)
									<option value="{{ $item }}">{{ $item }}</option>
							@endforeach
						
							
						</select>
					</div>
					<div class="form-group">
						<div class="row">
							@foreach (config('permissions.module_childrent') as $item)
								<div class="col-md-3">
								<label>
									<input type="checkbox" name="module_child[]" value="{{ $item }}">
									{{ $item }}
								</label>
							</div>
							@endforeach
							
							
						</div>
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
