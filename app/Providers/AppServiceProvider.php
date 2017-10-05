<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Validator;
use App\ProductType;
use App\Cart;
use Auth;
use Hash;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('fontend.layout.header',function($view)
        {
            $loai_sp = ProductType::all();
            
            $view->with('loai_sp', $loai_sp);
        });
        
        view()->composer('fontend.layout.header',function($view)
        {
            $view->with([
                'cart' => new Cart
            ]);
        });


        //Thay đổi mật khẩu trong backend

        Validator::extend('OldPassword',function($attribute, $value, $parameter, $validator){
               return Hash::check($value,Auth::user()->password);
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
