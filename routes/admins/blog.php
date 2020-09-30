<?php
Route::middleware([adminLogin::class])->prefix('blog')->group(function () {
    Route::get('/',
        [
            'as'         => 'blog.index',
            'uses'       => 'Admin\BlogController@index',
            'middleware' => 'can:blog-list'
        ]);
    Route::get('/create',
        [
            'as'         => 'blog.create',
            'uses'       => 'Admin\BlogController@create',
            'middleware' => 'can:blog-add'
        ]);
    Route::post('/store',
        [
            'as'   => 'blog.store',
            'uses' => 'Admin\BlogController@store',
        ]);
    Route::get('/edit/{id}',
        [
            'as'         => 'blog.edit',
            'uses'       => 'Admin\BlogController@edit',
            'middleware' => 'can:blog-edit'
        ]);
    Route::post('/update/{id}',
        [
            'as'   => 'blog.update',
            'uses' => 'Admin\BlogController@update',
        ]);
    Route::get('/delete/{id}',
        [
            'as'         => 'blog.delete',
            'uses'       => 'Admin\BlogController@delete',
            'middleware' => 'can:blog-delete'
        ]);
     Route::get('search',[
        'as'=>'search.blog',
        'uses'=>'Admin\BlogController@getSearch'
    ]);
});
