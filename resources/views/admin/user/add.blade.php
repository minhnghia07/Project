@extends('layout_admin.admin')
@section('title')Trang Add User
@endsection
@section('css')
<link href="{{ asset('vendors/select2/select2.min.css') }}" rel="stylesheet"/>
<link href="{{ asset('admins/user/add.css') }}" rel="stylesheet"/>
@endsection
@section('js')
<script src="{{ asset('vendors/select2/select2.min.js') }}">
</script>
<script src="{{ asset('admins/user/add.js') }}">
</script>
@endsection
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    @include('partials.content-header',['name' =>'User','key'=>'Add'])
    <div class="col-md-12">
    </div>
    <!-- /.content-header -->
    <!-- Main content -->
    <form action="{{ route('users.store') }}" enctype="multipart/form-data" method="post">
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        @csrf
                        <div class="form-group">
                            <label>
                                Ten tai khoan (UserName)
                            </label>
                            <input class="form-control @error('name') is-invalid @enderror" name="name" placeholder="Nhap username" type="text" value="{{ old('name') }}">
                        </input>
                        @error('name')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror   
                    </div>
                    <div class="form-group">
                        <label>
                            Email :
                        </label>
                        <input class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Nhap emaill" type="email" value="{{ old('email') }}">
                    </input>
                    @error('email')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror   
                </div>
                <div class="form-group">
                    <label>
                     Mat khau :
                 </label>
                 <input class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Nhap password" type="password">
             </input>
             @error('password')
             <div class="alert alert-danger">{{ $message }}</div>
             @enderror   
         </div>
         <div class="form-group">
            <label>
             Chon vai tro:
         </label>
         <select name="role_id[] " class="form-control select2_init" multiple>                       
          @foreach ($roles as $item)
          <option value="{{ $item->id }}">{{ $item->name }}</option>
          @endforeach
      </select>
      @error('role_id')
      <div class="alert alert-danger">{{ $message }}</div>
      @enderror   
  </div>
  <div class="col-md-12">
    <button class="btn btn-primary" type="submit">
        Submit
    </button>
</div>
</div>
<!-- /.row -->
</div>
<!-- /.container-fluid -->
</div>
<!-- /.content -->
</div>
</form>
</div>
<!-- /.content-wrapper -->
@endsection

