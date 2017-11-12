<?php

namespace App\Http\Middleware;

use Closure;

class MustBeOwner
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


      $user=$request->user();//gets user account
      if($user&& $user->role=='owner')
      {
        return $next($request);
    }
    abort(404,'required premission');
  }
}
