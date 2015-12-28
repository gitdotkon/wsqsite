<?php
$message ='';

  $mobile= trim($_POST['mobile']);
  if(empty($mobile)){
echo json_encode(array('success'=>false,'message'=>'Please enter mobile number.'));	

}else if(!preg_match('/^[0-9]{10,10}$/',$mobile)){
echo json_encode(array('success'=>false,'message'=>'Please enter valid mobile number.'));	

}else{

	$messageToSms = urlencode('Coming Soon..');
	$url=  "http://203.92.40.186:8443/Sun3/Send_SMS2x?user=otmpl&password=otmpl123&sender=MCALRT&text=$messageToSms&PhoneNumber=$mobile";
                // create a new cURL resource
                $ch = curl_init();

                // set URL and other appropriate options
                curl_setopt($ch, CURLOPT_URL, $url);
                curl_setopt($ch, CURLOPT_HEADER, 0);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER,1); // return into a variable
                
                // grab URL and pass it to the browser
                $response=curl_exec($ch);
		if($response){
		curl_close($ch);
		echo json_encode(array('success'=>true,'message'=>'SMS sent successfully'));
		
		}else{
		echo json_encode(array('success'=>false,'message'=>'SMS failed, please try later'));		
		}
}
   


?>

