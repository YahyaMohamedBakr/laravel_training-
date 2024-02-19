<?php

namespace App\Http\Middleware;

use App\Models\Posts;
use App\Models\Users;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

class Check_Author
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {

        $id = Cookie::get('user_id');
        $author = Posts::where('post_user', $id)->first();
        
        return $next($request);
    }
}
