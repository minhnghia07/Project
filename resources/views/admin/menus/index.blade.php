@extends('layout_admin.admin')
@section('title')Trang Menu Admin
@endsection
@section('content')
@section('js')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
<script type="text/javascript" src="{{ asset('admins\main.js') }}"></script>
@endsection
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  @include('partials.content-header',['name' =>'Menu','key'=>'List'])
  <!-- /.content-header -->

  <!-- Main content -->
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          @can('menu-add')
          <a href=" {{ route('menu.create') }}" class="btn btn-success float-right n-2" >Add</a>
          @endcan
        </div>
        <div class="col-md-12">
          <table class="table">
           <thead>
             <tr>
               <th scope="col">ID</th>
               <th scope="col">Ten Menu</th>
               <th scope="col">Parent ID</th>              
               <th scope="col">Ngay tao</th>
               <th></th>
               <th></th>
             </tr>
           </thead>
           <tbody>
            @foreach ($menus as $item)
            <tr>
              <td scope="row">{{ $item->id }}</td>
              <td>{{ $item->name }}</td>
              <td>{{ $item->parent_id }}</td>
              <td>{{ $item->created_at }}</td>
              <td>
                @can('menu-edit')
                <a href="{{ route('menu.edit',['id'=>$item->id]) }}" class="btn btn-success">Sua</a>
                @endcan
              </td>
              <td>
               @can('menu-delete')
               <a data-url="{{ route('menu.delete',['id'=>$item->id]) }}" class="btn btn-danger action_delete">Xoa</a>
               @endcan
             </td>
             <td></td>
           </tr>
           @endforeach
         </tbody>
       </table>
     </div>
     <div class="col-md-12">
      {{ $menus->links() }}
    </div>
  </div>
  <!-- /.row -->
</div><!-- /.container-fluid -->
</div>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection
