<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    use AuthenticatesUsers;
    protected $redirectTo = '/auth/dashboard';
    protected $redirectAfterLogout = '/auth/login';
    protected $guard = 'admins';
    protected $loginView = 'auth.pages.login.index';
    protected $username = 'email';

    public function __construct()
    {
        $this->middleware('guest:admins', ['except' => ['logout'] ]);
    }

    protected function showLoginForm()
    {
        return view($this->loginView);
    }

    protected function login(Request $request)
    {
        $this->validateLogin($request);

        $credentials = $this->getCredentials($request);
        $admin = Admin::where('email', $request->email)->first();

        if ($admin) {

            $request->merge(['redirectPath' => $this->redirectTo]);

            if (Auth::guard($this->getGuard())->attempt($credentials, $request->has('remember'))) {
                return $this->handleUserWasAuthenticated($request, null);
            }
        }

        return $this->sendFailedLoginResponse($request);
    }

    protected function guard()
    {
        return Auth::guard('admins');
    }
}
