<?php 
use Illuminate\Support\Facades\Route;

        
        /* ----------------------Home--------------------------*/

        Route::get('', 'Coffe\PageController@showHome')->name('show-home');

        Route::post('', 'Coffe\PageController@showPostContact');

        Route::post('search/name', 'Coffe\PageController@getSearchAjax')->name('search');
        

        /* ----------------------End Home--------------------------*/


        /*----------------------Menu--------------------------*/

        Route::get('category', 'Coffe\MenuController@showMenu')->name('show-menu');

        /* ----------------------End menu--------------------------*/

        /* ----------------------Services--------------------------*/

        Route::get('services', 'Coffe\ServicesController@showServices')->name('show-services');

        /* ----------------------End Services--------------------------*/


        /* ----------------------Blog--------------------------*/

        Route::get('bloggg', 'Coffe\BlogController@showBlog')->name('show-blog');

        Route::get('blogdetail/{id}', 'Coffe\BlogController@showBlogDetail')->name('show-blogdetail');

        /* ----------------------End Blog--------------------------*/

        /* ----------------------About--------------------------*/

        Route::get('about', 'Coffe\AboutController@showAbout')->name('show-about');

        /* ----------------------End About--------------------------*/


        

        /* ----------------------Shop--------------------------*/

         Route::get('shop', 'Coffe\ShopController@showShop')->name('show-shop');

         Route::get('category/{type}', 'Coffe\PageController@CategoryDetails')->name('categorydetails');
        /* ----------------------End Shop--------------------------*/

        /* ----------------------ProductDetail--------------------------*/

        Route::get('productDetail/{id}', 'Coffe\ProductController@ShowProduct')->name('show-productDetail');

        /* ----------------------End ProDetail--------------------------*/

        /* ----------------------ConTact--------------------------*/
        // Route::get('', 'Coffe\PageController@showContact');
        /* ----------------------End Contact--------------------------*/

        /* ----------------------Cart--------------------------*/

        Route::get('cart', 'Coffe\CartController@showCart')->name('show-cart');

        Route::get('Add-Cart/{id}', 'Coffe\CartController@AddCart');

        Route::get('Delete-Item-Cart/{id}', 'Coffe\CartController@DeleteItemCart');

        Route::get('Delete-Item-List-Cart/{id}', 'Coffe\CartController@DeleteItemListCart');

        Route::get('Save-Item-List-Cart/{id}/{quanty}', 'Coffe\CartController@SaveItemListCart');

        /* ----------------------End Cart--------------------------*/



        /* ----------------------Check Out--------------------------*/

        Route::get('checkout', 'Coffe\CheckoutController@showCheckout')->name('show-checkout');

        Route::post('checkout','Coffe\CheckoutController@showPostCheckout')->name('show-post-checkout');
        
        /* ----------------------End CheckOut--------------------------*/




?> 