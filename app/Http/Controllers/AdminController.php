<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Log;
use Session;
use Exception;
use Validator;
use App\Models\User;
use App\Models\Admin;
use App\Http\Requests;
use Sangria\JSONResponse;
use App\Models\Submission;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function adminLogin(Request $request) {
        $validator = Validator::make($request->all(),[
            'username' => 'required',
            'password' => 'required'
        ]);
        if($validator->fails()) {
            $status_code  = 400;
            $responseBody = "Invalid Parameters";
            return JSONResponse::response($status_code, $responseBody);
        }
        $username=$request->input('username');
        $password=$request->input('password');
        $user_entry = Admin::where('username','=',$username)
                           ->pluck('password');

        if($user_entry === sha1($password)) {
            Session::put(["admin_username" => $user_entry]);
            $status_code  = 200;
            $responseBody = "Successful Login";
            return JSONResponse::response($status_code, $responseBody);
        } else {
            $status_code  = 400;
            $responseBody = "Bad Credentials";
            Session::flush();
            return JSONResponse::response($status_code, $responseBody);
        }
    }

    public function adminLogout(Request $request) {
        try {
            $status_code = 200;
            $response = "You have been logged out";
            Session::flush();
            return JSONResponse::response($status_code,$response);
        } catch (Exception $e) {
            $status_code = 500;
            $response = $e->getMessage()." ".$e->getLine();
            return JSONResponse::response($status_code,$response);
        }
    }

    public function adminMainView(Request $request) {
        try {
            $submissions = Submission::join('users','users.id','=','submissions.user_id')
                                    ->get();
            return view('admin.home',[
                'submissions' => $submissions,
                'count'       => 1,
                'tot_count'   => Submission::count()
            ]);
        } catch (Exception $e) {
            $response = $e->getMessage()." ".$e->getLine();
            return $response;
        }
    }
}
