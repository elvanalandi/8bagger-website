<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\ArticleController;
use Socialite;
use Session;
use Redirect;
use Auth;
use App\Models\User;

class GoogleController extends Controller
{
    public function redirect()
    {
        return Socialite::driver('google')->redirect();
    }
 
    public function callback()
    {
        $id = Session::get('id');
        if (Auth::check()) {
            return ArticleController::getDetailArticle($id);
        }
        $user = Socialite::driver('google')->user();
        // only allow people with @company.com to login
        if(explode("@", $user->email)[1] !== 'company.com'){
            return ArticleController::getDetailArticle($id);
        }
        echo $user->email;
        Session::put('user', $user->id);
        // check if they're an existing user
        $existingUser = User::where('google_id', $user->id)->first();
        if($existingUser){
            // log them in
            Auth::login($existingUser, true);
        } else {
            // create a new user
            $newUser                  = new User;
            $newUser->name            = $user->name;
            $newUser->email           = $user->email;
            $newUser->google_id       = $user->id;
            $newUser->avatar          = $user->avatar;
            $newUser->avatar_original = $user->avatar_original;
            $newUser->save();
            Auth::login($newUser, true);
        }
        return ArticleController::getDetailArticle($id);
    }
}
