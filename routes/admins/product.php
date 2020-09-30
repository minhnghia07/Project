<?php  
//san pham
    Route::prefix('product')->group(function () {
        Route::get('/',
            [
                'as'   => 'product.index',
                'uses' => 'Admin\ProductController@index',
                'middleware'=>'can:product-list'
            ]);
        Route::get('/create',
            [
                'as'   => 'product.create',
                'uses' => 'Admin\ProductController@create',
                'middleware'=>'can:product-add'
            ]);
        Route::post('/store',
            [
                'as'   => 'product.store',
                'uses' => 'Admin\ProductController@store',
            ]);
        Route::get('/edit/{id}',
            [
                'as'   => 'product.edit',
                'uses' => 'Admin\ProductController@edit',
                'middleware'=>'can:product-edit,id'
            ]);
        Route::get('/delete/{id}',
            [
                'as'   => 'product.delete',
                'uses' => 'Admin\ProductController@delete',
                'middleware'=>'can:product-delete'
            ]);
        Route::post('/update/{id}',
            [
                'as'   => 'product.update',
                'uses' => 'Admin\ProductController@update',
            ]);
        Route::get('search',[
        'as'=>'search.product',
        'uses'=>'Admin\ProductController@getSearch'
    ]);
    });