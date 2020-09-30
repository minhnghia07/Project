<?php

namespace App\Providers;

use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;
use App\Category;
use Illuminate\Support\Facades\Auth;
use DB;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        view()->composer('header',function($view){
           $categories = Category::where('parent_id',0)->get();

            $view->with('categories',$categories);
        });
        view()->composer('partials.sidebar',function($view){
           $user= Auth::user();
            $view->with('user',$user);
        });

        view()->composer('footer',function($view){         
           $blogList = DB::table('blogs')
           ->leftJoin('users', 'users.id', '=', 'blogs.id_user')
           ->select('blogs.*', 'users.name')->paginate(3);

            $view->with('blogList',$blogList);
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
       Schema::defaultStringLength(191);
    }
}
