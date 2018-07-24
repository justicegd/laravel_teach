<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Validator;

class CreateOrder
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $rules    = [
            'title' => 'required',
        ];
        $messages = [
            'title.required' => '錯誤,title為空值',
        ];

        $validator = Validator::make($request->all(), $rules, $messages);
        dd($validator->getMessageBag()->messages());

        return $next($request);
    }
}
