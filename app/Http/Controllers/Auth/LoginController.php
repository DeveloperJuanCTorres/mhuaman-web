<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
        $this->middleware('auth')->only('logout');
    }

    public function login(Request $request)
    {
        $this->validateLogin($request);

        if (Auth::attempt(
            $request->only('email', 'password'),
            $request->filled('remember')
        )) {

            $request->session()->regenerate();

            if ($request->ajax()) {

                return response()->json([
                    'success' => true,
                    'message' => 'Bienvenido nuevamente.'
                ]);

            }

            return redirect()->intended($this->redirectPath());
        }

        if ($request->ajax()) {

            return response()->json([
                'success' => false,
                'message' => 'Correo o contraseña incorrectos.'
            ],401);

        }

        throw ValidationException::withMessages([
            $this->username() => [trans('auth.failed')],
        ]);
    }
}
