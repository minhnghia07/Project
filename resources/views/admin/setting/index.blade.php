@extends('layout_admin.admin')
@section('title')Settings
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
        @include('partials.content-header',['name' =>'Settings','key'=>'Project'])
        <!-- /.content-header -->
        <!-- Main content -->
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <form action="{{ route('search.setting') }}">
                            <input class="form-control" name="key" placeholder="Nhập config key" style="width: 50%;" type="text">
                            </input>
                        </form>
                        <div class="btn-group float-right">
                            @can('setting-add')
                            <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
                                Add Setiing
                                <span class="caret">
                                </span>
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="{{ route('settings.create').'?type=text '}}">
                                        Text
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('settings.create').'?type=textarea '}}">
                                        Text Area
                                    </a>
                                </li>
                            </ul>
                        </div>
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
                                        Config key
                                    </th>
                                    <th scope="col">
                                        Config Value
                                    </th>
                                    <th>
                                    </th>
                                    <th>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($settings as $item)
                                <tr>
                                    <td scope="row">
                                        {{ $item->id }}
                                    </td>
                                    <td>
                                        {{ $item->config_key }}
                                    </td>
                                    <td>
                                        {{ $item->config_value }}
                                    </td>
                                    <td>
                                        @can('setting-edit')
                                        <a class="btn btn-success" href="{{ route('settings.edit',['id'=>$item->id]).'?type='.$item->type }}">
                                            Sua
                                        </a>
                                        @endcan
                                    </td>
                                    <td>
                                        @can('setting-delete')
                                        <a class="btn btn-danger action_delete" data-url="{{ route('settings.delete',['id'=>$item->id]) }}" href="">
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
                        {{ $settings->links() }}
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