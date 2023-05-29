<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class RegistrationController extends Controller
{
    public function register(Request $request)

{

    $validator = Validator::make($request->all(), [
        'name' => 'required|string|min:2',
        'email' => 'required|email',
        'password' => 'required|string|min:8',
    ]);


    return response()->json(['message' => 'Registration successful']);
}

}
