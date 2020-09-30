<?php
Route::prefix('feedback')->group(function () {
	Route::get('/',
		[
			'as'   => 'feedback.index',
			'uses' => 'Admin\FeedBackController@index',
            // 'middleware'=>'can:order-list'
		]);  
	Route::get('feedback/{id}',[
		'as'=>'DeliveryBill',
		'uses'=>'Admin\FeedBackController@getDelivery',
		 // 'middleware'=>'can:order-add'
	]);
	Route::get('feedback-details/{id}',[
		'as'=>'BillDetail',
		'uses'=>'Admin\FeedBackController@getBillDetail',
		 // 'middleware'=>'can:order-edit'
	]);
	Route::get('search',[
        'as'=>'search.feedback',
        'uses'=>'Admin\FeedBackController@getSearch'
    ]);      
});