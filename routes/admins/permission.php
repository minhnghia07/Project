<?php  
Route::prefix('permissions')->group(function () {       
    Route::get('/create',
        [
            'as'=>'permissions.create',
            'uses'=>'Admin\PermissionController@createPermission'
        ]);
    Route::post('/store',
        [
            'as'=>'permissions.store',
            'uses'=>'Admin\PermissionController@store'
        ]);
    
});