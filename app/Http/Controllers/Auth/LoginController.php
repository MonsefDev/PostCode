<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Socialite;


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
    protected $redirectTo = '/dashboard';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
 
     
    /**
     * Obtain the user information from GitHub.
     *
     * @return Response
     */

    public function redirectToProvider()
    {
      return  Socialite::driver('github')->redirect();

    }

      /**
     * Obtain the user information from GitHub.
     *
     * @return Response
     */

    public function handleProviderCallback()
    {
      $user=  Socialite::driver('github')->user();
     //dd($user);

      $autUser=User::firstOrNew(['provider_id'=>$user->id]);
      
      $authUser->name=$user->name;
      $authUser->email=$user->email;
      $authUser->provider=$user->provider;


      $authUser->save();

      auth()->login($authUser);

      return redirect('/');


       

    }
}
