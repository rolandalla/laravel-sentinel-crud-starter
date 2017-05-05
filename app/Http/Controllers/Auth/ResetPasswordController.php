<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ResetsPasswords;
use Illuminate\Http\Request;
use Validator;
use Redirect;
use Sentinel;
class ResetPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset requests
    | and uses a simple trait to include this behavior. You're free to
    | explore this trait and override any methods you wish to tweak.
    |
    */

    use ResetsPasswords;

    /**
     * Where to redirect users after resetting their password.
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
        $this->middleware('guest');
    }

    public function reset(Request $request,$token='')
    {
        $validation = Validator::make($request->all(), [
                'token' => 'required',
                'password' => 'required|confirmed|min:6',
            ]);

          if ($validation->fails()) {
                return Redirect::back()->withErrors($validation)->withInput();
         }


         $user = Sentinel::findUserByResetPasswordCode($request->$token);

         return $user;
        //   $user->forceFill([
        //     'password' => bcrypt($password),
        //     'remember_token' => Str::random(60),
        // ])->save();

        // $this->guard()->login($user);

       return $request->all();
    }
}
