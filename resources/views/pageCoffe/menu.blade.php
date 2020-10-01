@extends('master')
@section('content')

<section class="home-slider owl-carousel">

      <div class="slider-item" style="background-image: url({{ asset('img/bg_3.jpg')}});" data-stellar-background-ratio="0.5">
      	<div class="overlay"></div>
        <div class="container">
          <div class="row slider-text justify-content-center align-items-center">

            <div class="col-md-7 col-sm-12 text-center ftco-animate">
            	<h1 class="mb-3 mt-5 bread">Our Menu</h1>
	            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>Menu</span></p>
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

    <section class="ftco-section">
    	<div class="container">
        <div class="row">
        	<div class="col-md-6 mb-5 pb-3">
        		<h3 class="mb-5 heading-pricing ftco-animate">Starter</h3>
        		<div class="pricing-entry d-flex ftco-animate">
        			<div class="img" style="background-image: url({{ asset('img/dish-1.jpg')}});"></div>
        			<div class="desc pl-3">
	        			<div class="d-flex text align-items-center">
	        				<h3><span>Cornish - Mackerel</span></h3>
	        				<span class="price">$20.00</span>
	        			</div>
	        			<div class="d-block">
	        				<p>A small river named Duden flows by their place and supplies</p>
	        			</div>
        			</div>
        		</div>
        		<div class="pricing-entry d-flex ftco-animate">
        			<div class="img" style="background-image: url({{ asset('img/dish-2.jpg')}});"></div>
        			<div class="desc pl-3">
	        			<div class="d-flex text align-items-center">
	        				<h3><span>Roasted Steak</span></h3>
	        				<span class="price">$29.00</span>
	        			</div>
	        			<div class="d-block">
	        				<p>A small river named Duden flows by their place and supplies</p>
	        			</div>
	        		</div>
        		</div>
        		<div class="pricing-entry d-flex ftco-animate">
        			<div class="img" style="background-image: url({{ asset('img/dish-3.jpg')}});"></div>
        			<div class="desc pl-3">
	        			<div class="d-flex text align-items-center">
	        				<h3><span>Seasonal Soup</span></h3>
	        				<span class="price">$20.00</span>
	        			</div>
	        			<div class="d-block">
	        				<p>A small river named Duden flows by their place and supplies</p>
	        			</div>
	        		</div>
        		</div>
        		<div class="pricing-entry d-flex ftco-animate">
        			<div class="img" style="background-image: url({{ asset('img/dish-4.jpg')}});"></div>
        			<div class="desc pl-3">
	        			<div class="d-flex text align-items-center">
	        				<h3><span>Chicken Curry</span></h3>
	        				<span class="price">$20.00</span>
	        			</div>
	        			<div class="d-block">
	        				<p>A small river named Duden flows by their place and supplies</p>
	        			</div>
	        		</div>
        		</div>
        	</div>

        	<div class="col-md-6 mb-5 pb-3">
        		<h3 class="mb-5 heading-pricing ftco-animate">Main Dish</h3>
        		<div class="pricing-entry d-flex ftco-animate">
        			<div class="img" style="background-image: url({{ asset('img/dish-5.jpg')}});"></div>
        			<div class="desc pl-3">
	        			<div class="d-flex text align-items-center">
	        				<h3><span>Sea Trout</span></h3>
	        				<span class="price">$49.91</span>
	        			</div>
	        			<div class="d-block">
	        				<p>A small river named Duden flows by their place and supplies</p>
	        			</div>
	        		</div>
        		</div>
        		<div class="pricing-entry d-flex ftco-animate">
        			<div class="img" style="background-image: url({{ asset('img/dish-6.jpg')}});"></div>
        			<div class="desc pl-3">
	        			<div class="d-flex text align-items-center">
	        				<h3><span>Roasted Beef</span></h3>
	        				<span class="price">$20.00</span>
	        			</div>
	        			<div class="d-block">
	        				<p>A small river named Duden flows by their place and supplies</p>
	        			</div>
	        		</div>
        		</div>
        		<div class="pricing-entry d-flex ftco-animate">
        			<div class="img" style="background-image: url({{ asset('img/dish-7.jpg')}});"></div>
        			<div class="desc pl-3">
	        			<div class="d-flex text align-items-center">
	        				<h3><span>Butter Fried Chicken</span></h3>
	        				<span class="price">$20.00</span>
	        			</div>
	        			<div class="d-block">
	        				<p>A small river named Duden flows by their place and supplies</p>
	        			</div>
	        		</div>
        		</div>
        		<div class="pricing-entry d-flex ftco-animate">
        			<div class="img" style="background-image: url({{ asset('img/dish-8.jpg')}});"></div>
        			<div class="desc pl-3">
	        			<div class="d-flex text align-items-center">
	        				<h3><span>Chiken Filet</span></h3>
	        				<span class="price">$20.00</span>
	        			</div>
	        			<div class="d-block">
	        				<p>A small river named Duden flows by their place and supplies</p>
	        			</div>
	        		</div>
        		</div>
        	</div>

        	<div class="col-md-6">
        		<h3 class="mb-5 heading-pricing ftco-animate">Desserts</h3>
        		<div class="pricing-entry d-flex ftco-animate">
        			<div class="img" style="background-image: url({{ asset('img/dessert-1.jpg')}});"></div>
        			<div class="desc pl-3">
	        			<div class="d-flex text align-items-center">
	        				<h3><span>Cornish - Mackerel</span></h3>
	        				<span class="price">$20.00</span>
	        			</div>
	        			<div class="d-block">
	        				<p>A small river named Duden flows by their place and supplies</p>
	        			</div>
        			</div>
        		</div>
        		<div class="pricing-entry d-flex ftco-animate">
        			<div class="img" style="background-image: url({{ asset('img/dessert-2.jpg')}});"></div>
        			<div class="desc pl-3">
	        			<div class="d-flex text align-items-center">
	        				<h3><span>Roasted Steak</span></h3>
	        				<span class="price">$29.00</span>
	        			</div>
	        			<div class="d-block">
	        				<p>A small river named Duden flows by their place and supplies</p>
	        			</div>
	        		</div>
        		</div>
        		<div class="pricing-entry d-flex ftco-animate">
        			<div class="img" style="background-image: url({{ asset('img/dessert-3.jpg')}});"></div>
        			<div class="desc pl-3">
	        			<div class="d-flex text align-items-center">
	        				<h3><span>Seasonal Soup</span></h3>
	        				<span class="price">$20.00</span>
	        			</div>
	        			<div class="d-block">
	        				<p>A small river named Duden flows by their place and supplies</p>
	        			</div>
	        		</div>
        		</div>
        		<div class="pricing-entry d-flex ftco-animate">
        			<div class="img" style="background-image: url({{ asset('img/dessert-4.jpg')}});"></div>
        			<div class="desc pl-3">
	        			<div class="d-flex text align-items-center">
	        				<h3><span>Chicken Curry</span></h3>
	        				<span class="price">$20.00</span>
	        			</div>
	        			<div class="d-block">
	        				<p>A small river named Duden flows by their place and supplies</p>
	        			</div>
	        		</div>
        		</div>
        	</div>

        	<div class="col-md-6">
        		<h3 class="mb-5 heading-pricing ftco-animate">Drinks</h3>
        		<div class="pricing-entry d-flex ftco-animate">
        			<div class="img" style="background-image: url({{ asset('img/drink-5.jpg')}});"></div>
        			<div class="desc pl-3">
	        			<div class="d-flex text align-items-center">
	        				<h3><span>Sea Trout</span></h3>
	        				<span class="price">$49.91</span>
	        			</div>
	        			<div class="d-block">
	        				<p>A small river named Duden flows by their place and supplies</p>
	        			</div>
	        		</div>
        		</div>
        		<div class="pricing-entry d-flex ftco-animate">
        			<div class="img" style="background-image: url({{ asset('img/drink-6.jpg')}});"></div>
        			<div class="desc pl-3">
	        			<div class="d-flex text align-items-center">
	        				<h3><span>Roasted Beef</span></h3>
	        				<span class="price">$20.00</span>
	        			</div>
	        			<div class="d-block">
	        				<p>A small river named Duden flows by their place and supplies</p>
	        			</div>
	        		</div>
        		</div>
        		<div class="pricing-entry d-flex ftco-animate">
        			<div class="img" style="background-image: url({{ asset('img/drink-7.jpg')}});"></div>
        			<div class="desc pl-3">
	        			<div class="d-flex text align-items-center">
	        				<h3><span>Butter Fried Chicken</span></h3>
	        				<span class="price">$20.00</span>
	        			</div>
	        			<div class="d-block">
	        				<p>A small river named Duden flows by their place and supplies</p>
	        			</div>
	        		</div>
        		</div>
        		<div class="pricing-entry d-flex ftco-animate">
        			<div class="img" style="background-image: url({{ asset('img/drink-8.jpg')}});"></div>
        			<div class="desc pl-3">
	        			<div class="d-flex text align-items-center">
	        				<h3><span>Chiken Filet</span></h3>
	        				<span class="price">$20.00</span>
	        			</div>
	        			<div class="d-block">
	        				<p>A small river named Duden flows by their place and supplies</p>
	        			</div>
	        		</div>
        		</div>
        	</div>
        </div>
    	</div>
    </section>

    <section class="ftco-menu mb-5 pb-5">
    	<div class="container">
    		<div class="row justify-content-center mb-5">
          <div class="col-md-7 heading-section text-center ftco-animate">
          	<span class="subheading">Discover</span>
            <h2 class="mb-4">Our Products</h2>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
          </div>
        </div>
    		<div class="row d-md-flex">
	    		<div class="col-lg-12 ftco-animate p-md-5">
		    		<div class="row">
		          <div class="col-md-12 nav-link-wrap mb-5">
		            <div class="nav ftco-animate nav-pills justify-content-center" id="v-pills-tab" role="tablist" aria-orientation="vertical">
		              <a class="nav-link active" id="v-pills-1-tab" data-toggle="pill" href="#v-pills-1" role="tab" aria-controls="v-pills-1" aria-selected="true">Product</a>
		            </div>
		          </div>
		          <div class="col-md-12 d-flex align-items-center">
		            
		            <div class="tab-content ftco-animate" id="v-pills-tabContent">

		              <div class="tab-pane fade show active" id="v-pills-1" role="tabpanel" aria-labelledby="v-pills-1-tab">
		              	<div class="row">

		              		@foreach ($products as $item)
		              		<div class="col-md-3">
		              			<div class="menu-entry">
		              				<a href="{{ route('show-productDetail', $item->id)}}" class="img" style="background-image: url('{{ $item->link_image}}')"></a>
		              				<div class="text text-center pt-4">
		              					<h3 class="slow"><a href="{{ route('show-productDetail', $item->id)}}">{{ $item->name_product }}</a></h3>
		              					<p class="slow">{{ $item->content }}</p>
		              					<p class="price"><span> {{ number_format($item->price)  }} VND</span></p>
		              					<p><a onclick="AddCart({{ $item->id }})"  href=" javascrip:" class="btn btn-primary btn-outline-primary">Add to Cart</a></p>
		              				</div>
		              			</div>
		              		</div>

		              		@endforeach  

		              	</div>
		              	{!! $products->links() !!}  
		              </div> 
		            </div>
		          </div>
		        </div>
		      </div>
		    </div>
    	</div>
    </section>

@endsection