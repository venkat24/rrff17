<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Log;
use Validator;
use Exception;
use Session;
use App\Models\User;
use App\Http\Requests;
use Sangria\JSONResponse;
use App\Http\Controllers\Controller;

class AuthController extends Controller
{
    public function authenticateUser(Request $request) {
        try {
            $validator = Validator::make($request->all(),[
                'email' => 'required|string',
                'password' => 'required|string'
            ]);

            if($validator->fails()) {
                $response = "Invalid Parameters";
                Session::flush();
                return JSONResponse::response(400,$response);
            }

            $email    = $request->input('email');
            $password = $request->input('password');

            $user = User::where('email', '=', $email)->first();

            if($user)  {
                if(sha1($password) === $user->password)    {
                    Session::put(['user_email' => $email]);
                    Log::info($email." has logged in"); //logged in
                    return JSONResponse::response(200, "Login Successful");
                } else {
                    $status_code = 401;
                    $response = "Incorrect password";
                }
            }   
            else    {
                $status_code = 401;
                $response = "Not a registered user";
            }     
            Session::flush();
            return JSONResponse::response($status_code, $response);             
        } catch (Exception $e) {
            Session::flush();
            Log::error($e->getMessage()." ".$e->getLine());
            return JSONResponse::response(500, $e->getMessage());
        }
    }

    public function logoutUser(Request $request)   {
        try {
            $status_code = 200;
            $response = "You have been logged out";
            Log::info(Session::get('user_email')." logged out");
            Session::flush();
            return redirect()->route('home');
        } catch (Exception $e) {
            Log::error($e->getMessage()." ".$e->getLine());
            Session::flush();
            return redirect()->route('home');
        }
        
    }
}
