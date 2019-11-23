<?php

namespace App\Http\Middleware;

use Closure;

class RestaurantAuth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next) {
        if (auth()->guest('restaurant')) {
            return redirect()->route('restaurant.show-login',['url'=> session('restaurant_url')]);
        }
         return redirect()->route('create.order',['url'=> session('restaurant_url')]);
    }
}
