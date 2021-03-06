<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Log;
use Session;
use Validator;
use Exception;
use Carbon\Carbon;
use App\Models\User;
use App\Http\Requests;
use Sangria\JSONResponse;
use App\Models\Submission;
use App\Http\Controllers\Controller;
use Intervention\Image\Facades\Image;

/**
 * Controller to handle all submission related requests
 */
class SubmissionsController extends Controller
{
    // GET FUNCTIONS
    /**
     * Function to return the current submission status of
     * the participant.
     */
    public function getCurrentStatus(Request $request) {
        try {
            $user_email = Session::get('user_email');
            $user_id    = User::where('email','=',$user_email)->first();
            if(!$user_id) {
                Session::flush();
                return JSONResponse::response(400,"User does not exist");
            }
            $submission = Submission::join('users','users.id','=','submissions.user_id')
                                    ->where('user_id','=',$user_id->id)
                                    ->get();
            if(!$submission->count()) {
                return JSONResponse::response(400,"Submission does not exist");
            } 
            return JSONResponse::response(200,$submission[0]);
        } catch (Exception $e) {
            Log::error($e->getMessage()." ".$e->getLine());
            return JSONResponse::response(500, $e->getMessage()." ".$e->getLine());
        }
    }

    public function getPosterAdmin(Request $request) {
        try {
            $validator = Validator::make($request->all(), [
                'user_id' => 'required|integer'
            ]);

            if($validator->fails()) {
                $message = "Invalid parameters";
                return JSONResponse::response(400, $message);
            }
            $user_id = $request->input('user_id');
            $submission = Submission::where('user_id','=',$user_id)->get();
            if(!$submission) {
                return JSONResponse::response(400,"Submission does not exist");
            } 
            if(!$submission[0]->poster_submitted) {
                return JSONResponse::response(400,"Poster wasn't submitted");
            }

            $filename = $submission[0]->poster_path;
            $storage_path = storage_path('posters/'.$filename);
            return Image::make($storage_path)->response();
        } catch (Exception $e) {
            Log::error($e->getMessage()." ".$e->getLine());
            return JSONResponse::response(500, $e->getMessage()." ".$e->getLine());
        }
    }

    public function getPoster(Request $request) {
        try {
            $email = Session::get('user_email');
            $user_id = User::where('email','=',$email)->first();
            $submission = Submission::where('user_id','=',$user_id->id)->get();
            if(!$submission->count()) {
                return JSONResponse::response(400,"Submission does not exist");
            } 
            if(!$submission[0]->poster_submitted) {
                return JSONResponse::response(400,"Poster wasn't submitted");
            }
            $filename = $submission[0]->poster_path;
            $storage_path = storage_path('posters/'.$filename);
            return Image::make($storage_path)->response();
        } catch (Exception $e) {
            Log::error($e->getMessage()." ".$e->getLine());
            return JSONResponse::response(500, $e->getMessage());
        }
    }

    // SET FUNCTIONS
    /**
     * Function to set the title of a submission
     */
    public function setTitle(Request $request) {
        try {
            $validator = Validator::make($request->all(), [
                'title' => 'required|string'
            ]);

            if($validator->fails()) {
                $message = "Invalid parameters";
                return JSONResponse::response(400, $message);
            }

            $user_email = Session::get('user_email');
            $user_id    = User::where('email','=',$user_email)->first();

            Submission::where('user_id','=',$user_id->id)
                ->update([
                    'title' => $request->input('title'),
                    'title_submitted' => 1
                ]);

            return JSONResponse::response(200, "Title set successfully");

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

            Submission::where('user_id','=',$user_id->id)
                ->update([
                    'synopsis' => $request->input('synopsis'),
                    'synopsis_submitted' => 1
                ]);

            return JSONResponse::response(200, "Synopsis set successfully");

        } catch (Exception $e) {
            Log::error($e->getMessage()." ".$e->getLine());
            return JSONResponse::response(500, $e->getMessage());
        }
    }

    /**
     * Function to set the movie link of a submission
     */
    public function setMovieLink(Request $request) {
        try {
            $validator = Validator::make($request->all(), [
                'movie_link' => 'required|string'
            ]);

            if($validator->fails()) {
                $message = "Invalid parameters";
                return JSONResponse::response(400, $message);
            }

            $user_email = Session::get('user_email');
            $user_id    = User::where('email','=',$user_email)->first();

            Submission::where('user_id','=',$user_id->id)
                ->update([
                    'movie_link' => $request->input('movie_link'),
                    'movie_submitted' => 1
                ]);

            return JSONResponse::response(200, "Movie Link set successfully");

        } catch (Exception $e) {
            Log::error($e->getMessage()." ".$e->getLine());
            return JSONResponse::response(500, $e->getMessage());
        }
    }

    public function setPoster(Request $request) {
        $validator = Validator::make($request->all(), [
            'poster' => 'required|mimes:jpeg,png'
        ]);
        if($validator->fails()) {
            $message = $validator->errors()->all();
            Log::info($validator->errors()->all());
            return 'Submission Failed. Please Try Again. Ensure the filesize of the image is less than 3Mb.';
        }

        $user_email = Session::get('user_email');
        $user_id    = User::where('email','=',$user_email)->first();

        $image     = $request->file('poster');
        $extension = $image->getClientOriginalExtension();

        $filename = $user_email.'_'.Carbon::now().'.'.$extension;
        $filename = str_replace(' ','',$filename);

        Submission::where('user_id','=',$user_id->id)
                  ->update([
                      'poster_submitted' => 1,
                      'poster_path' => $filename,
                  ]);

        $image->move(storage_path('posters'), $filename);

        return redirect('dashboard');
    }

    public function setMovieStatus(Request $request) {
        try {
            $validator = Validator::make($request->all(), [
                'user_id'      => 'required|string',
                'movie_status' => 'required|string'
            ]);

            if($validator->fails()) {
                $message = "Invalid parameters";
                return JSONResponse::response(400, $message);
            }

            $user_id = $request->input('user_id');

            Submission::where('user_id','=',$user_id)
                ->update([
                    'movie_submitted' => $request->input('movie_status'),
                ]);
            return JSONResponse::response(200, "Movie status set successfully");

        } catch (Exception $e) {
            Log::error($e->getMessage()." ".$e->getLine());
            return JSONResponse::response(500, $e->getMessage()." ".$e->getLine());
        }
    }

    public function setPaymentStatus(Request $request) {
        try {
            $validator = Validator::make($request->all(), [
                'user_id'        => 'required|string',
                'payment_status' => 'required|string'
            ]);

            if($validator->fails()) {
                $message = "Invalid parameters";
                return JSONResponse::response(400, $message);
            }

            $user_id = $request->input('user_id');

            Submission::where('user_id','=',$user_id)
                ->update([
                    'payment_submitted' => $request->input('payment_status'),
                ]);
            return JSONResponse::response(200, "Payment status set successfully");

        } catch (Exception $e) {
            Log::error($e->getMessage()." ".$e->getLine());
            return JSONResponse::response(500, $e->getMessage()." ".$e->getLine());
        }
    }
}
