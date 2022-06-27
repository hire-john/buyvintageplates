<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;

class Metadata
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        try {
            $RouteMetadata = \App\Models\RouteMetadata::where('route', '=', Route::getFacadeRoot()->current()->uri())->firstOrFail();
        }catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            $RouteMetadata = null;
        }
        View::share('Metadata', $RouteMetadata);
        return $next($request);
    }
}