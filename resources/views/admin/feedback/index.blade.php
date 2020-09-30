@extends('layout_admin.admin')
@section('title')Trang FeedBack Admin
@endsection
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    @include('partials.content-header',['name' =>'FeedBack','key'=>'List'])
    <!-- /.content-header -->
    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <form action="{{ route('search.feedback') }}">
                        <input class="form-control" name="key" placeholder="Nhập nội dung " style="width: 50%;margin-bottom: 5px;" type="text">
                        </input>
                    </form>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">
                                    ID
                                </th>
                                <th scope="col">
                                    Name user
                                </th>
                                <th scope="col">
                                   Content
                             </th>
                             <th></th>                                                                          
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($FeedBack as $item)
                            <tr>
                                <td scope="row">
                                    {{ $item->id }}
                                </td>
                                <td>
                                    {{ $item->fullname }}
                                </td> 
                                <td>
                                    {{ $item->content }}
                                </td>                                                             
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="col-md-12">
                    {{ $FeedBack->links() }}
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
