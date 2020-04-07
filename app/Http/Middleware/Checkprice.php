<?php

namespace App\Http\Middleware;
use Illuminate\Auth\Events\Validated;
use Closure;

class Checkprice
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     *
     *
     */
    public function handle($request, Closure $next)
    {

      $va = $request->precio;

        if ($va< 200) {
          return $next($request);
        }
        else {

        return redirect('/formulario')->with('pr','Dato debe ser menor a 200');
        }



    }

}
