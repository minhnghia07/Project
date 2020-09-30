@extends('layout_admin.admin')
@section('title')Trang ?
@endsection
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  @include('partials.content-header',['name' =>'Noob','key'=>'Boy'])
  <!-- /.content-header -->

  <!-- Main content -->
  <div class="content">
    <div class="container-fluid">
     
     <div class="col-md-12">
      <h1 style="text-align: center;color: red;font-size: 150px;">Bạn chưa được cấp quyền </h1>
    </div>
  </div>
  <!-- /.row -->
</div><!-- /.container-fluid -->
</div>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection
