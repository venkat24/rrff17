<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Log;
use Validator;
use Exception;

use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;
use Sangria\JSONResponse;


use App\Models\User;
use App\Models\Payment;
use App\Models\Submission;

class PaymentsController extends Controller
{
    public function refreshPaymentsList(Request $request) {
        try {
            $client = new Client();
            $url = "https://www.townscript.com/api/registration/getRegisteredUsers";
            $response = $client->get($url,[
                'headers' => [
                    'email' => env('TOWNSCRIPT_EMAIL'),
                    'secret_key' => env('TOWNSCRIPT_SECRET_KEY')
                ],
                'query' => [
                    'eventCode' => env('TOWNSCRIPT_EVENT_CODE')
                ]
            ]);
            $bodyJSON = $response->getBody();
            $body = json_decode($bodyJSON);
            $data = json_decode($body->data);
            return $data;
        } catch (Exception $e) {
            return "Payment Failed. ".$e->getMessage()." ".$e->getLine();
            return -1;
        }
    }
    public function handleTownscriptWebhook(Request $request) {
        try {
            $data = PaymentsController::refreshPaymentsList($request);
            Payment::truncate();
            if(is_array($data)){
                foreach($data as $registrant) {
                    $email = $registrant->userEmailId;
                    $user_id = User::where('email','=',$email)
                                   ->pluck('id');
                    if(!$user_id){
                        $user_id = -1;
                    } else {
                        Submission::where('user_id','=',$user_id)
                                  ->update([
                                      'payment_submitted' => 1
                                  ]);
                    }
                    Payment::insert([
                        'user_id'                => $user_id,
                        'order_id'               => $registrant->uniqueOrderId,
                        'user_name'              => $registrant->userName,
                        'user_email'             => $registrant->userEmailId,
                        'ticket_name'            => $registrant->ticketName,
                        'event_code'             => $registrant->eventCode,
                        'ticket_price'           => $registrant->totalTicketAmount,
                        'registration_timestamp' => $registrant->registrationTimestamp,
                    ]);
                }
                return view('payment_success');
            } else {
                $registrant = $data;
                $email = $registrant->userEmailId;
                $user_id = User::where('email','=',$email)
                               ->pluck('id');
                if(!$user_id){
                    $user_id = -1;
                } else {
                    Submission::where('user_id','=',$user_id)
                              ->update([
                                  'payment_submitted' => 1
                              ]);
                }
                Payment::insert([
                    'user_id'                => $user_id,
                    'order_id'               => $registrant->uniqueOrderId,
                    'user_name'              => $registrant->userName,
                    'user_email'             => $registrant->userEmailId,
                    'ticket_name'            => $registrant->ticketName,
                    'event_code'             => $registrant->eventCode,
                    'ticket_price'           => $registrant->totalTicketAmount,
                    'registration_timestamp' => $registrant->registrationTimestamp,
                ]);
                return view('payment_success');
            }
        } catch (Exception $e) {
            Log::error("Payment Failed. ".$e->getMessage()." ".$e->getLine());
            return JSONResponse::response(500,"Payment Failed. ".$e->getMessage()." ".$e->getLine());
        }
    }
    public function initiatePayment(Request $request) {
        try {
        } catch (Exception $e) {
            Log::error("Payment Failed. ".$e->getMessage()." ".$e->getLine());
            return redirect()->to('/payment_error');
        }
    }
}
