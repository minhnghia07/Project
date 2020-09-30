@extends('layout_admin.admin')
@section('title')Trang Categories
@endsection
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    @include('partials.content-header',['name' =>'Category','key'=>'List'])
    <!-- /.content-header -->
    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <form action="{{ route('search.category') }}">
                        <input class="form-control" name="key" placeholder="Nhập tên danh mục" style="width: 50%;" type="text">
                        </input>
                    </form>
                    @can('category-add')
                    <a class="btn btn-success float-right n-2" href="{{ route('categories.create') }}">
                        Add
                    </a>
                    @endcan
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
                            @foreach ($categories as $item)
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
                    {{ $categories->links() }}
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
