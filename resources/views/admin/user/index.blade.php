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
    @include('partials.content-header',['name' =>'User','key'=>'List'])
    <!-- /.content-header -->
    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="col-md-12">
                        <form action="{{ route('search.user') }}">
                            <input class="form-control" name="key" placeholder="Nhập tên người dùng" style="width: 50%;" type="text">
                        </input>
                    </form>
                    @can('user-add')
                    <a class="btn btn-success float-right n-2" href="{{ route('users.create') }}">
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
                                user name
                            </th>
                            <th scope="col">
                                Full Name
                            </th>
                            <th scope="col">
                                Phone
                            </th>
                            <th scope="col">
                                email
                            </th>
                            <th>
                            </th>
                            <th>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $item)
                        <tr>
                            <td scope="row">
                                {{ $item->id }}
                            </td>
                            <td>
                                {{ $item->name }}
                            </td>
                            <td>
                                {{ $item->fullname }}
                            </td>
                            <td>
                                {{ $item->phone }}
                            </td>
                            <td>
                                {{ $item->email }}
                            </td>
                            <td>
                                @can('user-edit')
                                <a class="btn btn-success" href="{{ route('users.edit',['id'=>$item->id]) }}">
                                    Sua
                                </a>
                                @endcan
                            </td>
                            <td>
                               @can('user-delete')
                               <a class="btn btn-danger action_delete" data-url="{{ route('users.delete',['id'=>$item->id]) }}" >
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
            {{ $users->links() }}
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