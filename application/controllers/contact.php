<?php
if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Contact extends CI_Controller
{

// SESSION *********************************************************************************
//test
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        include 'include.php';
        $this->load->helper('url');
        $this->load->helper('form');
        $this->form_validation->set_error_delimiters('', '');
        $this->is_logged_in();

    }

    public function is_logged_in()
    {
        $is_logged_in = $this->session->userdata('is_logged_in');

        if (!isset($is_logged_in) || $is_logged_in != true) {
            redirect('login/', 'refresh');
        }
    }

// MESSAGES *******************************************************************************

    public function messages()
    {
        $this->load->model('contact_model', 'messages');
        $messages = $this->messages->get_messages()->result_array();
        $data['messages'] = $messages;
        $this->load->view('edit/header.php');
        $this->load->view('contact/messages.php', $data);
        $this->load->view('edit/footer.php');
    }

    public function delete_message($id)
    {
        $delete = $this->db->delete('contact', array('id' => $id));
        if ($delete) {
            usleep(250000);
            redirect(base_url() . 'contact/messages?' . time());
        }
    }

// MAINTENANCE ***************************************************************************

    public function maintenance()
    {
        $this->load->model('contact_model', 'maintenance');
        $maintenance = $this->maintenance->get_maintenance()->result_array();
        $data['maintenance'] = $maintenance;
        $this->load->view('edit/header.php');
        $this->load->view('contact/maintenance.php', $data);
        $this->load->view('edit/footer.php');
    }

    public function delete_maintenance($id)
    {
        $delete = $this->db->delete('maint_request', array('id' => $id));
        if ($delete) {
            usleep(250000);
            redirect(base_url() . 'contact/maintenance?' . time());
        }
    }

} //close of Contact class