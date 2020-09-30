@extends('layout_admin.admin')
@section('title')Trang Admin
@endsection
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
@include('partials.content-header',['name' =>'View','key'=>'Home'])
  <!-- /.content-header -->

  <!-- Main content -->
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <table class="table">
           <thead>
             <tr>
               <th scope="col">1</th>
               <th scope="col">2</th>
               <th scope="col">3</th>
               <th scope="col">4</th>
             </tr>
           </thead>
           <tbody>
             <tr>
               <td scope="row"></td>
               <td></td>
               <td></td>
               <td></td>
             </tr>
             <tr>
              <td scope="row"></td>
              <td></td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td scope="row"></td>
              <td></td>
              <td></td>
              <td></td>
            </tr>
          </tbody>
        </table>
      </div>

    </div>
    <!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection
