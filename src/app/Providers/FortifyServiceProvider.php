<?php

namespace App\Providers;

use App\Actions\Fortify\CreateNewUser;
use App\Actions\Fortify\ResetUserPassword;
use App\Actions\Fortify\UpdateUserPassword;
use App\Actions\Fortify\UpdateUserProfileInformation;

use App\Http\Responses\CustomLoginResponse;
use Laravel\Fortify\Contracts\LoginResponse;

use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Str;
use Laravel\Fortify\Fortify;

use App\Http\Requests\RegisterRequest;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;

class FortifyServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Fortify::createUsersUsing(CreateNewUser::class);

        Fortify::registerView(function () {
            return view('auth.register');
        });

        Fortify::loginView(function () {
            return view('auth.login');
        });

        RateLimiter::for('login', function (Request $request) {
            $email = (string) $request->email;

            return Limit::perMinute(10)->by($email . $request->ip());
        });

            $this->app->singleton(
                LoginResponse::class,
                CustomLoginResponse::class
        );


        //RegisterRequest を使ったバリデーション
        // Fortify::createUsersUsing(function (array $input) {
        // $request = new \App\Http\Requests\RegisterRequest();
        // $request->merge($input);
        // $request->validateResolved();

        // return \App\Models\User::create([
            // 'name' => $input['name'],
            // 'email' => $input['email'],
            // 'password' => bcrypt($input['password']),
        // ]);
    // });

        //LoginRequest を使ったバリデーション
        // Fortify::authenticateUsing(function (Request $request) {
        // $loginRequest = new \App\Http\Requests\LoginRequest();
        // $loginRequest->merge($request->all());
        // $loginRequest->validateResolved();

        // $user = \App\Models\User::where('email', $request->email)->first();

        // if ($user && \Hash::check($request->password, $user->password)) {
            // return $user;
        // }
        // return null;
    // });



        // Fortify::updateUserProfileInformationUsing(UpdateUserProfileInformation::class);
        // Fortify::updateUserPasswordsUsing(UpdateUserPassword::class);
        // Fortify::resetUserPasswordsUsing(ResetUserPassword::class);

        // RateLimiter::for('login', function (Request $request) {
            // $throttleKey = Str::transliterate(Str::lower($request->input(Fortify::username())).'|'.$request->ip());

            // return Limit::perMinute(5)->by($throttleKey);
        // });

        // RateLimiter::for('two-factor', function (Request $request) {
            // return Limit::perMinute(5)->by($request->session()->get('login.id'));
        // });
    }
}
