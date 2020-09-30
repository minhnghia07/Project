<?php 
Route::prefix('categories')->group(function () {
    Route::get('/',
        [
            'as'   => 'categories.index',
            'uses' => 'Admin\CategoryController@index',
            'middleware'=>'can:category-list'
        ]);
    Route::get('/create',
        [
            'as'   => 'categories.create',
            'uses' => 'Admin\CategoryController@create',
            'middleware'=>'can:category-add'
        ]);       
    Route::post('/store',
        [
            'as'   => 'categories.store',
            'uses' => 'Admin\CategoryController@store',
        ]);
    Route::get('/edit/{id}',
        [
            'as'   => 'categories.edit',
            'uses' => 'Admin\CategoryController@edit',
            'middleware'=>'can:category-edit'
        ]);
    Route::get('/delete/{id}',
        [
            'as'   => 'categories.delete',
            'uses' => 'Admin\CategoryController@delete',
            'middleware'=>'can:category-delete'
        ]);
    Route::post('/update/{id}',
        [
            'as'   => 'categories.update',
            'uses' => 'Admin\CategoryController@update',
        ]);
    Route::get('search',[
        'as'=>'search.category',
        'uses'=>'Admin\CategoryController@getSearch'
    ]);
});