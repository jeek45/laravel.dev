<?php

namespace App\Http\Middleware;

use Closure;


class RolePremission
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * $role - name colum in table premissions
     * @return  '' - if no have premission
     */
    public function handle($request, Closure $next)
    {
        if($request->is('destroy'))  //проверяем действие и записываем имя столбца
        $role = 'delete';
        else  $role = 'update';

                if($request->user()->premission()->first()->$role)  //получаем битове значение столбца
                    return $next($request);
                else
                    die;

    }

}
