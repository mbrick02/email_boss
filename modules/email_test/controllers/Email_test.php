<?php
class Email_test extends Trongate {

	function test() {
		$email_data = $this->_build_email_data();

		// send the email...
		$this->_send_email($email_data);

		echo 'Email was sent. Wooohooo!';
	}

	function _send_email($data) {
		// send an email using SwiftMailer
		extract($data);  // so we can say $subject rather than $data['subject']

		// this in index.php: require_once '/path/to/vendor/autoload.php';

		// Create the Transport = declare server settings
		// username is username for logging into your email
		$transport = (new Swift_SmtpTransport('smtp.siteprotect.com', 465, 'ssl'))
		  ->setUsername('donotreply@michaelbrickler.com')
		  ->setPassword('Faust#2God');
			// note: for an ssl 'transport' you have to end with ", 'ssl'"

		// Create the Mailer using your created Transport
		$mailer = new Swift_Mailer($transport);

		// Create a message
		$message = (new Swift_Message($subject))
		  ->setFrom([$our_email_addres => $our_name])
		  ->setTo([$target_email, $target_name])

			// Give it a body
			->setBody($msg_plain, 'text/plain')

			// And optionally an alternative body
			->addPart($msg_html, 'text/html');

		// Send the message
		$result = $mailer->send($message);

	}

	function _build_email_data() {
		// build some test data for imaginary forgot password scenario

		// build some test data for imagined forgot password scenario
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
