<?php session_start();
ini_set( 'display_errors', 1 );
error_reporting( E_ALL );

$GLOBALS['root_url']="https://thebuzzertelec.com.ng";
$GLOBALS['root_folder']="thebuzzertelec.com.ng";
$GLOBALS['merchant_email']="israelmedia.tv@gmail.com";
$GLOBALS['merchant_name']="Buzzer Telecom ";
$GLOBALS['key']="mcd_key_895f15uijjk85m052csckj39uescx2pwasfd";
$GLOBALS['paystack_key']="pk_live_75207590cee1210fdd56582815f91ed5037c0a86";

function goPay($price, $email, $redirect, $d){
    $url = 'https://api.5starcompany.com.ng/payment/pay.php';
    $myvars = 'redirect=' . $redirect . '&amount=' . $price . '&email=' . $email.'&live_key='.$GLOBALS['paystack_key'].'&portal='.$GLOBALS['merchant_name'];

    $ch = curl_init( $url );
    curl_setopt( $ch, CURLOPT_POST, 1);
    curl_setopt( $ch, CURLOPT_POSTFIELDS, $myvars);
    curl_setopt( $ch, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt( $ch, CURLOPT_HEADER, 0);
    curl_setopt( $ch, CURLOPT_RETURNTRANSFER, 1);

    $response = curl_exec( $ch );
    $resdecode = json_decode($response, true);

    $URL=$resdecode['url'];

    if(!empty($URL)){
        // array for JSON response
        echo "1,".$URL.",".$_SESSION['myref'].",".$_SESSION[$d];
    }else{
        echo "0,Email or Network Error Occured";
        // array for JSON response
    }
}

function buy($coded, $phone, $service, $amount, $cus_email){
    $url="https://api.5starcompany.com.ng/mcd_reseller_test.php";

    if($service=="data"){
        $myvars='coded=' . $coded . '&phone=' . $phone . '&service=' . $service . '&api='.$GLOBALS['key'];
    } else if($service=="airtime"){
        $myvars='coded=' . $coded . '&phone='.$phone. '&service=' . $service . '&api='.$GLOBALS['key'].'&amount='.$amount;
    } else if($service=="paytv"){
        $myvars='coded=' . $coded . '&phone='.$phone. '&service=' . $service . '&api='.$GLOBALS['key'];
    }

    $ch = curl_init( $url );
    curl_setopt( $ch, CURLOPT_POST, 1);
    curl_setopt( $ch, CURLOPT_POSTFIELDS, $myvars);
    curl_setopt( $ch, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt( $ch, CURLOPT_HEADER, 0);
    curl_setopt( $ch, CURLOPT_RETURNTRANSFER, 1);

    $response = curl_exec( $ch );

    $resdecode = json_decode($response, true);
    $success=$resdecode['success'];
    $message=$resdecode['message'];

// remove all session variables
    session_unset();
// destroy the session
    session_destroy();


    if($success==1){
        sendwalletmail($amount, $resdecode['message']."(".$cus_email.")");

        echo "1,success,".$phone.",".$message;
        // array for JSON response
    } else {
        sendalertmail($resdecode['message']);

        echo "0,fail,".$phone.",".$message;
        // array for JSON response
    }
}

function sendpaymentmail($reference, $payee, $amount, $desc, $email) {
    $to=$GLOBALS['merchant_email'];
    $dateTime = date('D, d M Y - h:i:s a');
    $subject="Payment Mail";

    $url='https://api.5starcompany.com.ng/payment/mail.php';

    $myvars = 'subject='.$subject.'&to='.$to.'&payee='.$payee.'&amount='.$amount.'&reference='.$reference.'&email='.$email.'&desc='.$desc.'&date='.$dateTime;

    $ch = curl_init( $url );
    curl_setopt( $ch, CURLOPT_POST, 1);
    curl_setopt( $ch, CURLOPT_POSTFIELDS, $myvars);
    curl_setopt( $ch, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt( $ch, CURLOPT_HEADER, 0);
    curl_setopt( $ch, CURLOPT_RETURNTRANSFER, 1);

    $response = curl_exec( $ch );
}

function sendwalletmail($amount, $desc) {
    $email=$GLOBALS['merchant_email'];
    $username=$GLOBALS['merchant_name'];
    $amount="Dr on MCD wallet via API";
    $ref="MCD_API_".$GLOBALS['od'];

    $url='https://mcd.5starcompany.com.ng/app/mail_wallet_trans.php';

    $myvars = 'amount='.$amount.'&ref='.$ref.'&email='.$email.'&desc='.$desc.'&user_name='.$username;

    $ch = curl_init( $url );
    curl_setopt( $ch, CURLOPT_POST, 1);
    curl_setopt( $ch, CURLOPT_POSTFIELDS, $myvars);
    curl_setopt( $ch, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt( $ch, CURLOPT_HEADER, 0);
    curl_setopt( $ch, CURLOPT_RETURNTRANSFER, 1);

    $response = curl_exec( $ch );
}


function sendalertmail($message) {
    $to=$GLOBALS['merchant_email'];
    $subject="Alert on ".$GLOBALS['merchant_name'];
    $message="Am unable to deliver request to your customer due to this error => ".$message;
    $api="mcd_8765";
    $url = 'https://api.5starcompany.com.ng/mail.php';
    $myvars = 'to='.$to.'&subject='.$subject.'&message='.$message.'&api_key='.$api;

    $ch = curl_init( $url );
    curl_setopt( $ch, CURLOPT_POST, 1);
    curl_setopt( $ch, CURLOPT_POSTFIELDS, $myvars);
    curl_setopt( $ch, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt( $ch, CURLOPT_HEADER, 0);
    curl_setopt( $ch, CURLOPT_RETURNTRANSFER, 1);

    $response = curl_exec( $ch );
}

if(isset($_REQUEST['network']) || isset($_REQUEST['phone']) || isset($_REQUEST['order']) || isset($_REQUEST['token'])){
    $network=$_REQUEST['network'];
    $phone=$_REQUEST['phone'];//
    $order=$_REQUEST['order'];//
    $price=$_REQUEST['price'];//
    $email=$_REQUEST['email'];
    $token=$_REQUEST['token'];

    if($order!="airtime"){
        $dataplan=$_REQUEST['dataplan'];
        $code=$_REQUEST['code'];
    }else{
        $code=substr($network,0,1);
        $dataplan=$network."_".$price;
    }


    if ($order=="data" || $order=="airtime" || $order=="paytv") {
        $pric=$price*100;

        $d="d".$phone.date('smsdihsimsy');
        $_SESSION['myref']=$d;
        $redirect=$GLOBALS['root_url']."/process_req/".$token."/".$d;
        $_SESSION[$d]=$code.'>'.$phone.'>'.$order.'>'.$dataplan.'>'.$price.'>'.$email;

        goPay($pric, $email, $redirect, $d);

    }else{

        echo "0,Invalid order service";

// echoing JSON response
    }//end of order decision

}else if(isset($_REQUEST['od']) && isset($_REQUEST['trxref']) && isset($_REQUEST['reference'])){
    $GLOBALS['od']=$_REQUEST['od'];

    if(!empty($_REQUEST['data'])){
        $string=$_REQUEST['data'];// use of explode
        $str_arr = explode (">", $string);

        $ref=$str_arr[5] ." pay for ". $str_arr[3]."(".$str_arr[1].")";

        sendpaymentmail($_REQUEST['reference'], $str_arr[1], $str_arr[4], $str_arr[2]."_".$str_arr[3], $str_arr[5]);

        buy($str_arr[0], $str_arr[1], $str_arr[2], $str_arr[4], $str_arr[5]);
    }else{
        echo "0,Invalid session";
        return false;
    }
}else{
    echo "0,Invalid Exception Occured";
    return false;

}//end of network, phone, order
//end of od, trxref

?>

