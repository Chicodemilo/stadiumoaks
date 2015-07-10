<?php
class Email_model extends CI_Model{


    
    public function send_password($email, $time){

            function generateRandomString($length = 6) {
                $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
                $charactersLength = strlen($characters);
                $randomString = '';
                for ($i = 0; $i < $length; $i++) {
                    $randomString .= $characters[rand(0, $charactersLength - 1)];
                }
                return $randomString;
                }  

            $new_password = generateRandomString(9);
        
            $data = array(
                    'email' => $email,
                    'time' => $time,
                    'new_password' => $new_password);
        
            $this->load->library('email');
            $this->email->set_newline("\r\n");

            $this->email->from('do_not_reply@stadiumoaks.com', 'Do No Reply');
            $this->email->to($email);
            $this->email->subject('Password Reset');
            $this->email->message($this->load->view('email/email_contact_test',$data, true));

            if($this->email->send())
                {
                    $this->load->model('membership_model', 'membership_model');
                    $this->membership_model->insert_new_password($email, $new_password);
                    return true;
                }
                else
                {
                    return false;
                }
    }


    public function send($email, $first_name, $last_name, $phone, $message, $time){
            $this->db->where('get_messages', 'Y');
            $send_to = $this->db->get('membership')->result_array();
            for ($i=0; $i < count($send_to); $i++) { 
                $to[$i] = $send_to[$i]['email'];
            }

            $site = $this->db->get('main_info')->result_array();
            $url = $site[0]['property_website'];
            $property_name = $site[0]['property_name'];
                    
            $data = array(
                    'email' => $email, 
                    'first_name' => $first_name,
                    'last_name' => $last_name,
                    'phone' => $phone,
                    'message' => $message,
                    'time' => $time,
                    'property_name' => $property_name,);

            $this->load->library('email');
            $this->email->set_newline("\r\n");

            $this->email->from($email, $first_name." ".$last_name);
            $this->email->to($to);
            $this->email->subject('A Message From '.$url.' Contact Form');
            $this->email->message($this->load->view('email/email_contact',$data, true));

//            $path = $this->config->item('server_root');
//            $file = $path.'/a_seniors/attachments/sendme.txt';
//            $this->email->attach($file);

            if($this->email->send())
                {
                    return true;
                }
                else
                {
                    return false;
                }
    }

    public function send_maint($email, $first_name, $last_name, $phone, $message, $time, $unit_number){
            $this->db->where('get_maint', 'Y');
            $send_to = $this->db->get('membership')->result_array();
            for ($i=0; $i < count($send_to); $i++) { 
                $to[$i] = $send_to[$i]['email'];
            }

            $site = $this->db->get('main_info')->result_array();
            $url = $site[0]['property_website'];
            $property_name = $site[0]['property_name'];
                    
            $data = array(
                    'email' => $email, 
                    'first_name' => $first_name,
                    'last_name' => $last_name,
                    'phone' => $phone,
                    'message' => $message,
                    'time' => $time,
                    'property_name' => $property_name,
                    'unit_number' => $unit_number,);

            $this->load->library('email');
            $this->email->set_newline("\r\n");

            $this->email->from($email, $first_name." ".$last_name);
            $this->email->to($to);
            $this->email->subject('A Maintenance Request From '.$url);
            $this->email->message($this->load->view('email/email_maint',$data, true));

            if($this->email->send())
                {
                    return true;
                }
                else
                {
                    return false;
                }
    }


    
                
}
?>