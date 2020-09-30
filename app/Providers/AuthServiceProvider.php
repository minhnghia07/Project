<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
use App\Services\PermissionGateAndPolicyCheckAccess;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();
         //define permission
        $permissionGateAndPolicy = new PermissionGateAndPolicyCheckAccess();
        $permissionGateAndPolicy->setGateAndPolicyAccess();
        // Gate::define('product-edit', function ($user,$id) {
        //     //dd($user);
        //     //dd(config('permissions.access.list-category'));
        //      //dd($id);
        //     $product = Product::find($id);
        //     if ($user->checkPermissionAccess('product_edit') && $user->id === $product->user_id ) {
        //         return true;
        //     }
        //     return false;
           
        // });
        // Gate::define('product-list', function ($user) {

        //     return $user->checkPermissionAccess('product_list');
        // });

    }
    // public function defineGateCategory()
    // {
    //     Gate::define('category-list',"App\Policies\CategoryPolicy@view");
    //     Gate::define('category-add',"App\Policies\CategoryPolicy@create");
    //     Gate::define('category-edit',"App\Policies\CategoryPolicy@update");
    //     Gate::define('category-delete',"App\Policies\CategoryPolicy@delete");
    // }
}
