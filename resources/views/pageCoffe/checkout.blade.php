@extends('master')
@section('content')
<section class="home-slider owl-carousel">

  <div class="slider-item" style="background-image: url({{ asset('img/bg_3.jpg')}});" data-stellar-background-ratio="0.5">
   <div class="overlay"></div>
   <div class="container">
    <div class="row slider-text justify-content-center align-items-center">

      <div class="col-md-7 col-sm-12 text-center ftco-animate">
       <h1 class="mb-3 mt-5 bread">Checkout</h1>
       <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>Checout</span></p>
     </div>

   </div>
 </div>
</div>
</section>

<section class="ftco-section">
  <div class="container">
    <div class="row">
      <div class="col-xl-8 ftco-animate">
        <form action="{{ route('show-post-checkout') }}" method="post" class="billing-form ftco-bg-dark p-3 p-md-5">
          <input type="hidden" name="_token" value="{{csrf_token()}}">
          <h3 class="mb-4 billing-heading">Billing Details</h3>
          <div class="row align-items-end">
            <div class="col-md-6">
              <div class="form-group">
               <h5 class="mb-2">Email<span>*</span></h5>
               @if(Auth::check())
               <input type="text" id="email" name="email" class="form-control" value ="{{Auth::user()->email}}" required >
               @else
               <input type="text" id="email" name="email" class="form-control"  required >
               @endif
             </div>
           </div>
           <div class="col-md-6">
             <div class="form-group">
              <h5 class="mb-2">Fullname<span>*</span></h5>
              @if(Auth::check())
              <b><input type="text" id="name" name="name" class="form-control" value ="{{Auth::user()->name}}" required ></b>
              @else
              <input type="text" id="name" name="name" class="form-control"  required >
              @endif
            </div>
          </div>

          <div class="w-100"></div>
          <div class="col-md-6">
            <div class="form-group">
             <h5 class="mb-2">Address<span>*</span></h5>
             @if(Auth::check())
             <b><input  type="text" id="address" name="address" class="form-control" value ="{{Auth::user()->address}}" required  ></b>
             @else
             <input type="text" id="adresss" name="address" class="form-control"  required >

             @endif
           </div>
         </div>
         
         <div class="col-md-6">
          <div class="form-group">
            <h5 class="mb-2">Gender<span>*</span></h5>
            @if(Auth::check())
            <b><input type="text" id="gender" name="gender" class="form-control" value ="{{Auth::user()->gender}}" required  ></b>
            @else
            <input type="text" id="gender" name="gender" class="form-control"  required >
            @endif
            
          </div>
          
        </div>
        
        {{-- <div class="w-100"></div> --}}

        <div class="w-100"></div>
        <div class="col-md-6">
          <div class="form-group">
           <h5 class="mb-2">District<span>*</span></h5>
           @if(Auth::check())
           <b><input type="text" id="district" name="district" class="form-control" value ="{{Auth::user()->district}}" required  ></b>
           @else
           <input type="text" id="district" name="district" class="form-control"  required >
           @endif
         </div>
       </div>
       <div class="col-md-6">
         <div class="form-group">
          <h5 class="mb-2">Phone<span>*</span></h5>
          @if(Auth::check())
          <input type="text" id="phone" name="phone" class="form-control" value ="{{Auth::user()->phone}}" required >
          @else
          <input type="text" id="number" name="number" class="form-control"  required >
          @endif
        </div>
      </div>

      <div class="w-100"></div>
      <div class="col-md-6">
        <div class="form-group">
         <h5 class="mb-2">City<span>*</span></h5>
         @if(Auth::check())
         <b><input type="text" id="city" name="city" class="form-control" value ="{{Auth::user()->city}}" required  ></b>
         @else
         <input type="text" id="city" name="city" class="form-control"  required >
         @endif
       </div>
     </div>
     
     
     
     <div class="w-100"></div>
     <div class="col-md-12">
       <div class="form-group mt-4">
        <div class="radio">
          <label class="mr-3"><input type="radio" name="optradio"> Create an Account? </label>
          <label><input type="radio" name="optradio"> Ship to different address</label>
        </div>
      </div>
    </div>
    
  </div>




  <div class="row mt-5 pt-3 d-flex">
    <div class="col-md-6 d-flex">
     <div class="cart-detail cart-total ftco-bg-dark p-3 p-md-4">
      @if (Session::has("Cart") != null)

      
      <h3>Cart Totals</h3>
      <div class="sidebar-box ftco-animate">
        <span> Product : </span>
        @foreach(Session::get('Cart')->products as  $item)
        
        <p class="text">
          {{ $item['productInfo']->name_product }}  x ${{ number_format($item['productInfo']->price)}}  x {{ $item['quanty'] }}  
        </p>
        @endforeach
      </div>
      <p class="d-flex">
        <span>Total Quanty : </span>
        <span>{{ Session::get('Cart')->totalQuanty }}</span>
      </p>

      <hr>
      <p class="d-flex total-price">
        <span>Total Price : </span>
        <span>$ {{ number_format(Session::get('Cart')->totalPrice) }}</span>
      </p>
      

      @endif
    </div>
  </div>
  <div class="col-md-6">
   <div class="cart-detail ftco-bg-dark p-3 p-md-4">
    <h3  class="billing-heading mb-4">Payment Method</h3>
    <div class="form-group">
      <div class="col-md-12">
       <div class="radio">
        <label><input type="radio" name="optradio" class="mr-2"> Direct Bank Tranfer</label>
      </div>
    </div>
  </div>
  <div class="form-group">
    <div class="col-md-12">
     <div class="radio">
      <label><input type="radio" name="optradio" class="mr-2"> Check Payment</label>
    </div>
  </div>
