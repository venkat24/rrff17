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

class RegistrationController extends Controller
{
    public function registerUser(Request $request) {
        try {
            $validator = Validator::make($request->all(), [
                'name'               => 'required|string',
                'email'              => 'required|string',
                'password'           => 'required|string',
                'confirm_password'   => 'required|string',
            ]);
            //  Add more fields here based on requirements
            if($validator->fails()) {
                $message = $validator->errors()->all();
                Log::error($message);
                return JSONResponse::response(400,'Invalid Parameters');
            }
            if($request->input('password') !== $request->input('confirm_password')) {
                return JSONResponse::response(400, "Passwords do not match");
            }

            $email_check = User::where('email','=',$request->input('email'))->get();
            if(!$email_check->isEmpty()) {
                $message = "Email Address exists";
                return JSONResponse::response(400, $message);
            }

            User::insert([
                'email'    => $request->input('email'),
                'name'     => $request->input('name'),
                'password' => sha1($request->input('password')),
            ]);
            return JSONResponse::response(200, "Registration Successful");

        } catch (Exception $e) {
            Log::error($e->getMessage()." ".$e->getLine());
            return JSONResponse::response(500, $e->getMessage());
        }
    }
}
