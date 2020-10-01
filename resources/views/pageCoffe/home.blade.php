@extends('master')
@section('content')
<!-- start banner Area -->
 <section class="home-slider owl-carousel">
      <div class="slider-item" style="background-image: url({{ asset('img/bg_1.jpg') }});">
      	<div class="overlay"></div>
        <div class="container">
          <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

            <div class="col-md-8 col-sm-12 text-center ftco-animate">
            	<span class="subheading">Welcome</span>
              <h1 class="mb-4">The Best Coffee Testing Experience</h1>
              <p class="mb-4 mb-md-5">A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
              <p><a href="{{ route('show-menu') }}" class="btn btn-primary p-3 px-xl-4 py-xl-3">Order Now</a> <a href="{{ route('show-menu') }}" class="btn btn-white btn-outline-white p-3 px-xl-4 py-xl-3">View Menu</a></p>
            </div>

          </div>
        </div>
      </div>

      <div class="slider-item" style="background-image: url({{ asset('img/bg_2.jpg')}});">
      	<div class="overlay"></div>
        <div class="container">
          <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

            <div class="col-md-8 col-sm-12 text-center ftco-animate">
            	<span class="subheading">Welcome</span>
              <h1 class="mb-4">Amazing Taste &amp; Beautiful Place</h1>
              <p class="mb-4 mb-md-5">A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
              <p><a href="{{ route('show-menu') }}" class="btn btn-primary p-3 px-xl-4 py-xl-3">Order Now</a> <a href="{{ route('show-menu') }}" class="btn btn-white btn-outline-white p-3 px-xl-4 py-xl-3">View Menu</a></p>
            </div>

          </div>
        </div>
      </div>

      <div class="slider-item" style="background-image: url({{ asset('img/bg_3.jpg')}});">
      	<div class="overlay"></div>
        <div class="container">
          <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

            <div class="col-md-8 col-sm-12 text-center ftco-animate">
            	<span class="subheading">Welcome</span>
              <h1 class="mb-4">Creamy Hot and Ready to Serve</h1>
              <p class="mb-4 mb-md-5">A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
              <p><a href="{{ route('show-menu') }}" class="btn btn-primary p-3 px-xl-4 py-xl-3">Order Now</a> <a href="{{ route('show-menu') }}" class="btn btn-white btn-outline-white p-3 px-xl-4 py-xl-3">View Menu</a></p>
            </div>

          </div>
        </div>
      </div>
    </section>

    <section class="ftco-intro">
    	<div class="container-wrap">
    		<div class="wrap d-md-flex align-items-xl-end">
	    		<div class="info">
	    			<div class="row no-gutters">
	    				<div class="col-md-4 d-flex ftco-animate">
	    					<div class="icon"><span class="icon-phone"></span></div>
	    					<div class="text">
	    						<h3>{{getConfigValueSettingTable('phone_contact')}}</h3>
	    						<p>{{getConfigValueSettingTable('about_contact')}}</p>
	    					</div>
	    				</div>
	    				<div class="col-md-4 d-flex ftco-animate">
	    					<div class="icon"><span class="icon-my_location"></span></div>
	    					<div class="text">
	    						<h3>{{getConfigValueSettingTable('address_contact')}}</h3>
	    						<p>{{getConfigValueSettingTable('addressDetail_contact')}}</p>
	    					</div>
	    				</div>
	    				<div class="col-md-4 d-flex ftco-animate">
	    					<div class="icon"><span class="icon-clock-o"></span></div>
	    					<div class="text">
	    						<h3>{{getConfigValueSettingTable('open_door')}}</h3>
	    						<p>{{getConfigValueSettingTable('time-open-close')}}</p>
	    					</div>
	    				</div>
	    			</div>
	    		</div>
	    		<div class="book p-4">
	    			<h3>Book a Table</h3>
	    			<form action="#" class="appointment-form">
	    				<div class="d-md-flex">
		    				<div class="form-group">
		    					<input type="text" class="form-control" placeholder="First Name">
		    				</div>
		    				<div class="form-group ml-md-4">
		    					<input type="text" class="form-control" placeholder="Last Name">
		    				</div>
	    				</div>
	    				<div class="d-md-flex">
		    				<div class="form-group">
		    					<div class="input-wrap">
		            		<div class="icon"><span class="ion-md-calendar"></span></div>
		            		<input type="text" class="form-control appointment_date" placeholder="Date">
	            		</div>
		    				</div>
		    				<div class="form-group ml-md-4">
		    					<div class="input-wrap">
		            		<div class="icon"><span class="ion-ios-clock"></span></div>
		            		<input type="text" class="form-control appointment_time" placeholder="Time">
	            		</div>
		    				</div>
		    				<div class="form-group ml-md-4">
		    					<input type="text" class="form-control" placeholder="Phone">
		    				</div>
	    				</div>
	    				<div class="d-md-flex">
	    					<div class="form-group">
		              <textarea name="" id="" cols="30" rows="2" class="form-control" placeholder="Message"></textarea>
		            </div>
		            <div class="form-group ml-md-4">
		              <input type="submit" value="Appointment" class="btn btn-white py-3 px-4">
		            </div>
	    				</div>
	    			</form>
	    		</div>
    		</div>
    	</div>
    </section>

    <section class="ftco-about d-md-flex">
    	<div class="one-half img" style="background-image: url({{ asset('img/about.jpg')}});"></div>
    	<div class="one-half ftco-animate">
    		<div class="overlap">
	        <div class="heading-section ftco-animate ">
	        	<span class="subheading">Discover</span>
	          <h2 class="mb-4">Our Story</h2>
	        </div>
	        <div>
	  				<p>On her way she met a copy. The copy warned the Little Blind Text, that where it came from it would have been rewritten a thousand times and everything that was left from its origin would be the word "and" and the Little Blind Text should turn around and return to its own, safe country. But nothing the copy said could convince her and so it didn’t take long until a few insidious Copy Writers ambushed her, made her drunk with Longe and Parole and dragged her into their agency, where they abused her for their.</p>
	  			</div>
  			</div>
    	</div>
    </section>

    <section class="ftco-section ftco-services">
    	<div class="container">
    		<div class="row">
          <div class="col-md-4 ftco-animate">
            <div class="media d-block text-center block-6 services">
              <div class="icon d-flex justify-content-center align-items-center mb-5">
              	<span class="flaticon-choices"></span>
              </div>
              <div class="media-body">
                <h3 class="heading">Easy to Order</h3>
                <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
              </div>
            </div>      
          </div>
          <div class="col-md-4 ftco-animate">
            <div class="media d-block text-center block-6 services">
              <div class="icon d-flex justify-content-center align-items-center mb-5">
              	<span class="flaticon-delivery-truck"></span>
              </div>
              <div class="media-body">
                <h3 class="heading">Fastest Delivery</h3>
                <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
              </div>
            </div>      
          </div>
          <div class="col-md-4 ftco-animate">
            <div class="media d-block text-center block-6 services">
              <div class="icon d-flex justify-content-center align-items-center mb-5">
              	<span class="flaticon-coffee-bean"></span></div>
              <div class="media-body">
                <h3 class="heading">Quality Coffee</h3>
                <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
              </div>
            </div>    
          </div>
        </div>
    	</div>
    </section>

    <section class="ftco-section">
    	<div class="container">
    		<div class="row align-items-center">
    			<div class="col-md-6 pr-md-5">
    				<div class="heading-section text-md-right ftco-animate">
	          	<span class="subheading">Discover</span>
	            <h2 class="mb-4">Our Menu</h2>
	            <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
	            <p><a href="{{ route('show-menu') }}" class="btn btn-primary btn-outline-primary px-4 py-3">View Full Menu</a></p>
	          </div>
    			</div>
    			<div class="col-md-6">
    				<div class="row">
    					<div class="col-md-6">
    						<div class="menu-entry">
		    					<a href="#" class="img" style="background-image: url('{{ asset('img/menu-1.jpg')}}');"></a>
		    				</div>
    					</div>
    					<div class="col-md-6">
    						<div class="menu-entry mt-lg-4">
		    					<a href="#" class="img" style="background-image: url('{{ asset('img/menu-2.jpg')}}');"></a>
		    				</div>
    					</div>
    					<div class="col-md-6">
    						<div class="menu-entry">
		    					<a href="#" class="img" style="background-image: url('{{ asset('img/menu-3.jpg')}}');"></a>
		    				</div>
    					</div>
    					<div class="col-md-6">
    						<div class="menu-entry mt-lg-4">
		    					<a href="#" class="img" style="background-image: url('{{ asset('img/menu-4.jpg')}}');"></a>
		    				</div>
    					</div>
    				</div>
    			</div>
    		</div>
    	</div>
    </section>

    <section class="ftco-counter ftco-bg-dark img" id="section-counter" style="background-image: url('{{ asset('img/bg_2.jpg')}}');" data-stellar-background-ratio="0.5">
			<div class="overlay"></div>
      <div class="container">
        <div class="row justify-content-center">
        	<div class="col-md-10">
        		<div class="row">
		          <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center">
		              <div class="text">
		              	<div class="icon"><span class="flaticon-coffee-cup"></span></div>
		              	<strong class="number" data-number="{{ $quantity_product }}">0</strong>
		              	<span>Coffee Branches</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center">
		              <div class="text">
		              	<div class="icon"><span class="flaticon-coffee-cup"></span></div>
		              	<strong class="number" data-number="{{ $quantity_category }}">0</strong>
		              	<span>Coffee Category</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center">
		              <div class="text">
		              	<div class="icon"><span class="flaticon-coffee-cup"></span></div>
		              	<strong class="number" data-number="{{ $quantity_order }}">0</strong>
		              	<span>Order by Customer</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center">
		              <div class="text">
		              	<div class="icon"><span class="flaticon-coffee-cup"></span></div>
		              	<strong class="number" data-number="{{$quantity_feedback  }}">0</strong>
		              	<span>FeedBack by Customer</span>
		              </div>
		            </div>
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
          	<span class="subheading">Discover</span>
            <h2 class="mb-4">Best Coffee Sellers</h2>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
          </div>
        </div>
        <div class="row">
          @foreach ($products as $item)
          <div class="col-md-3">
            <div class="menu-entry">
              <a href="{{ route('show-productDetail', $item->id)}}" class="img" style="background-image: url('{{ $item->link_image}}')"></a>
              <div class="text text-center pt-4">
                <h3 class="slow"><a href="{{ route('show-productDetail', $item->id)}}">{{ $item->name_product }}</a></h3>
                <p class="slow">{{ $item->content }}</p>
                <p class="price"><span>  {{ number_format($item->price)  }} VND</span></p>
                 <p><a onclick="AddCart({{ $item->id }})"  href=" javascrip:" class="btn btn-primary btn-outline-primary">Add to Cart</a></p>
              </div>
            </div>
          </div>
          @endforeach    
        </div>
    	</div>
    </section>
     <section class="ftco-section">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section ftco-animate text-center">
            <span class="subheading">Discover</span>
            <h2 class="mb-4">Coffee New</h2>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
          </div>
        </div>
        <div class="row">
          @foreach ($new_products as $item)
          <div class="col-md-3">
            <div class="menu-entry">
              <a href="{{ route('show-productDetail', $item->id)}}" class="img" style="background-image: url('{{ $item->link_image}}')"></a>
              <div class="text text-center pt-4">
                <h3><a href="{{ route('show-productDetail', $item->id)}}">{{ $item->name_product }}</a></h3>
                <p class="slow">{{ $item->content }}</p>
                <p class="price"><span>  {{ number_format($item->price) }} VND</span></p>
                 <p>           
                  <a onclick="AddCart({{ $item->id }})"  href=" javascrip:" class="btn btn-primary btn-outline-primary">Add to Cart</a>
                </p>
              </div>
            </div>
          </div>
          @endforeach    
        </div>
      </div>
    </section>
    <section class="ftco-gallery">
    	<div class="container-wrap">
    		<div class="row no-gutters">
					<div class="col-md-3 ftco-animate">
						<a href="gallery.html" class="gallery img d-flex align-items-center" style="background-image: url('{{ asset('img/gallery-1.jpg')}}');">
							<div class="icon mb-4 d-flex align-items-center justify-content-center">
    						<span class="icon-search"></span>
    					</div>
						</a>
					</div>
					<div class="col-md-3 ftco-animate">
						<a href="gallery.html" class="gallery img d-flex align-items-center" style="background-image: url('{{ asset('img/gallery-2.jpg')}}');">
							<div class="icon mb-4 d-flex align-items-center justify-content-center">
    						<span class="icon-search"></span>
    					</div>
						</a>
					</div>
					<div class="col-md-3 ftco-animate">
						<a href="gallery.html" class="gallery img d-flex align-items-center" style="background-image: url('{{ asset('img/gallery-3.jpg')}}');">
							<div class="icon mb-4 d-flex align-items-center justify-content-center">
    						<span class="icon-search"></span>
    					</div>
						</a>
					</div>
					<div class="col-md-3 ftco-animate">
						<a href="gallery.html" class="gallery img d-flex align-items-center" style="background-image: url('{{ asset('img/gallery-4.jpg')}}');">
							<div class="icon mb-4 d-flex align-items-center justify-content-center">
    						<span class="icon-search"></span>
    					</div>
						</a>
					</div>
        </div>
    	</div>
    </section>
    <section class="ftco-section img" id="ftco-testimony" style="background-image: url('{{ asset('img/bg_1.jpg')}}');"  data-stellar-background-ratio="0.5">
    	<div class="overlay"></div>
	    <div class="container">
	      <div class="row justify-content-center mb-5">
	        <div class="col-md-7 heading-section text-center ftco-animate">
	        	<span class="subheading">Testimony</span>
	          <h2 class="mb-4">Customers Says</h2>
	          <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
	        </div>
	      </div>
	    </div>
	    <div class="container-wrap">
	      <div class="row d-flex no-gutters">
	        @foreach ($feedback as $item)
            <div class="col-lg align-self-sm-end">
            <div class="testimony overlay" style="border: 1px solid;border-color: #15363f;">
               <blockquote>
                  <p class="slow">&ldquo;{{ $item->content }}&rdquo;</p>
                </blockquote>
                <div class="author d-flex mt-4">
                  <div class="image mr-3 align-self-center">
                    <img src="{{ asset('img/person_2.jpg')}}" alt="">
                  </div>
                  <div class="name align-self-center">{{ $item->name }} <span class="position">{{ $item->created_at }}</span></div>
                </div>
            </div>
          </div>
          @endforeach
	        
	        
	      </div>
	    </div>
	  </section>

    <section class="ftco-section">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section ftco-animate text-center">
            <h2 class="mb-4">Recent from blog</h2>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
          </div>
        </div>
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
      </div>
    </section>

		
		<section class="ftco-appointment">
			<div class="overlay"></div>
    	<div class="container-wrap">
    		<div class="row no-gutters d-md-flex align-items-center">
    			<div class="col-md-6 d-flex align-self-stretch">
    				<div id="map" style="margin-left: 92px; margin-top: 76px;">
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.095307416728!2d105.77955771488337!3d21.028872185998257!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x313454b3260b1a8b%3A0x862052392e3f478e!2zOCBUw7RuIFRo4bqldCBUaHV54bq_dCwgTeG7uSDEkMOsbmgsIFThu6sgTGnDqm0sIEjDoCBO4buZaSAxMDAwMCwgVmlldG5hbQ!5e0!3m2!1sen!2s!4v1597821933559!5m2!1sen!2s" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>    
            </div>
    			</div>
	    		<div class="col-md-6 appointment ftco-animate">
	    			 <h3 class="mb-3">Contact Us</h3>
         <form action="{{ route('show-home') }}" method="POST" class="contact-form">
           <input type="hidden" name="_token" value="{{csrf_token()}}">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                   @if(Auth::check())
                   <b><input type="text" id="name" name="name" class="form-control" value ="{{Auth::user()->name}}" required ></b>
                   @else
                   <input type="text" id="name" name="name" class="form-control" placeholder="Your Name" required >
                   @endif
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    @if(Auth::check())
                    <input type="text" id="email" name="email" class="form-control" value ="{{Auth::user()->email}}" required >
                    @else
                    <input type="text" id="email" name="email" class="form-control"  placeholder="Your Email" required >
                    @endif
                  </div>
                  </div>
              </div>
              <div class="form-group">
                @if(Auth::check())
                <input type="text" id="phone" name="phone" class="form-control" value ="{{Auth::user()->phone}}" required >
                @else
                <input type="text" id="phone" name="phone" class="form-control" placeholder="Phone" required >
                @endif
              </div>
              <div class="form-group">
                <textarea  id="content" cols="30" rows="7" name="content" class="form-control" value ="" placeholder="Message"></textarea>
              </div>
              <div class="form-group">
                <input type="submit" value="Send Message" class="btn btn-primary py-3 px-5">
              </div>
            </form>
	    		</div>    			
    		</div>
    	</div>
    </section>
<!-- End blog Area -->
@endsection