<?php 
class Login extends CI_Controller
{

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
	
	function index()
	{	
		$this->load->view('edit/blank_header.php');
		$this->load->view('membership/login_form.php');
		$this->load->view('edit/footer.php');
	}


	function validate_credentials()
	{
		$this->load->model('membership_model');
		$query = $this->membership_model->validate();
		if($query){
			$this->load->model('user_model');
			$more_userdata = $this->user_model->info_for_session($this->input->post('username'));

			$data = array(
				'id' => $more_userdata[0]['id'],
				'username' => $this->input->post('username'),
				'is_logged_in' => true,
				'first_name' => $more_userdata[0]['first_name'],
				'last_login' => $more_userdata[0]['last_login'],
				'role' => $more_userdata[0]['role'],
				'property_name' => $more_userdata[0]['property_name']);
			$this->session->set_userdata($data);
			
			date_default_timezone_set('America/Chicago');
			$time = date("Y-m-d H:i:s");
			$data = array('last_login' => $time);
			$name = $this->session->userdata('username');
			// echo $name.' '.$time;
			$this->db->where('username', $name);
			$this->db->update('membership', $data);
			redirect('edit/');
		}else{
			$this->index();
		}
	}



	function signup(){
		$this->load->view('edit/blank_header.php');
		$this->load->view('membership/signup_form.php');
		$this->load->view('edit/footer.php');
	}



	function forgot_password(){       
        $this->load->view('edit/blank_header.php');
        $this->load->view('membership/forgot_password.php');
        $this->load->view('edit/footer.php');
	}



	function email_password(){
		            $email = $this->input->post('email');
                    date_default_timezone_set('US/Central');
                    $time = date("m/d/Y H:i:s");
                    $comment = array(
                        'email' => $email,
                        'time' => $time,);
                    $this->load->model('email_model', 'email_model');
                    $sent = $this->email_model->send_password($email, $time);
                    if ($sent == true){               
                        $this->load->view('edit/blank_header.php');
                        $this->load->view('membership/forgot_password_sent.php');
                        $this->load->view('edit/footer.php');
                    }else{
                    	$this->load->view('edit/blank_header.php');
                        $this->load->view('membership/forgot_password_not_this.php');
                        $this->load->view('edit/footer.php');
                    }
	}



	function create_member(){
		$this->load->library('form_validation');
		$this->form_validation->set_rules('first_name', 'First Name', 'trim|required');
		$this->form_validation->set_rules('last_name', 'Last Name', 'trim|required');
		$this->form_validation->set_rules('email', 'Email Address', 'trim|required|valid_email');
		$this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[4]');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[6]|max_length[32]');
		$this->form_validation->set_rules('password2', 'Password Confirmation', 'trim|required|matches[password]');
		if($this->form_validation->run() == FALSE){
			$this->signup();
		}else{
			$this->load->model('membership_model');
			if($query = $this->membership_model->create_member()){
				$this->load->view('edit/blank_header.php');
				$this->load->view('membership/signup_successful.php');
				$this->load->view('edit/footer.php');
				$is_logged_in = $this->session->userdata('is_logged_in');
				if($is_logged_in == true){
					sleep(2);
					redirect(base_url()."edit/users");
				}
			}else{
				$this->load->view('edit/blank_header.php');
				$this->load->view('membership/problem_member.php');
				$this->load->view('edit/footer.php');
			}
		}
	}


	function logout()
		{	date_default_timezone_set('America/Chicago');
			$time = date("Y-m-d H:i:s");
			$data = array('last_login' => $time);
			$name = $this->session->userdata('username');
			$this->db->where('username', $name);
			$this->db->update('membership', $data);
		    $this->session->sess_destroy();
		    redirect(base_url()."login");
		}
}

 ?>