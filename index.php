<?php
// require_once(__DIR__ . '/dist/vendor/autoload.php');

// // Configure API key authorization: api-key
// $config = SendinBlue\Client\Configuration::getDefaultConfiguration()->setApiKey('api-key', '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');
// // Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// // $config = SendinBlue\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api-key', 'Bearer');
// // Configure API key authorization: partner-key
// $config = SendinBlue\Client\Configuration::getDefaultConfiguration()->setApiKey('partner-key', 'YOUR_API_KEY');
// // Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// // $config = SendinBlue\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('partner-key', 'Bearer');

// $apiInstance = new SendinBlue\Client\Api\AccountApi(
//     // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
//     // This is optional, `GuzzleHttp\Client` will be used as default.
//     new GuzzleHttp\Client(),
//     $config
// );

// $mailin = new Mailin('themig1122@gmail.com', 'IRjECqNPkYH6ftgJ');

// $mailin->
// addTo('themig1122@gmail.com', 'Muhammad Irfan')->
// setFrom('themig1122@gmail.com', 'Muhammad Irfan')->
// setReplyTo('themig1122@gmail.com','Muhammad Irfan')->
// setSubject('Enter the subject here')->
// setText('Hello')->
// setHtml('<strong>Hello</strong>');
// $res = $mailin->send();

// try {
//     // $result = $apiInstance->getAccount();
//     print_r($result);
// } catch (Exception $e) {
//     echo 'Exception when calling AccountApi->getAccount: ', $e->getMessage(), PHP_EOL;
// }


// M02
include('mailin.php');
use Sendinblue\Mailin;
$api_key = 'IRjECqNPkYH6ftgJ';
$from_email = 'themig1122@gmail.com';
$from_name = 'Muhammad Irfan';
$to_email = 'the.irf.1234@gmail.com';
$to_name = 'Test';
$subject = 'This is the subject';
$message = '<h2>Heading 2</h2><p>Here goes the paragraph blah blah blah</p>';
$mailin = new Mailin('https://api.sendinblue.com/v2.0',$api_key);
$data = array( 
  "to" => array($to_email=>$to_name),
  "from" => array($from_email,$from_name),
  "subject" => $subject,
  "html" => $message,
  "attachment" => array()
);
$data02 = array( 
    "to" => array("muhammadirfanghafoor7@gmail.com"=>"TheIRF"),
    "from" => array($from_email,$from_name),
    "subject" => $subject,
    "html" => $message,
    "attachment" => array()
  );
array_push($data,$data02);
print_r($data);
die();
$response = $mailin->send_email($data);
$response = $mailin->send_email($data02);
if(isset($response['code']) && $response['code']=='success'){
  echo 'Email Sent';
}else{
  echo 'Email not sent';
}
exit;
 

?>