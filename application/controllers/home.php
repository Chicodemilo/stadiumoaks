<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

// SESSION *********************************************************************************

	public function __construct(){
        parent::__construct();
        $this->load->database();
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->helper('captcha');
        $this->load->model('captcha_model');
        $this->form_validation->set_error_delimiters('', '');
        
        
    }

// INDEX PAGE *********************************************************************************

	public function index()
	{
		$this->load->view('page/header.php');
		$this->load->view('page/footer.php');
		
	}

// MESSAGE PAGES *********************************************************************************

	public function contact(){
            $this->form_validation->set_rules('first_name', 'first_name','trim|strip_tags|xss_clean|required');
            $this->form_validation->set_rules('last_name', 'last_name','trim|strip_tags|xss_clean|required');
            $this->form_validation->set_rules('email', 'email','trim|strip_tags|xss_clean|required|valid_email');
            $this->form_validation->set_rules('phone', 'phone','trim|strip_tags|xss_clean|required');
            $this->form_validation->set_rules('message', 'message','trim|strip_tags|xss_clean|required');
            $this->form_validation->set_rules('captcha', 'captcha','trim|strip_tags|xss_clean|callback_captcha_check');
            
            if ($this->form_validation->run() === false){
                $data['image'] = $this->captcha_model->create_image();
                $this->load->view('header.php');
                $this->load->view('message_b.php', $data);
                $this->load->view('footer.php');
                }else{
                if ($this->input->post('message')){
                    $name = $this->input->post('name');
                    $email = $this->input->post('email');
                    $subject = $this->input->post('subject');
                    $message = $this->input->post('message');
                    date_default_timezone_set('US/Central');
                    $time = date("m/d/Y H:i:s");
                    $comment = array(
                        
                        'name' => $name, 
                        'email' => $email,
                        'subject' => $subject,
                        'message' => $message,
                        'time' => $time,);
                    
                    $sent = $this->db->insert('comments', $comment);
                    $this->load->model('email_model', 'email_model');
                    
                    $this->email_model->send($email, $name, $subject, $message, $time);
                    // $sent_b = $this->email_model->send_b($email, $name, $subject, $message, $time);
                    
                    if ($sent == true){
                                            
                        $this->load->view('header.php');

                        $this->load->view('sucess.php');

                        $this->load->view('footer.php');
                    
//                      header('Refresh: 2; URL='.base_url().'welcome/search');
                    }
                }
            }
        }
        
       
        public function captcha_check($value){
            if ($value == ''){
                $this->form_validation->set_message('captcha_check', 'Plese enter the text from the box above');
                return false;
            }else{
                $this->db->limit(1)->where("word", $value);
                $query = $this->db->get('captcha')->result_array();
                
                if(count($query) < 1 ){
                    $this->form_validation->set_message('captcha_check', 'The text did not match! Try again.');
                    return false;
                    
                }else{
                    return true;
                }
            }
        }





//  *********************************************************************************




} //End of Home controller
