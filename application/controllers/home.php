<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

// SESSION *********************************************************************************

	public function __construct(){
        parent::__construct();
        $this->load->database();
        include'include.php';
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
		$special_data = $this->page_data->get_special_data();
		$body_data = $this->page_data->get_body_data();
        $body_data['amen_pic'] = $this->page_data->get_amen_pic();
        $body_data['fp_pic'] = $this->page_data->get_floorplan_pic();
        $body_data['pic_data'] = $this->page_data->get_pic_data();
		$nav_data = $this->page_data->get_nav_data();
		$footer_data = $this->page_data->get_footer_data();
        $footer_data['pic_data'] = $this->page_data->get_pic_data();
        $template = $header_data['template'];

		$this->load->view($template.'_page/header.php', $header_data);
        // $this->load->view('google_analytics.php');
		$this->load->view($template.'_page/background.php', $background_data);
		if($special_data != 'N'){$this->load->view($template.'_page/special.php', $special_data);};
		$this->load->view($template.'_page/body.php', $body_data);
		$this->load->view($template.'_page/nav_bar.php', $nav_data);
		$this->load->view($template.'_page/footer.php', $footer_data);	
	}

// PICTURE PAGE *********************************************************************************

	public function pictures()
	{	
		$this->load->model('view_model', 'page_data');
		$background_data = $this->page_data->get_bg_data();
		$header_data = $this->page_data->get_header_data();
		$pic_data = $this->page_data->get_pic_data();
		$nav_data = $this->page_data->get_nav_data();
		$footer_data = $this->page_data->get_footer_data();
        $footer_data['pic_data'] = $this->page_data->get_pic_data();
        $template = $header_data['template'];

		$this->load->view($template.'_page/header.php', $header_data);
        // $this->load->view('google_analytics.php');
		$this->load->view($template.'_page/background.php', $background_data);
		$this->load->view($template.'_page/pic.php', $pic_data);
        if($template == 6 || $template || 7){
            $this->load->view($template.'_page/nav_bar_only_top.php', $nav_data);
        }else{
            $this->load->view($template.'_page/nav_bar.php', $nav_data);
        }
		$this->load->view($template.'_page/footer.php', $footer_data);	
	}


// AMENITIES PAGE *********************************************************************************

	public function amenities()
	{	
		$this->load->model('view_model', 'page_data');
		$background_data = $this->page_data->get_bg_data();
		$header_data = $this->page_data->get_header_data();
		$amenities_data = $this->page_data->get_amenities_data();
		$nav_data = $this->page_data->get_nav_data();
		$footer_data = $this->page_data->get_footer_data();
        $footer_data['pic_data'] = $this->page_data->get_pic_data();
        $template = $header_data['template'];

		$this->load->view($template.'_page/header.php', $header_data);
        // $this->load->view('google_analytics.php');
		$this->load->view($template.'_page/background.php', $background_data);
		$this->load->view($template.'_page/amenities.php', $amenities_data);
		$this->load->view($template.'_page/nav_bar.php', $nav_data);
		$this->load->view($template.'_page/footer.php', $footer_data);	
	}
// FLOORPLAN PAGE *********************************************************************************

	public function floorplans()
	{	
		$this->load->model('view_model', 'page_data');
		$background_data = $this->page_data->get_bg_data();
		$header_data = $this->page_data->get_header_data();
		$floorplan_data = $this->page_data->get_floorplan_data();
		$nav_data = $this->page_data->get_nav_data();
		$footer_data = $this->page_data->get_footer_data();
        $footer_data['pic_data'] = $this->page_data->get_pic_data();
        $template = $header_data['template'];

		$this->load->view($template.'_page/header.php', $header_data);
        // $this->load->view('google_analytics.php');
		$this->load->view($template.'_page/background.php', $background_data);
		$this->load->view($template.'_page/floorplan.php', $floorplan_data);
		$this->load->view($template.'_page/nav_bar.php', $nav_data);
		$this->load->view($template.'_page/footer.php', $footer_data);	
	}

