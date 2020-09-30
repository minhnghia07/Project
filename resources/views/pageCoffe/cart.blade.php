@extends('master')
@section('content')
<section class="home-slider owl-carousel">
    <div class="slider-item" data-stellar-background-ratio="0.5" style="background-image: url({{ asset('img/bg_3.jpg')}});">
        <div class="overlay">
        </div>
        <div class="container">
            <div class="row slider-text justify-content-center align-items-center">
                <div class="col-md-7 col-sm-12 text-center ftco-animate">
                    <h1 class="mb-3 mt-5 bread">
                        Cart
                    </h1>
                    <p class="breadcrumbs">
                        <span class="mr-2">
                            <a href="index.html">
                                Home
                            </a>
                        </span>
                        <span>
                            Cart
                        </span>
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="ftco-section ftco-cart">
    <div class="container">
        <div class="row">
            <div class="col-md-12 ftco-animate" id="list-cart">
                <div class="cart-table">
                    <table class="table">
                        <thead class="thead-primary">
                            <tr class="text-center">
                                <th>
                                    Image
                                </th>
                                <th>
                                    Product
                                </th>
                                <th>
                                    Price
                                </th>
                                <th>
                                    Quantity
                                </th>
                                <th>
                                    Total
                                </th>
                                <th>
                                    Save
                                </th>
                                <th>
                                    Delete
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @if (Session::has("Cart") != null)
                 @foreach(Session::get('Cart')->products as  $item)
                            <tr class="text-center">
                                <td class="image-prod">
                                    <div class="img" style="background-image:url({{ $item['productInfo']->link_image }});">
                                    </div>
                                </td>
                                <td class="product-name">
                                    <h3>
                                        {{ $item['productInfo']->name_product }}
                                    </h3>
                                </td>
                                <td class="price">
                                    $ {{ number_format($item['productInfo']->price) }}
                                </td>
                                <td class="quantity">
                                    <div class="input-group mb-3">
                                        <input class="quantity form-control input-number" id="quanty-item-{{ $item['productInfo']->id }}" onkeypress="return event.charCode >= 48" min="1" type="number" value="{{ $item['quanty'] }}">
                                        </input>
                                    </div>
                                </td>
                                <td class="total">
                                    $ {{ number_format($item['price']) }}
                                </td>
                                <td class="si-close">
                                    <i class="icon-save" onclick="SaveItemListCart({{ $item['productInfo']->id }});">
                                    </i>
                                </td>
                                <td class="si-close">
                                    <i class="icon-close" onclick="DeleteItemListCart({{ $item['productInfo']->id }});">
                                    </i>
                                </td>
                            </tr>
                            <!-- END TR-->
                            @endforeach
            @endif
                        </tbody>
                    </table>
                </div>  
                <div class="row justify-content-end">
                    <div class="col col-lg-3 col-md-6 mt-5 cart-wrap ftco-animate">
                        @if (Session::has("Cart") != null)
                        <div class="cart-total mb-3">
                            <h3>
                                Cart Totals
                            </h3>
                            <p class="d-flex">
                                <span>
                                    Total Quanty :
                                </span>
                                <span>
                                    {{ Session::get('Cart')->totalQuanty }}
                                </span>
                            </p>
                            <hr>
                                <p class="d-flex total-price">
                                    <span>
                                        Total Price :
                                    </span>
                                    <span>
                                        $ {{ number_format(Session::get('Cart')->totalPrice) }}
                                    </span>
                                </p>
                            </hr>
                        </div>
                        @endif
                        <p class="text-center">
                            <a class="btn btn-primary py-3 px-4" href="{{ route('show-checkout') }}">
                                Proceed to Checkout
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
            <div class="col-md-7 heading-section ftco-animate text-center">
                <span class="subheading">
                    Discover
                </span>
                <h2 class="mb-4">
                    Related products
                </h2>
                <p>
                    Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.
                </p>
            </div>
        </div>
        <div class="row">
            @foreach ($products as $item)
            <div class="col-md-3">
                <div class="menu-entry">
                    <a class="img" href="{{ route('show-productDetail', $item->id)}}" style="background-image: url({{ $item->link_image ,$item->id}});">
                    </a>
                    <div class="text text-center pt-4">
                        <h3>
                            <a href="{{ route('show-productDetail', $item->id)}}">
                                {{ $item->name_product , $item->id}}
                            </a>
                        </h3>
                        <p class="slow">
                            {{ $item->content  }}
                        </p>
                        <p class="price">
                            <span>
                                ${{ $item->price }}
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
