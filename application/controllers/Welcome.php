<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {


	public function index()
	{
		$this->load->view('welcome_message');
	}

//   <?php
// defined('BASEPATH') OR exit('No direct script access allowed');
// use Twilio\Rest\Client;

// class Welcome extends CI_Controller {

// 	public function index()
// 	{
// 		$data = ['phone' => '+919703132428', 'text' => 'Hello, CI'];
// 		print_r($this->sendSMS($data));
// 	}

// 	protected function sendSMS($data) {
//           // Your Account SID and Auth Token from twilio.com/console
//             $sid = 'your_sid';
//             $token = 'your_token';
// 	    $client = new Client($sid, $token);
			
//             // Use the client to do fun stuff like send text messages!
//              return $client->messages->create(
//                 // the number you'd like to send the message to
//                 $data['phone'],
//                 array(
//                     // A Twilio phone number you purchased at twilio.com/console
//                     "from" => "+your Twilio number",
//                     // the body of the text message you'd like to send
//                     'body' => $data['text']
//                 )
//             );
//     }
// }
}
