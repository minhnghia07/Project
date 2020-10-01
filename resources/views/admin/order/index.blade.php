@extends('layout_admin.admin')
@section('title')Trang Order Admin
@endsection
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    @include('partials.content-header',['name' =>'Order','key'=>'List'])
    <!-- /.content-header -->
    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <form action="{{ route('search.order') }}">
                        <input class="form-control" name="key" placeholder="Nhập trạng thái đơn hàng" style="width: 50%;margin-bottom: 5px;" type="text">
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
                                    address
                                </th>
                                <th scope="col">
                                    district
                                </th>
                                <th scope="col">
                                    city
                                </th>
                                <th scope="col">
                                    total price
                                </th>
                                <th scope="col">
                                    status
                                </th>
                                <td>
                                </td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($Bill as $item)
                            <tr>
                                <td scope="row">
                                    {{ $item->id }}
                                </td>
                                <td>
                                    {{ $item->fullname }}
                                </td>
                                <td>
                                    {{ $item->address}}
                                </td>
                                <td>
                                    {{ $item->district}}
                                </td>
                                <td>
                                    {{ $item->city}}
                                </td>
                                <td>
                                    {{ number_format($item->total_price) }} VND
                                </td>
                                <td>
                                    @can('order-add')
                                    <div style="display: inline-grid;">
                                        {{$item->status}} 
                            @if($item->status=='Chưa Giao Hàng')
                                        <a class="btn btn-danger" href="{{route('DeliveryBill',$item->id)}}">
                                            Giao hàng
                                        </a>
                                        @else
                                        <button class="btn btn-success" type="button">
                                            <i aria-hidden="true" class="fa fa-check">
                                            </i>
                                        </button>
                                        @endif
                                    </div>
                                    @endcan
                                </td>
                                <td>
                                    @can('order-edit')
                                    <a class="btn btn-warning" href="{{route('BillDetail',$item->id)}}">
                                        <i aria-hidden="true" class="fa fa-fa-th-list">
                                        </i>
                                        Chi tiết
                                    </a>
                                    @endcan
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="col-md-12">
                    {{ $Bill->links() }}
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
