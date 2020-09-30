@extends('layout_admin.admin')
@section('title')Trang Search Order
@endsection
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    @include('partials.content-header',['name' =>'Order','key'=>'Search'])
    <!-- /.content-header -->
    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="section-title">
                <h2>
                    Kết quả tìm kiếm cho: "
                    <u style="color: red;">
                        {{$search_name}}
                    </u>
                    "
                </h2>
            </div>
            <div class="section-title">
                <h3>
                    Tìm thấy
                    <b style="color: red;">
                        {{count($order)}}
                    </b>
                    kết quả
                </h3>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <form action="{{ route('search.order') }}">
                        <input class="form-control" name="key" placeholder="Nhập trạng thái đơn hàng để tìm kiếm" style="margin-bottom: 10px;" type="text">
                        </input>
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
                            @foreach ($order as $item)
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
                                    ${{ number_format($item->total_price) }}
                                </td>
                                <td>
                                    
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
                    {!! $order->links() !!}
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
