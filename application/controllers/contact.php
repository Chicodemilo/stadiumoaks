<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Contact extends CI_Controller{


// SESSION *********************************************************************************

	public function __construct(){
        parent::__construct();
        $this->load->database();
        $this->load->helper('url');
        $this->load->helper('form');
        $this->form_validation->set_error_delimiters('', '');
        $this->is_logged_in();
        
    }


	function is_logged_in(){
		$is_logged_in = $this->session->userdata('is_logged_in');

		if(!isset($is_logged_in) || $is_logged_in != true){
			redirect('login/', 'refresh');
		}
	}


// MESSAGES *******************************************************************************

	public function messages(){
		$this->load->model('contact_model', 'messages');
		$messages = $this->messages->get_messages()->result_array();
		$data['messages'] = $messages;
		$this->load->view('edit/header.php');
		$this->load->view('contact/messages.php', $data);
		$this->load->view('edit/footer.php');
	}

}//close of Contact class
 ?>