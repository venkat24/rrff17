<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Log;
use Validator;
use Exception;

use Sangria\JSONResponse;

use App\Models\User;
use App\Models\Payment;

class PaymentsController extends Controller
{
    public function initiatePayment(Request $request) {
        try {
            $validator = Validator::make($request->all(),[
                'uniq_id' => 'required|string'
            ]);

            if($validator->fails()) {
                Log::warning('Validation Fails'.json_encode($request->all()));
                return redirect()->to('/payment_error');
            }

            $user_payment_id = $request->input('uniq_id');

            $user_details = User::where('user_payment_id',$user_payment_id)->first();
            if(!$user_details) {
                Log::warning('Invalid Payment ID'.json_encode($request->all()));
                return redirect()->to('/participant/payment_error');
            }

            $payment_details = Payment::where('user_id',$user_details->id)->first();
            if(!$payment_details)
            {
                
                $params = [
                    'status'     => 'not_paid',
                    'event_code' => env('TOWNSCRIPT_EVENT_CODE'),
                    'user_name'  => $user_details->name,
                    'user_email' => $user_details->email,
                    //'user_phone' => $user_details->phone,
                    //'user_from'  => empty($user_details->user_college)?$user_details->user_organization:$user_details->user_college
                ];

                Log::info('Payment Initialized for user: '.$user_details->id);
                return view('payment',$params);
            }

        } catch (Exception $e) {
            Log::error("Payment Failed. ".$e->getMessage()." ".$e->getLine());
            return redirect()->to('/payment_error');
        }
    }
}
