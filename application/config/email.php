<?php defined('BASEPATH') OR exit('No direct script access allowed');

$config = array(
    'protocol' => 'smtp', // 'mail', 'sendmail', or 'smtp'
    'smtp_host' => 'youtubergo.club',
    'smtp_port' => 465,
    'smtp_user' => 'rohit@youtubergo.club',
    'smtp_pass' => 'Rohit!123',
    'smtp_crypto' => 'ssl', //can be 'ssl' or 'tls' for example
    'mailtype' => 'text', //plaintext 'text' mails or 'html'
    'smtp_timeout' => '4', //in seconds
    'charset' => 'iso-8859-1',
    'wordwrap' => TRUE
);

// $this->load->config('email');
//         $this->load->library('email');
//
//         $from = $this->config->item('smtp_user');
//         $to = 'rohit.jadhav0403@gmail.com';
//         $subject = 'codigniter';
//         $message = 'This message send by online';
//
//         $this->email->set_newline("\r\n");
//         $this->email->from($from);
//         $this->email->to($to);
//         $this->email->subject($subject);
//         $this->email->message($message);
//
//         if ($this->email->send()) {
//             echo 'Your Email has successfully been sent.';
//         } else {
//             show_error($this->email->print_debugger());
//         }
