@extends('layout_admin.admin')
@section('title')Quan li User
@endsection
@section('css')
<link href="{{ asset('admins\setting\index\index.css') }} " rel="stylesheet" type="text/css">
    @endsection
@section('js')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9">
    </script>
    <script src="{{ asset('admins\main.js') }}" type="text/javascript">
    </script>
    @endsection

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        @include('partials.content-header',['name' =>'Role','key'=>'List'])
        <!-- /.content-header -->
        <!-- Main content -->
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="col-md-12">
                            <form action="{{ route('search.role') }}">
                                <input class="form-control" name="key" placeholder="Nhập tên vai trò" style="width: 50%;" type="text">
                                </input>
                            </form>
                            @can('role-add')
                            <a class="btn btn-success float-right n-2" href="{{ route('roles.create') }}">
                                Add
                            </a>
                            @endcan
                        </div>
                    </div>
                    <div class="col-md-12">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">
                                        ID
                                    </th>
                                    <th scope="col">
                                        Tên Vai Trò
                                    </th>
                                    <th scope="col">
                                        Mô tả Vai Trò
                                    </th>
                                    <th>
                                    </th>
                                    <th>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($roles as $item)
                                <tr>
                                    <td scope="row">
                                        {{ $item->id }}
                                    </td>
                                    <td>
                                        {{ $item->name }}
                                    </td>
                                    <td>
                                        {{ $item->display_name }}
                                    </td>
                                    <td>
                                        @can('role-edit')
                                        <a class="btn btn-success" href="{{ route('roles.edit',['id'=>$item->id]) }}">
                                            Sua
                                        </a>
                                        @endcan
                                    </td>
                                    <td>
                                        @can('role-delete')
                                        <a class="btn btn-danger action_delete" data-url="{{ route('roles.delete',['id'=>$item->id]) }}">
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
                        {{ $roles->links() }}
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
</link>