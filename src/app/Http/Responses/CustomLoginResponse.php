<?php

namespace App\Http\Responses;

use Laravel\Fortify\Contracts\LoginResponse as LoginResponseContract;

class CustomLoginResponse implements LoginResponseContract
{
    public function toResponse($request)
    {
        $user = $request->user();

        if ($user->is_first_login) {
            $user->is_first_login = false;
            $user->save();

            return redirect('/mypage/profile');
        }

        return redirect('/');
    }
}
