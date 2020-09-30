@extends('layout_admin.admin')
@section('title')Trang Setting
@endsection
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    @include('partials.content-header',['name' =>'Setting','key'=>'Edit'])
    <div class="col-md-12">      
    </div>
    <!-- /.content-header -->
    <!-- Main content -->
    <form action="{{ route('settings.update',['id'=>$setting->id]) }}" enctype="multipart/form-data" method="post">
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        @csrf
                        <div class="form-group">
                            <label>
                             Config Key
                         </label>
                         <input class="form-control @error('config_key') is-invalid @enderror" name="config_key" placeholder="Nhap config key" type="text" value="{{ $setting->config_key }}">
                     </input>
                     @error('config_key')
                     <div class="alert alert-danger">{{ $message }}</div>
                     @enderror                              
                 </div>

                 @if(request()->type === 'text')
                 <div class="form-group">
                    <label>
                     Config Value
                 </label>
                 <input class="form-control @error('config_value') is-invalid @enderror" name="config_value" placeholder="Nhap config value" type="text" value="{{ $setting->config_value }}" >
             </input>    
             @error('config_value')
             <div class="alert alert-danger">{{ $message }}</div>
             @enderror                         
         </div>
         @elseif(request()->type === 'textarea')
         <div class="form-group">
           <label>
             Config Value
         </label>
         <textarea class="form-control @error('config_value') is-invalid @enderror" name="config_value" placeholder="Nhap config value" rows="8">{{ $setting->config_value }}
         </textarea>  
     </div> 
     @error('config_value')
     <div class="alert alert-danger">{{ $message }}</div>
     @enderror                             
     @endif

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

</link>