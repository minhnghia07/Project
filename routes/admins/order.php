<?php
//Menu
Route::prefix('order')->group(function () {
	Route::get('/',
		[
			'as'   => 'order.index',
			'uses' => 'Admin\OrderController@index',
            'middleware'=>'can:order-list'
		]);  
	Route::get('delivery/{id}',[
		'as'=>'DeliveryBill',
		'uses'=>'Admin\OrderController@getDelivery',
		 'middleware'=>'can:order-add'
	]);
	Route::get('order-details/{id}',[
		'as'=>'BillDetail',
		'uses'=>'Admin\OrderController@getBillDetail',
		 'middleware'=>'can:order-edit'
	]);
	Route::get('search',[
        'as'=>'search.order',
        'uses'=>'Admin\OrderController@getSearch'
    ]);      
});