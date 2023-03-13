<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use Exception;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;

class GoogleAuthController extends Controller
{
    public function redirectToGoogle() {
        return Socialite::driver('google')->redirect();
	}
          
    public function handleGoogleCallback() {
		try {
			$user = Socialite::driver('google')->user();
            $finduser = User::where('google_id', $user->id)->orWhere('email', $user->email)->first();
         
            if($finduser) {
				if($finduser->google_id === NULL) { 
					$finduser->google_id = $user->id;
					$finduser->updated_at = now();
					$finduser->save();
				}
                Auth::login($finduser);
        
                return redirect('/dashboard');
			} 
			else {
                $newUser = User::create([
					'name' => $user->name,
					'email' => $user->email,
					'password' => Hash::make(Str::random(12)),
					'avatar' => $user->avatar,
					'google_id'=> $user->id,
				]);
         
                Auth::login($newUser);
        
                return redirect('/dashboard');
            }
        } 
		catch (Exception $e) {
            dd($e->getMessage());
        }
    }
}
