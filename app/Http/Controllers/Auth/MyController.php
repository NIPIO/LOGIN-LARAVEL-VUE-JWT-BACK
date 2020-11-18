<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MyController extends Controller
{
    public function __construct() {
    	$this->middleware(['auth:api']);
    }

    public function __invoke(Request $req) {
    	$user = $req->user();

    	return response()->json([
    		'email' => $user->email,
    		'name' => $user->name
    	]);
    }
}
