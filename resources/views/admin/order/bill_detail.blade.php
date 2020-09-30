@extends('layout_admin.admin')
@section('title')Trang Chi tiết đơn hàng
@endsection
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    @include('partials.content-header',['name' =>'Order','key'=>'Detail'])
    <!-- /.content-header -->
    <!-- Main content -->
    <div class="content">
        <a class="btn btn-primary" href="{{ route('order.index') }}">Back</a>
        <h2 style="text-align: center;">Thông tin đơn hàng</h2>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">
                                    ID
                                </th>
                                <th scope="col">
                                    Name Product
                                </th>                             
                                <th scope="col">
                                    Image Product
                                </th>
                                <th scope="col">
                                   Price
                                </th>
                                <th scope="col">
                                    Quantity
                                </th>
                                <th scope="col">
                                   Total Price
                                </th>                                                             
                            </tr>
                        </thead>
                        <tbody>
                           @foreach($bill_detail as $item)
                           <?php $product = App\Product::where('id',$item->id_product)->first();                  
                           ?>
                           <tr>
                            <td>{{$product->id}}</td>
                            <td>{{$product->name_product}}</td>                          
                            <td>
                                <img src="{{$product->link_image}}" width="150px" >
                            </td>
                            <td>{{number_format($item->price)}}<u>$</u></td>
                            <td>{{$item->quantity}}</td>
                            <td>{{number_format($item->price*$item->quantity)}}<u>$</u></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <h4 style="margin: 35px;color: red;">Tổng: {{number_format($bill->total_price)}}<u>$</u></h4>
            </div> 
            {!! $bill_detail->links() !!}          
        </div>
        <!-- /.row -->
    </div>
    <h2 style="text-align: ;">Thông tin khách hàng</h2>
    <hr>
    <div class="container-fluid">
        <div class="col-lg-4 col-md-4">
            <div class="row">
                <div class="col-lg-12">
                    <div class="checkout__input">
                        <h5 class="mb-2">Họ và tên: {{$customer->fullname}}</h5>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="checkout__input">
                        <h5>Giới tính: {{$customer->gender}}</h5>
                    </div>
                </div>
            </div>
            <div class="checkout__input">
                <h5 class="mb-2">Tỉnh: {{$bill->address}}</h5>
            </div>

            <div class="checkout__input">
                <h5 class="mb-2">Thành phố: {{$bill->city}}</h5>
            </div>
            <div class="checkout__input">
                <h5 class="mb-2">Phường: {{$bill->district}}</h5>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="checkout__input">
                        <h5 class="mb-2">Số điện thoại: +{{$bill->phone}}</h5>

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="checkout__input">
                        <h5 class="mb-2">Email: {{$customer->email}}</h5>
                    </div>
                </div>
            </div>                       
            <div>

                <div class="col-lg-12" >
                    <div class="row">
                        <h5 style="margin-right: 10px;" >Trạng thái : </h5>                 
                        @if($bill->status=='Chưa xử lý')
                        <a href="{{route('DeliveryBill',$bill->bill_id)}}" class="btn btn-danger"><i class="fa fa-check" aria-hidden="true"></i>Chưa xử lý</a>
                        @else
                        <button type="button" class="btn btn-success"  ><i class="fa fa-check" aria-hidden="true"></i>Đã xử lý</button>
                        @endif
                    </div>                      
                </div>
            </div>
        </div>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    @endsection
