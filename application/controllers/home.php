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
		$this->load->model('view_model', 'page_data');
		$background_data = $this->page_data->get_bg_data();
		$header_data = $this->page_data->get_header_data();
		$body_data = $this->page_data->get_body_data();
		$nav_data = $this->page_data->get_nav_data();
		$footer_data = $this->page_data->get_footer_data();

		$this->load->view('page/header.php', $header_data);
		$this->load->view('page/background.php', $background_data);
		$this->load->view('page/body.php', $body_data);
		$this->load->view('page/nav_bar.php', $nav_data);
		$this->load->view('page/footer.php', $footer_data);	
	}

	// INDEX PAGE *********************************************************************************

	public function pictures()
	{	
		$this->load->model('view_model', 'page_data');
		$background_data = $this->page_data->get_bg_data();
		$header_data = $this->page_data->get_header_data();
		$pic_data = $this->page_data->get_pic_data();
		$nav_data = $this->page_data->get_nav_data();
		$footer_data = $this->page_data->get_footer_data();

		$this->load->view('page/header.php', $header_data);
		$this->load->view('page/background.php', $background_data);
		$this->load->view('page/pic.php', $pic_data);
		$this->load->view('page/nav_bar.php', $nav_data);
		$this->load->view('page/footer.php', $footer_data);	
	}

// MESSAGE PAGES *********************************************************************************

	public function contact(){
			$this->load->helper('captcha');
            $this->form_validation->set_rules('first_name', 'first_name','trim|strip_tags|xss_clean|required');
            $this->form_validation->set_rules('last_name', 'last_name','trim|strip_tags|xss_clean|required');
            $this->form_validation->set_rules('email', 'email','trim|strip_tags|xss_clean|required|valid_email');
            $this->form_validation->set_rules('phone', 'phone','trim|strip_tags|xss_clean|required');
            $this->form_validation->set_rules('message', 'message','trim|strip_tags|xss_clean|required');
            $this->form_validation->set_rules('captcha', 'captcha','trim|strip_tags|xss_clean|callback_captcha_check');
            
            if ($this->form_validation->run() === false){
                $data['image'] = $this->captcha_model->create_image();
                $this->load->view('page/header.php');
                $this->load->view('email/message.php', $data);
                $this->load->view('page/footer.php');
                }else{
                if ($this->input->post('message')){
                    $first_name = $this->input->post('first_name');
                    $last_name = $this->input->post('last_name');
                    $email = $this->input->post('email');
                    $phone = $this->input->post('phone');
                    $message = $this->input->post('message');
                    date_default_timezone_set('US/Central');
                    $time = date("Y-m-d H:i:s");
                    $comment = array(
                        
                        'first_name' => $first_name, 
                        'last_name' => $last_name, 
                        'email' => $email,
                        'phone' => $phone,
                        'message' => $message,
                        'time' => $time,);
                    
                    $sent = $this->db->insert('contact', $comment);
                    $this->load->model('email_model', 'email_model');
                    $this->email_model->send($email, $first_name, $last_name, $phone, $message, $time);
                    
                    
                    if ($sent == true){
                                            
                        $this->load->view('page/header.php');

                        $this->load->view('email/sucess.php');

                        $this->load->view('page/footer.php');
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
