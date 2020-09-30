@extends('layout_admin.admin')
@section('title')Trang Search Category
@endsection
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	@include('partials.content-header',['name' =>'Category','key'=>'Search'])
	<!-- /.content-header -->
	<!-- Main content -->
	<div class="content">
		<div class="container-fluid">
			<div class="section-title">
				<h2>Kết quả tìm kiếm cho: "<u style="color: red;">{{$search_name}}</u>"</h2>
			</div>
			<div class="section-title">
				<h3>Tìm thấy <b style="color: red;">{{count($category)}}</b> kết quả</h3>
			</div>
			<div class="row">
				<div class="col-md-12">
					<form action="{{ route('search.category') }}">
						<input class="form-control" type="text" name ="key" placeholder="Nhập tên danh mục để tìm kiếm" style="margin-bottom: 10px;">
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
                            @foreach ($category as $item)
                            <tr>
                                <td scope="row">
                                    {{ $item->id }}
                                </td>
                                <td>
                                    {{ $item->name }}
                                </td>
                                <td>
                                    {{ $item->parent_id }}
                                </td>
                                <td>
                                    {{ $item->status }}
                                </td>
                                <td>
                                    {{ $item->created_at }}
                                </td>
                                <td>
                                    @can('category-edit')
                                    <a class="btn btn-success" href="{{ route('categories.edit',['id'=>$item->id]) }}">
                                        Sua
                                    </a>
                                    @endcan
                                </td>
                                <td>
                                    @can('category-delete')
                                    <a class="btn btn-danger" href="{{ route('categories.delete',['id'=>$item->id]) }}">
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
					{!! $category->links() !!}
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
