<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Exception;
use App\User;
use Auth;
use Socialite;

class SocialAuthController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
    * Redirect the user to the Facebook authentication page.
    *
    * @return Response
    */
    public function redirectToProvider()
    {
        try {
            return Socialite::driver('facebook')->redirect();
        } catch(Exception $e ) {
            return redirect()->back()->with('fail', $e->getMessage());
        }
    }

    /**
    * Obtain the user information from Facebook.
    *
    * @return Response
    */
    public function handleProviderCallback(Request $request)
    {
        try {
            $user = Socialite::driver('facebook')->user();
            // dd($user);
        } catch(Exception $e) {
            return redirect()->back()->with('fail', $e->getMessage());
        }
        
        return empty($user->email) ? redirect()->route('login')->with('fail', 'No ID provided by facebook') 
                                   : $this->loginOrCreateAccount($user);

    }

    protected function loginOrCreateAccount($providerUser) {
        $user = User::where('email', $providerUser->getEmail())->first();
        
        if($user) {
            $user->avatar = $providerUser->avatar;
            $user->provider = 'facebook';
            $user->provider_id = $providerUser->id;
            $user->access_token = $providerUser->token;
            $user->save();
        } else {
            $user = new User();
            $user->confirmed = true;
            $user->status = true;
            $user->gender = $providerUser->user['gender'];
            $user->name = $providerUser->getName();
            $user->email = $providerUser->getEmail();
            $user->avatar = $providerUser->getAvatar();
            $user->provider = 'facebook';
            $user->provider_id = $providerUser->getId();
            $user->access_token = $providerUser->token;
            $user->password = '';
            $user->save();
        }
        Auth::login($user, true);
        return redirect('/userDashboard');
    }
}
