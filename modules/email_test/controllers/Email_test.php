<?php
class Email_test extends Trongate {
	
	function test() {
		$email_data = $this->_build_email_data();

		// send the email
	}

	function _send_email($data) {
		// send an email using SwiftMailer

		// this in index.php: require_once '/path/to/vendor/autoload.php';

		// Create the Transport = declare server settings
		// username is username for logging into your email
		$transport = (new Swift_SmtpTransport('smtp.siteprotect.com', 25))
		  ->setUsername('donotreply')
		  ->setPassword('your password')
		;

		/*

		// Create the Mailer using your created Transport
		$mailer = new Swift_Mailer($transport);

		// Create a message
		$message = (new Swift_Message('Wonderful Subject'))
		  ->setFrom(['john@doe.com' => 'John Doe'])
		  ->setTo(['receiver@domain.org', 'other@domain.org' => 'A name'])
		  ->setBody('Here is the message itself')
		  ;

		// Send the message
		$result = $mailer->send($message);
		*/

	}

	function _build_email_data() {
		// build some test data for imaginary forgot password scenario

		// build some test data for imaginary forgot password scenario
		$data['subject'] = 'Reset Password Request';
		$data['target_email'] = 'david.webguy@gmail.com';
		$data['target_name'] = 'Davide Connelly';

		// our details
		$data['our_email_addres'] = OUR_EMAIL_ADDRESS; // config/site_owner
		$data['our_name'] = OUR_NAME;
		// Don't have  to add all these fields, but increases chance to avoid spam

		//the message
		$data['msg_html'] = $this->view('msg_html', $data, true);
		// true tells Trongate view function to create a text variable

		// DEBUG: echo $data['msg_html'];
		$msg_plain = str_replace('</p>', '\\n\\n', $data['msg_html']);
		$msg_plain = strip_tags($msg_plain);
		$data['msg_plain'] = str_replace(OUR_NAME.'\\n\\n', OUR_NAME, $msg_plain);
		// DEBUG: echo $data['msg_plain'];

		return $data;

	}
}
