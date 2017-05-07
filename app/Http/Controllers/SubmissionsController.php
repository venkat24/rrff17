<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Log;
use Session;
use Validator;
use Exception;
use App\Http\Requests;
use App\Models\User;
use App\Models\Submission;
use Sangria\JSONResponse;
use App\Http\Controllers\Controller;

/**
 * Controller to handle all submission related requests
 */
class SubmissionsController extends Controller
{
    /**
     * Function to return the current submission status of
     * the participant.
     */
    public function getCurrentStatus(Request $request) {
        try {
            $user_email = Session::get('user_email');
            $user_id    = User::where('email','=',$user_email)->first();
            if(!$user_id->count()) {
                return JSONResponse::response(400,"User does not exist");
            }

            $submission = Submission::where('user_id','=',$user_id)->get();
            if(!$submission->count()) {
                return JSONResponse::response(400,"Submission does not exist");
            } 

            return JSONResponse::response(200,$submission);
        } catch (Exception $e) {
            Log::error($e->getMessage()." ".$e->getLine());
            return JSONResponse::response(500, $e->getMessage());
        }
    }

    /**
     * Function to set the synopsis of a submission
     */
    public function setSynopsis(Request $request) {
        try {
            $validator = Validator::make($request->all(), [
                'synopsis' => 'required|string'
            ]);

            if($validator->fails()) {
                $message = "Invalid parameters";
                return JSONResponse::response(400, $message);
            }

            $user_email = Session::get('user_email');
            $user_id    = User::where('email','=',$user_email)->first();

            Submission::where('user_id','=',$user_id)
                      ->update(['synopsis' => $request->input('synopsis')]);

            return JSONResponse::response(200, "Synopsis set successfully");

        } catch (Exception $e) {
            Log::error($e->getMessage()." ".$e->getLine());
            return JSONResponse::response(500, $e->getMessage());
        }
    }
}