// MESSAGE PAGES *********************************************************************************

	public function contact(){
			$this->load->model('view_model', 'page_data');
			$background_data = $this->page_data->get_bg_data();
			$header_data = $this->page_data->get_header_data();
			$hours_data = $this->page_data->get_hours_data();
			$nav_data = $this->page_data->get_nav_data();
			$footer_data = $this->page_data->get_footer_data();
            $footer_data['pic_data'] = $this->page_data->get_pic_data();
            $template = $header_data['template'];
            $property_phone = $header_data['property_phone'];
            $property_email = $header_data['property_email'];
            $property_facebook = $header_data['property_facebook'];
            $property_twitter = $header_data['property_twitter'];
            $property_instagram = $header_data['property_instagram'];
            $property_google_plus = $header_data['property_google_plus'];
            $property_address = $header_data['property_address'];

			$this->load->helper('captcha');
            $this->form_validation->set_rules('first_name', 'First Name','trim|strip_tags|xss_clean|required');
            $this->form_validation->set_rules('last_name', 'Last Name','trim|strip_tags|xss_clean|required');
            $this->form_validation->set_rules('email', 'Email','trim|strip_tags|xss_clean|required|valid_email');
            $this->form_validation->set_rules('phone', 'Phone','trim|strip_tags|xss_clean|required');
            $this->form_validation->set_rules('message', 'Message','trim|strip_tags|xss_clean|required');
            $this->form_validation->set_rules('captcha', 'captcha','trim|strip_tags|xss_clean|callback_captcha_check');
            
            if ($this->form_validation->run() === false){
                $data['image'] = $this->captcha_model->create_image();
                $data['hours'] = $hours_data;
                $data['main'] = $nav_data;
                $data['template'] = $template;
                $data['property_address'] = $property_address;
                $data['property_email'] = $property_email;
                $data['property_phone'] = $property_phone;
                $data['property_facebook'] = $property_facebook;
                $data['property_twitter'] = $property_twitter;
                $data['property_instagram'] = $property_instagram;
                $data['property_google_plus'] = $property_google_plus;
                $this->load->view($template.'_page/header.php', $header_data);
                // $this->load->view('google_analytics.php');
                $this->load->view($template.'_page/background.php', $background_data);
                $this->load->view($template.'_email/message.php', $data);
                $this->load->view($template.'_page/nav_bar.php', $nav_data);
                $this->load->view($template.'_page/footer.php', $footer_data);
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
                        $this->load->view($template.'_page/header.php', $header_data);
                        // $this->load->view('google_analytics.php');
		                $this->load->view($template.'_page/background.php', $background_data);
                        $this->load->view($template.'_email/sucess.php');
                        $this->load->view($template.'_page/nav_bar.php', $nav_data);
		                $this->load->view($template.'_page/footer.php', $footer_data);
                    }
                }
            }
        }
        
       
	public function contact_maint(){
			$this->load->model('view_model', 'page_data');
			$background_data = $this->page_data->get_bg_data();
			$header_data = $this->page_data->get_header_data();
			$emergency_data = $this->page_data->get_emergency_data();
			$nav_data = $this->page_data->get_nav_data();
			$footer_data = $this->page_data->get_footer_data();
            $footer_data['pic_data'] = $this->page_data->get_pic_data();
            $template = $header_data['template'];


			$this->load->helper('captcha');
            $this->form_validation->set_rules('first_name', 'First Name','trim|strip_tags|xss_clean|required');
            $this->form_validation->set_rules('last_name', 'Last Name','trim|strip_tags|xss_clean|required');
            $this->form_validation->set_rules('email', 'email','trim|strip_tags|xss_clean|required|valid_email');
            $this->form_validation->set_rules('phone', 'Phone','trim|strip_tags|xss_clean|required');
            $this->form_validation->set_rules('message', 'Message','trim|strip_tags|xss_clean|required');
            $this->form_validation->set_rules('unit_number', 'Unit Number','trim|strip_tags|xss_clean|required');
            $this->form_validation->set_rules('captcha', 'captcha','trim|strip_tags|xss_clean|callback_captcha_check');
            
            if ($this->form_validation->run() === false){
                $data['image'] = $this->captcha_model->create_image();
                $data['property_emergency_phone'] = $emergency_data;
                $this->load->view($template.'_page/header.php', $header_data);
                // $this->load->view('google_analytics.php');
                $this->load->view($template.'_page/background.php', $background_data);
                $this->load->view($template.'_email/message_maint.php', $data);
                $this->load->view($template.'_page/nav_bar.php', $nav_data);
                $this->load->view($template.'_page/footer.php', $footer_data);
                }else{
                if ($this->input->post('message')){
                    $first_name = $this->input->post('first_name');
                    $last_name = $this->input->post('last_name');
                    $email = $this->input->post('email');
                    $phone = $this->input->post('phone');
                    $message = $this->input->post('message');
                    $unit_number = $this->input->post('unit_number');
                    date_default_timezone_set('US/Central');
                    $time = date("Y-m-d H:i:s");
                    $comment = array(
                        'first_name' => $first_name, 
                        'last_name' => $last_name, 
                        'email' => $email,
                        'phone' => $phone,
                        'message' => $message,
                        'time' => $time,
                        'unit_number' => $unit_number);
                    
                    $sent = $this->db->insert('maint_request', $comment);
                    $this->load->model('email_model', 'email_model');
                    $this->email_model->send_maint($email, $first_name, $last_name, $phone, $message, $time, $unit_number);
                    
                    if ($sent == true){
                        $this->load->view($template.'_page/header.php', $header_data);
                        // $this->load->view('google_analytics.php');
		                $this->load->view($template.'_page/background.php', $background_data);
                        $this->load->view($template.'_email/sucess.php');
                        $this->load->view($template.'_page/nav_bar.php', $nav_data);
		                $this->load->view($template.'_page/footer.php', $footer_data);
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
