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
    <form action="{{ route('users.update',['id'=>$user->id]) }}" enctype="multipart/form-data" method="post">
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        @csrf
                        <div class="form-group">
                            <label>
                                Ten tai khoan (UserName)
                            </label>
                            <input class="form-control" name="name" placeholder="Nhap username" type="text" value="{{ $user->name}}">
                        </input>
                    </div>
                    <div class="form-group">
                        <label>
                            Email :
                        </label>
                        <input class="form-control" name="email" placeholder="Nhap emaill" type="email" value="{{ $user->email}}">
                    </input>
                </div>
                <div class="form-group">
                    <label>
                     Mat khau :
                 </label>
                 <input class="form-control" name="password" placeholder="Nhap password" type="password">
             </input>
         </div>
         <div class="form-group">
            <label>
             Chon vai tro:
         </label>
         <select name="role_id[]" class="form-control select2_init" multiple>                        
          @foreach ($roles as $item)
          <option 
          {{$rolesOfUser->contains('id',$item->id) ? 'selected' : ''}}
          value="{{ $item->id }}">{{ $item->name }}</option>
          @endforeach
      </select>
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

