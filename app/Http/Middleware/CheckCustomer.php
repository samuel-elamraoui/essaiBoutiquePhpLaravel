<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use App\Customer;

class CheckCustomer
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $customers = Customer::where('user_id', Auth::id())->get();
        $foundCustomer = $customers->firstWhere('user_id', Auth::id());
        if ($foundCustomer){
//            dd($request);
            return $next($request);
        } else {
            return redirect(route('userCreate'));
        }
    }
}
