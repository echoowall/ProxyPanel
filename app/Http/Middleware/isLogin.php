<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Redirect;

class isLogin {
	/**
	 * 校验是否已登录
	 *
	 * @param  Request  $request
	 * @param  Closure  $next
	 *
	 * @return mixed
	 */
	public function handle($request, Closure $next) {
		if(auth()->guest()){
			return Redirect::to('login');
		}

		return $next($request);
	}
}