</div>
<div class="form-group">
  <div class="col-md-12">
   <div class="radio">
    <label><input type="radio" name="optradio" class="mr-2"> Paypal</label>
  </div>
</div>
</div>
<div class="form-group">
  <div class="col-md-12">
   <div class="checkbox">
    <label><input type="checkbox" value="" class="mr-2"> I have read and accept the terms and conditions</label>
  </div>
</div>
</div>

@if(Session('Cart') && (Session('Cart')->totalQuanty!=0))
<button type="submit" class="btn btn-primary py-3 px-4" onclick="submitCart()">Place An Order </button>
@else
<button type="submit" class="btn btn-primary py-3 px-4" onclick="submitCart()" disabled>Place An Order</button>
@endif

</div>
</div>
</div>

</form><!-- END -->
</div> <!-- .col-md-8 -->


<div class="col-xl-4 sidebar ftco-animate">
  <div class="sidebar-box">
    <form action="#" class="search-form">
      <div class="form-group">
       <div class="icon">
         <span class="icon-search"></span>
       </div>
       <input type="text" class="form-control" placeholder="Search...">
     </div>
   </form>
 </div>
 {{-- <div class="sidebar-box ftco-animate">
  <div class="categories">
    <h3>Your order </h3>
    @if (Session::has("Cart") != null)

    <div class="cart-total mb-3">
     <h3>Cart Totals</h3>
     <div class="sidebar-box ftco-animate">
      <span> Product : </span>
      @foreach(Session::get('Cart')->products as  $item)
      
      <p class="text">
        {{ $item['productInfo']->name_product }}  x ${{ number_format($item['productInfo']->price)}}  x {{ $item['quanty'] }}  
      </p>
      @endforeach
    </div>
    <p class="d-flex">
      <span>Total Quanty : </span>
      <span>{{ Session::get('Cart')->totalQuanty }}</span>
    </p>

    <hr>
    <p class="d-flex total-price">
      <span>Total Price : </span>
      <span>$ {{ number_format(Session::get('Cart')->totalPrice) }}</span>
    </p>
  </div>

  @endif
  
  
</div>
</div> --}}

<div class="sidebar-box ftco-animate">
  <h3>Recent Blog</h3>
  @foreach ($blogList as $item)
  <div class="block-21 mb-4 d-flex">
    <a href="{{ route('show-blogdetail', $item->id) }}" class="blog-img mr-4" style="background-image: url({{ $item->link_image }});"></a>
    <div class="text">
      <h3 class="heading"><a class="slow" href="{{ route('show-blogdetail', $item->id) }}">{{ $item->content }}</a></h3>
      <div class="meta">
        <div><a href="#"><span class="icon-calendar"></span> {{ $item->created_at }}</a></div>
        <div><a href="#"><span class="icon-person"></span> {{ $item->name }}</a></div>
        <div><a href="#"><span class="icon-chat"></span> </a></div>
      </div>
    </div>
  </div>
  @endforeach
</div>

<div class="sidebar-box ftco-animate">
  <h3>Tag Cloud</h3>
  <div class="tagcloud">
    <a href="#" class="tag-cloud-link">dish</a>
    <a href="#" class="tag-cloud-link">menu</a>
    <a href="#" class="tag-cloud-link">food</a>
    <a href="#" class="tag-cloud-link">sweet</a>
    <a href="#" class="tag-cloud-link">tasty</a>
    <a href="#" class="tag-cloud-link">delicious</a>
    <a href="#" class="tag-cloud-link">desserts</a>
    <a href="#" class="tag-cloud-link">drinks</a>
  </div>
</div>

<div class="sidebar-box ftco-animate">
  <h3>Paragraph</h3>
  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus itaque, autem necessitatibus voluptate quod mollitia delectus aut, sunt placeat nam vero culpa sapiente consectetur similique, inventore eos fugit cupiditate numquam!</p>
</div>

</div>
</div>
</section> <!-- .section -->
@endsection