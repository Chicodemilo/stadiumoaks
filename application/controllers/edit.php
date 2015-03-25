<?php 

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Edit extends CI_Controller {


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


// INDEX *********************************************************************************

   	public function index($user_id = 0){
        $role = $this->session->userdata('role');
        $id = $this->session->userdata('id');
        $this->load->model('edit_model');
        $main_info = $this->edit_model->get_main_info();
        $data = array('main_info' => $main_info);
        // print_r($data);
        $this->load->view('edit/header.php');
        $this->load->view('edit/edit_page.php', $data);
        $this->load->view('edit/footer.php');
    }



// DATABASES *********************************************************************************

    public function db_maker(){
        $role = $this->session->userdata('role');

        if($role == 'master'){
            $this->load->view('edit/header.php');
            $this->load->view('edit/db_maker.php');
            $this->load->view('page/footer.php');

        }else{
            $this->load->view('edit/header.php');
            $this->load->view('edit/no_permission.php');
            $this->load->view('page/footer.php');
            
            }

    }


        public function make_databases(){
        $role = $this->session->userdata('role');

        if($role == 'master'){
            $this->load->model('edit_model', 'make_databases');
            $maker = $this->make_databases->make_databases();

            if($maker){
                redirect(base_url().'edit');
            }else{            
                $this->load->view('edit/header.php');
                $this->load->view('edit/db_problem.php');
                $this->load->view('page/footer.php');
            }

        }else{
            $this->load->view('edit/header.php');
            $this->load->view('edit/no_permission.php');
            $this->load->view('page/footer.php');
            
            }

    }

// MAIN INFO *********************************************************************************

    public function submit_main_edits(){
        // print_r($_POST);
        $data = array();


        foreach ($_POST as $key => $value) {
            if($key == 'property_color_1' || $key == 'property_color_2' || $key == 'property_color_3'){
                $value = substr($value, 1);
            }
            $data[$key] = $value;
        }
        // print_r($data);
        $id = $data['id'];
        $this->db->where('id', $id);
        $this->db->update('main_info', $data);
        redirect(base_url().'edit');
    }


// AMENITIES *********************************************************************************

    public function amenities(){
        $this->load->model('edit_model', 'our_amenities');
        $our_amenities_list = $this->our_amenities->get_our_amenities()->result_array();


        $this->load->model('edit_model', 'their_amenities');
        $their_amenities_list = $this->their_amenities->get_thier_amenities()->result_array();

        foreach($our_amenities_list as $k=>$v){
            $active[$k] = $v['active'];
            $name[$k] = $v['name'];
        }

        array_multisort($active, SORT_DESC, $name, SORT_ASC, $our_amenities_list);

        foreach ($their_amenities_list as $k => $v) {
            $their_active[$k] = $v['active'];
            $their_name[$k] = $v['name'];
        }
        if(count($their_amenities_list) > 0){
            array_multisort($their_active, SORT_DESC, $their_name, SORT_ASC, $their_amenities_list);
        }

        
        
        $data['our_amenities_list'] = $our_amenities_list;
        $data['their_amenities_list'] = $their_amenities_list;

        $this->load->view('edit/header.php');
        $this->load->view('edit/edit_amenities.php', $data);
        $this->load->view('edit/footer.php');
    }

    public function submit_amenities(){
        $data = $_POST;
        // $results = $data->result_array();

        // print_r($data);
        
        foreach ($data as $key => $value) {
            if($value['active'] == 'N'){
                $value['select_units'] = 'N';
                $value['extra_fees'] = 'N';
            }

            $this->db->where('id', $value['id']);
            $update = $this->db->update('our_amenities_list', $value);
            // echo $key.' : '.$value['name'].' : '.$value['active'].' : '.$value['select_units'].' : '.$value['extra_fees'].'<br>';
        }
        redirect(base_url().'edit/amenities');

    }


    public function submit_their_amenities(){
        $data = $_POST;
        // $results = $data->result_array();

        // print_r($data);
        
        foreach ($data as $key => $value) {
            if($value['active'] == 'N'){
                $value['select_units'] = 'N';
                $value['extra_fees'] = 'N';
            }

            $this->db->where('id', $value['id']);
            $update = $this->db->update('their_amenities_list', $value);
            // echo $key.' : '.$value['name'].' : '.$value['active'].' : '.$value['select_units'].' : '.$value['extra_fees'].'<br>';
        }
        redirect(base_url().'edit/amenities');

    }

    public function create_their_amenities(){
        $data = $_POST;
        // print_r($data);
        

        $this->db->insert('their_amenities_list', $data);
        redirect(base_url().'edit/amenities');

    }

    public function delete_amenity($id){
        $this->db->where('id', $id);
        $this->db->delete('their_amenities_list');
        redirect(base_url().'edit/amenities');

    }

// HOURS *********************************************************************************

    public function hours(){
        $this->load->model('edit_model', 'hours');
        $office_hours = $this->hours->get_hours()->result_array();

        $data['office_hours'] = $office_hours;

        $this->load->view('edit/header.php');
        $this->load->view('edit/hours.php', $data);
        $this->load->view('edit/footer.php');
    }

    public function submit_hours(){
        $data['day_type'] = $_POST['day_type'];
        $data['open_hour'] = $_POST['open_hour'];
        $data['open_min'] = $_POST['open_min'];
        $data['open_am_pm'] = $_POST['open_am_pm'];
        $data['close_hour'] = $_POST['close_hour'];
        $data['close_min'] = $_POST['close_min'];
        $data['close_am_pm'] = $_POST['close_am_pm'];
        $data['day_condition'] = $_POST['day_condition'];
        // print_r($data);
        $this->db->insert('office_hours', $data);
        redirect(base_url().'edit/hours');
    }


    public function delete_hours($id){
        $this->db->where('id', $id);
        $this->db->delete('office_hours');
        redirect(base_url().'edit/hours');

    }


// FLOORPLANS *********************************************************************************

    public function floorplans(){

        $this->load->model('edit_model', 'floorplans');
        $floorplans = $this->floorplans->get_floorplans()->result_array();

        $data['floorplans'] = $floorplans;

        $this->load->view('edit/header.php');
        $this->load->view('edit/floorplans.php', $data);
        $this->load->view('edit/footer.php');

    }

    public function submit_floorplans(){
        $data = $_POST;
        // print_r($data);
        $this->db->insert('floorplans', $data);
        redirect(base_url().'edit/floorplans');
    }

    public function delete_floorplan($id){
        $this->db->where('id', $id);
        $this->db->delete('floorplans');
        redirect(base_url().'edit/floorplans');

    }

    public function edit_floorplan($id = 0){
        if($id == 0){
            $this->load->view('edit/header.php');
            $this->load->view('edit/no_resource.php');
            $this->load->view('edit/footer.php');
        }else{
            $this->load->model('edit_model','edit_model');
            $data['floorplan_info'] = $this->edit_model->get_flooplan_info($id)->result_array();
            $data['error'] = '';
            $this->load->view('edit/header.php');
            $this->load->view('edit/do_edit_this_floorplan', $data);
            $this->load->view('edit/footer.php');
        }
    }

    public function submit_floorplan_edits($id){
        $data = $_POST;
        $this->db->where('id', $id);
        $this->db->update('floorplans', $data);
        redirect(base_url().'edit/floorplans');
    }


    public function upload_this($id){
        $data = array('id' => $id, 'error' => '');
        $this->load->view('edit/header.php');
        $this->load->view('edit/upload_this', $data);
        $this->load->view('edit/footer.php');

    }

    function do_upload_floorplan($id)
    {
        if(!is_dir('./images/floorplans/'.$id)){
            mkdir('./images/floorplans/'.$id, 0777, true);
        }
                
        $config['upload_path'] = './images/floorplans/'.$id;
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = '4048';
        $config['max_width']  = '4024';
        $config['max_height']  = '1868';

        // $this->load->view('edit/header.php');
        $this->load->library('upload', $config);
        // $this->load->view('edit/footer.php');

        if ( ! $this->upload->do_upload())
        {
            $data['error'] = $this->upload->display_errors();
            $data['id'] = $id;

            $this->load->view('edit/header.php');
            $this->load->view('edit/upload_this', $data);
            $this->load->view('edit/footer.php');
        }
        else
        {
            $data = array('upload_data' => $this->upload->data());

            $this->load->model('edit_model','edit_model');
            $data['floorplan_info'] = $this->edit_model->get_flooplan_info($id)->result_array();

            $file_name = $data['upload_data']['file_name'];
            $data_b['floorplan_pic'] = $file_name;

            $this->db->where('id', $id);
            $this->db->update('floorplans', $data_b);     
            redirect('edit/floorplans/');

        }
    }



    function delete_this_diagram($id = 0){
        $data['floorplan_pic'] = '';
        $this->db->where('id', $id);
        $this->db->update('floorplans', $data);
        redirect('edit/edit_floorplan/'.$id);

    }

// PETS *********************************************************************************

    public function pets(){
        $this->load->model('edit_model', 'pets');
        $pets = $this->pets->get_pets()->result_array();

        $data['pets'] = $pets;

        $this->load->view('edit/header.php');
        $this->load->view('edit/pets.php', $data);
        $this->load->view('edit/footer.php');
    }

    public function submit_pets(){
        $data = $_POST;
        $this->db->empty_table('pet_policy');
        $this->db->insert('pet_policy', $data);
        redirect(base_url().'edit/pets');
    }


    public function delete_pets($id){
        $this->db->where('id', $id);
        $this->db->delete('pet_policy');
        redirect(base_url().'edit/pets');

    }



// SPECIALS *********************************************************************************

    public function specials(){
        $this->load->model('edit_model', 'specials');
        $specials = $this->specials->get_specials()->result_array();

        $data['specials'] = $specials;

        $this->load->view('edit/header.php');
        $this->load->view('edit/specials.php', $data);
        $this->load->view('edit/footer.php');
    }

    public function submit_specials(){
        $data = $_POST;
        $this->db->empty_table('special');
        $this->db->insert('special', $data);
        redirect(base_url().'edit/specials');
    }

    public function delete_special($id){
        $this->db->where('id', $id);
        $this->db->delete('special');
        redirect(base_url().'edit/specials');

    }




// USERS *********************************************************************************

    public function users(){
        $this->load->model('edit_model', 'users');
        $users = $this->users->get_users()->result_array();

        $data['users'] = $users;

        $this->load->view('edit/header.php');
        $this->load->view('edit/users.php', $data);
        $this->load->view('edit/footer.php');
    }

    public function submit_users(){
        $data = $_POST;
        $this->db->insert('membership', $data);
        redirect(base_url().'edit/users');
    }

    public function delete_user($id){
        $this->db->where('id', $id);
        $this->db->delete('membership');
        redirect(base_url().'edit/users');

    }















}
?>
