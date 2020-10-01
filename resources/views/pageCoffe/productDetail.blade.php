@extends('master')
@section('content')
<section class="home-slider owl-carousel">

      <div class="slider-item" style="background-image: url({{ asset('img/bg_3.jpg')}});" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
          <div class="row slider-text justify-content-center align-items-center">

            <div class="col-md-7 col-sm-12 text-center ftco-animate">
                <h1 class="mb-3 mt-5 bread">Product Detail</h1>
                <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>Product Detail</span></p>
            </div>

          </div>
        </div>
      </div>
    </section>
<section class="ftco-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 mb-5 ftco-animate">
                <a class="image-popup" href="">
                    <img alt="Colorlib Template" class="img-fluid" src="{{ $proSingle->link_image }}"/>
                </a>
            </div>
            <div class="col-lg-6 product-details pl-md-5 ftco-animate">
                <h3>
                    {{ $proSingle->name_product }}
                </h3>
                <p class="price">
                    <span>
                        {{number_format($proSingle->price)}} VND
                    </span>
                </p>
                <p>
                    {{ $proSingle->content }}
                </p>
                <div class="row mt-4">
                    <div class="w-100">
                    </div>
                    <div class="input-group col-md-6 d-flex mb-3">
                        <span class="input-group-btn mr-2">
                            <button class="quantity-left-minus btn" data-field="" data-type="minus" type="button">
                                <i class="icon-minus">
                                </i>
                            </button>
                        </span>
                        <input class="form-control input-number" id="quantity" max="100" min="1" name="quantity" type="text" value="1">
                            <span class="input-group-btn ml-2">
                                <button class="quantity-right-plus btn" data-field="" data-type="plus" type="button">
                                    <i class="icon-plus">
                                    </i>
                                </button>
                            </span>
                        </input>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <div class="text text-center pt-4">
                            <p>
                                <a class="btn btn-primary btn-outline-primary" href=" javascrip:" onclick="AddCart({{ $proSingle->id }})">
                                Add to Cart
                            </a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="fb-comments" data-href="https://www.facebook.com/phinongne/" data-numposts="50" data-width="1300" style="background-color: white;margin-left: 100px;" ></div>
<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
            <div class="col-md-7 heading-section ftco-animate text-center">
                <span class="subheading">
                    Discover
                </span>
                <h2 class="mb-4">
                    Recommand products
                </h2>
                <p>
                    Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.
                </p>
            </div>
        </div>
        <div class="row">
            @foreach ($Recommand_Products as $item)
            <div class="col-md-3 ">
                <div class="menu-entry ">
                    <a class="img" href="{{ route('show-productDetail', $item->id)}}" style="background-image: url({{ $item->link_image }});">
                    </a>
                    <div class="text text-center pt-4">
                        <h3>
                            <a href="{{ route('show-productDetail',$item->id) }}">
                                {{ $item->name_product }}
                            </a>
                        </h3>
                        <p class="slow">
                            {{ $item->content }}
                        </p>
                        <p class="price">
                            <span>
                                {{ number_format($item->price) }} VND
                            </span>
                        </p>
                        <p>
                            <a class="btn btn-primary btn-outline-primary" href=" javascrip:" onclick="AddCart({{ $item->id }})">
                                Add to Cart
                            </a>
                        </p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection
