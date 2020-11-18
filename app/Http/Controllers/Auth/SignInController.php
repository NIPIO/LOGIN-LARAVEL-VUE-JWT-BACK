<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SignInController extends Controller
{

	// con php artisan tinker creo el primer usuario por consola y despues valido cada vez que quier loguerase
	// >>> factory(App\User::class)->create(['name'=>'NMP', 'email'=>'nmpiovano@gmail.com','password'=>bcrypt('cnrt1234')]);
    public function __invoke(Request $req) {
    	if(!$token = auth()->attempt($req->only('email', 'password'))){
    		return response(null, 401);
    	}

    	return response()->json(compact('token'));
    }
}
