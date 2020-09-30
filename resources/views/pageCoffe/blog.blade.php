@extends('master')
@section('content')
 <section class="home-slider owl-carousel">

      <div class="slider-item" style="background-image: url({{ asset('img/bg_3.jpg')}});" data-stellar-background-ratio="0.5">
      	<div class="overlay"></div>
        <div class="container">
          <div class="row slider-text justify-content-center align-items-center">

            <div class="col-md-7 col-sm-12 text-center ftco-animate">
            	<h1 class="mb-3 mt-5 bread">Blog</h1>
	            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>Blog</span></p>
            </div>

          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section">
      <div class="container">
        <div class="row d-flex">
          @foreach ($blogList as $item)
          <div class="col-md-4 d-flex ftco-animate">
            <div class="blog-entry align-self-stretch">
              <a href="{{ route('show-blogdetail', $item->id) }}" class="block-20" style="background-image: url({{ $item->link_image }});">
              </a>
              <div class="text py-4 d-block">
                <div class="meta">
                  <div><a href="#">{{ $item->created_at}}</a></div>
                  <div><a href="{{ route('show-blogdetail', $item->id) }}">{{ $item->name }}</a></div>
                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                </div>
                <h3 class="heading mt-2"><a href="{{ route('show-blogdetail', $item->id) }}">{{ $item->title }}</a></h3>
                <p class="slow" >{{ $item->content }}</p>
              </div>
            </div>
          </div>
          @endforeach
          
        </div>
        {{-- {!! $blogList->links() !!} --}}
        {{-- <div class="row mt-5">
          <div class="col text-center">
            <div class="block-27">
              
            </div>
          </div>
        </div> --}}
      </div>
    </section>
@endsection