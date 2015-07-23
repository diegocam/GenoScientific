<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class email extends CI_Controller {

    public function send() {
        $fname = $this->input->post('firstname');
        $lname = $this->input->post('lastname');
        $email = $this->input->post('email');
        $phone = $this->input->post('phone');
        $message = $this->input->post('message');
        $human = $this->input->post('human');

        if ($human === "eleven" OR $human == 11 OR $human === "ELEVEN") {
            $this->load->library('email');

            $config['charset'] = 'utf-8';
            $config['mailtype'] = 'text';

            $this->email->initialize($config);
            $this->email->from($email, $fname . " " . $lname);
            $this->email->to('raj@genoscientific.com');

            $this->email->subject('New Email from GenoScientific Website!');
            $this->email->message(" FIRST NAME: $fname \r\n LAST NAME: $lname \r\n PHONE: $phone \r\n \r\nMESSAGE:\r\n" . $message);

            if ($this->email->send()) {
                echo "Thank you. Your message has been sent!<br> We will contact you within the next 2 business days.";
            } else {
                echo "There was an error in the process of sending your message. Please contact us at : (732) 662-5543. Thank you ";
            }
        } else {
            echo "The security check answer you provided is incorrect. Please try again.";
        }
    }

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */