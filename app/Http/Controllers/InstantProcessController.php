<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Illuminate\Support\Facades\Session;
use Mail;

class InstantProcessController extends Controller
{

    public function postData(Request $request){

   	//retreive the input field
   	$network=$request->input('network');
   	$phone=$request->input('phone');
   	$order=$request->input('order');
   	$price=$request->input('price');
   	$email=$request->input('email');
   	$payment=$request->input('payment');
   	$narration=$request->input('narration');
   	$cost_price=0;

   	$token=csrf_token();

   	$device=$_SERVER['HTTP_USER_AGENT'];
	$ip= $_SERVER['REMOTE_ADDR'];

   	if($order!="airtime"){
   	    $d= DB::table("products")->find($_REQUEST['dataplan']);
   	    $price=$d->amount;
   	    $cost_price=$d->cost;
		$dataplan=$d->name;
		$code=$d->networkcode;
	}else{
		$code=substr($network,0,1);
		$dataplan=$network."_".$price;
	}

	if($order=="paytv"){
		$price=$price;
	}



	if($email==""){
		$email=env("TELECOM_NOTIFICATION_EMAIL");
	}


	DB::insert('insert into request (email, recipient, order_plan, price, payment, token, ipaddress, device, cost_price) values(?,?,?,?,?,?,?,?,?)', [$email, $phone, $dataplan, $price, $payment, $token, $ip, $device, $cost_price ]);

        // Store a piece of data in the session...
        session(['price' => $price, 'cost_price'=>$cost_price]);

   	if($payment=="atm"){
   		$url = env("TELECOM_ORDERURL");
		$myvars = 'network=' . $network . '&phone=' . $phone . '&order=' . $order.'&price=' . $price . '&email=' . $email.'&dataplan=' . $dataplan . '&code=' . $code. '&token=' . $token;

		$ch = curl_init( $url );
		curl_setopt( $ch, CURLOPT_POST, 1);
		curl_setopt( $ch, CURLOPT_POSTFIELDS, $myvars);
		curl_setopt( $ch, CURLOPT_FOLLOWLOCATION, 1);
		curl_setopt( $ch, CURLOPT_HEADER, 0);
		curl_setopt( $ch, CURLOPT_RETURNTRANSFER, 1);

		$response = curl_exec( $ch );

		$str_arr = explode (",", $response);

		DB::insert('insert into atm_payment (checkout_url, ref, response, token, ipaddress, device) values(?,?,?,?,?,?)', [$str_arr[1], $str_arr[2], $str_arr[3], $token, $ip, $device ]);

		if($str_arr[0]==1){
			$request->session()->put('myref', $str_arr[2]);
			$request->session()->put('data', $str_arr[3]);
			$request->session()->put('referer', "buy".$order);
			return redirect()->away($str_arr[1]);
		}else{
		 	return redirect("/buy".$order)->with('error', 'An error occured, try again!');
		}
	}else{
		$GLOBALS['phone']=$phone;
   		$GLOBALS['email']=$email;


		$data = array('cus_email'=>$email, 'site'=>env("TELECOM_NAME"), 'recipient'=>$phone,'order'=>$dataplan,'price'=>$price);
      Mail::send('mail_client', $data, function($message) {
         $message->to($GLOBALS['email'], 'Lilyclems Client')->subject
            (env("TELECOM_NAME").' Data Order on '.$GLOBALS['phone']);
         $message->from('noreply@5starcompany.com.ng','noreply');
      });


      	$data = array('email'=>$email, 'name'=>env("TELECOM_NAME"), 'recipient'=>$phone,'order'=>$dataplan, 'price'=>$price, 'narration'=>$narration);
      Mail::send('mail_merchant', $data, function($message) {
         $message->to(env("TELECOM_NOTIFICATION_EMAIL"), env("TELECOM_NAME"))->subject
            (env("TELECOM_NAME").' Data Order on '.$GLOBALS['phone']);
         $message->bcc('odejinmisamuel@gmail.com','Super Merchant');
         $message->bcc('odejinmiabraham@gmail.com','Super Merchant');
         $message->from('noreply@5starcompany.com.ng','noreply');
      });
      echo "HTML Email Sent. Check your inbox.";

		return redirect("/buy".$order)->with('success', 'The payment of your order is currently under review, you will get your order delivered as soon as your payment is confirmed.');
	}
}

   public function continue(Request $request, $token, $dref){
   		$val=$request->session()->get("myref");
   		$referer=$request->session()->get("referer");
   		$data=$request->session()->get("data");
   		$tranx= $request->input('trxref');

   		$device=$_SERVER['HTTP_USER_AGENT'];
		$ip= $_SERVER['REMOTE_ADDR'];

   		if ($token!=csrf_token()) {
   			return redirect($referer)->with('error', 'Error delivering request on due to token error, kindly contact us below!');

   		}else if(empty($val)){
   			return redirect($referer)->with('error', 'Error delivering request on due to empty request, kindly contact us below!');

   		}else{
			$url = env("TELECOM_ORDERURL");
			$myvars = 'od=' . $dref . '&trxref=' . $tranx . '&reference=' . $tranx. '&data=' . $data;

			$ch = curl_init( $url );
			curl_setopt( $ch, CURLOPT_POST, 1);
			curl_setopt( $ch, CURLOPT_POSTFIELDS, $myvars);
			curl_setopt( $ch, CURLOPT_FOLLOWLOCATION, 1);
			curl_setopt( $ch, CURLOPT_HEADER, 0);
			curl_setopt( $ch, CURLOPT_RETURNTRANSFER, 1);

			$response = curl_exec( $ch );

			$str_arr = explode (",", $response);

			DB::insert('insert into buy (payment_ref, ref, response, token, ipaddress, device, price, cost_price) values(?,?,?,?,?,?,?,?)', [$tranx, $val, $str_arr[3], $token, $ip, $device, session('price'), session('cost_price') ]);

            // remove all session variables
			$request->session()->flush();

			if($str_arr[0]==1){
				return redirect($referer)->with('success', 'Dear customer, your request has been delivered successfully on '.$str_arr[2]);
			}else{
				return redirect($referer)->with('error', 'Error delivering request on '.$str_arr[2].', kindly contact us below!');
			}
   		}
   }
}
