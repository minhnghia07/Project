@extends('layout_admin.admin')
@section('title')Product
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
  @include('partials.content-header',['name' =>'Product','key'=>'List'])
  <!-- /.content-header -->
  <!-- Main content -->
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <form action="{{ route('search.product') }}">
           <input class="form-control" type="text" name ="key" placeholder="Nhập tên danh mục" style="width: 50%;">       
         </form>
         @can('product-add')
         <a class="btn btn-success float-right n-2" href="{{ route('product.create') }}">
          Add
        </a>
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
                Ten san pham
              </th>
              <th scope="col">
                Hinh anh san pham
              </th>
              <th scope="col">
                Hinh anh san pham
              </th>
              <th scope="col">
                Gia
              </th>
              <th scope="col">
                Noi dung
              </th>
              <th scope="col">
                Danh muc
              </th>
              <th>
              </th>
              <th>
              </th>
            </tr>
          </thead>
          <tbody>
            @foreach ($products as $item)
            <tr>
              <td scope="row">
                {{ $item->id }}
              </td>
              <td>
                {{ $item->name_product }}
              </td>
              <td>
                <img height="100px" src="{{ $item->link_image }}" width="100px">
              </img>
            </td>
            <td>
              <img height="100px" src="{{ $item->feature_image_path }}" width="100px">
            </img>
          </td>
          <td>
           $ {{ number_format( $item->price) }}
          </td>
          <td>
            {{ $item->content }}
          </td>
          <td>
            {{ optional( $item->category)->name }}
          </td>
          <td>
            @can('product-edit')
            <a class="btn btn-success" href="{{ route('product.edit',['id'=>$item->id]) }}">
              Sua
            </a>
            @endcan
          </td>
          <td>
            @can('product-delete')
            <a class="btn btn-danger action_delete" data-url="{{ route('product.delete',['id'=>$item->id]) }}" href="">
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
    {{ $products->links() }}
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
