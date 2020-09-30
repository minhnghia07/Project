<?php
//Menu
    Route::prefix('menu')->group(function () {
        Route::get('/',
            [
                'as'   => 'menu.index',
                'uses' => 'Admin\MenuController@index',
                'middleware'=>'can:menu-list'
            ]);
        Route::get('/create',
            [
                'as'   => 'menu.create',
                'uses' => 'Admin\MenuController@create',
                'middleware'=>'can:menu-add'
            ]);
        Route::post('/store',
            [
                'as'   => 'menu.store',
                'uses' => 'Admin\MenuController@store',
            ]);
        Route::get('/edit/{id}',
            [
                'as'   => 'menu.edit',
                'uses' => 'Admin\MenuController@edit',
                'middleware'=>'can:menu-edit'
            ]);
        Route::get('/delete/{id}',
            [
                'as'   => 'menu.delete',
                'uses' => 'Admin\MenuController@delete',
                'middleware'=>'can:menu-delete'
            ]);
        Route::post('/update/{id}',
            [
                'as'   => 'menu.update',
                'uses' => 'Admin\MenuController@update',
            ]);
    });