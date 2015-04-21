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

        if($data['day_type'] == "Monday - Friday"){
            $data['hours_order'] = 1;
        }
        if($data['day_type'] == "Monday - Thursday"){
            $data['hours_order'] = 2;
        }
        if($data['day_type'] == "Monday"){
            $data['hours_order'] = 3;
        }
        if($data['day_type'] == "Tuesday"){
            $data['hours_order'] = 4;
        }
        if($data['day_type'] == "Wednesday"){
            $data['hours_order'] = 5;
        }
        if($data['day_type'] == "Thursday"){
            $data['hours_order'] = 6;
        }
        if($data['day_type'] == "Friday"){
            $data['hours_order'] = 7;
        }
        if($data['day_type'] == "Saturday"){
            $data['hours_order'] = 8;
        }
        if($data['day_type'] == "Sunday"){
            $data['hours_order'] = 9;
        }
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


    public function submit_users($id){
        $this->load->model('edit_model', 'user');
        $user = $this->user->get_user($id)->result_array();
        $data['user'] = $user;

        if(count($user) > 0){
            $this->load->view('edit/header.php');
            $this->load->view('edit/edit_user.php', $data);
            $this->load->view('edit/footer.php');      
        }else{
            $this->load->view('edit/header.php');
            $this->load->view('edit/no_resource.php');
            $this->load->view('edit/footer.php');
        }
    }


    public function delete_user($id){
        $this->db->where('id', $id);
        $this->db->delete('membership');
        redirect(base_url().'edit/users');
    }


    public function submit_user_edits($id){
        $data = $_POST;
        $this->db->where('id', $id);
        $this->db->update('membership', $data);
        redirect(base_url().'edit/users', 'refresh');
    }


    public function change_password($id, $username){
        $data = array('id' => $id, 'username' => $username);
        $this->load->view('edit/header.php');
        $this->load->view('edit/change_password.php', $data);
        $this->load->view('edit/footer.php');
    }


    public function submit_change_password($id){
        $password = md5($this->input->post('password'));
        $data['password'] = $password;
        $this->db->where('id', $id);
        $this->db->update('membership', $data);
        redirect(base_url().'edit/users');
    }

// PICTURES *********************************************************************************

public function pictures(){
        $this->load->model('edit_model', 'pictures');
        $data['pictures']= $this->pictures->get_pictures()->result_array();
        $data['logo']= $this->pictures->get_logo()->result_array();
        $data['man_logo']= $this->pictures->get_man_logo()->result_array();
        $this->load->view('edit/header.php');
        $this->load->view('edit/pictures.php', $data);
        $this->load->view('edit/footer.php');
}


public function picture_delete($id){
    $this->load->helper('file');
    $this->db->where('id', $id);
    $this->db->delete('pictures');
    $this->load->model('edit_model', 'pictures');
    $this->pictures->reorder_pictures();
    delete_files('./images/pictures/'.$id.'/');
    redirect(base_url().'edit/pictures', 'refresh');
}


public function picture_upload(){
        $data = array('error' => '');
        $this->load->view('edit/header.php');
        $this->load->view('edit/upload_picture', $data);
        $this->load->view('edit/footer.php');
}


public function do_upload_picture(){
    $this->load->model('edit_model', 'id');
    $new_pic_data = $this->id->get_new_picture_data();
    $id = $new_pic_data['id'];

    if(!is_dir('./images/pictures/'.$id)){
            mkdir('./images/pictures/'.$id, 0777, true);
        }
                
        $config['upload_path'] = './images/pictures/'.$id;
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = '6048';
        $config['max_width']  = '6024';
        $config['max_height']  = '2868';
        $config['min_width'] = '12000';
        $config['min_height'] = '5000';
        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload())
        {
            $data['error'] = $this->upload->display_errors();
            $data['id'] = $id;
            $this->load->view('edit/header.php');
            $this->load->view('edit/upload_picture', $data);
            $this->load->view('edit/footer.php');
        }
        else
        {
            $this->db->where('id', $id);
            $this->db->insert('pictures', $new_pic_data);

            $data = array('upload_data' => $this->upload->data());

            $file_name = $data['upload_data']['file_name'];
            $data_b['name'] = $file_name;

            $this->db->where('id', $id);
            $this->db->update('pictures', $data_b);     
            redirect(base_url().'edit/picture_edit/'.$id);
        }
}



public function picture_edit($id){
    $this->load->model('edit_model', 'picture');
    $data['picture'] = $this->picture->get_picture_data($id);
    $data['count'] = count($this->picture->get_pictures()->result_array());
    $this->load->view('edit/header.php');
    $this->load->view('edit/edit_picture', $data);
    $this->load->view('edit/footer.php');
}



public function submit_picture_edits($id){
    $caption = $this->input->post('caption');
    $cover_pic = $this->input->post('cover_pic');
    $amenities_page_main_pic = $this->input->post('amenities_page_main_pic');
    $picture_page_main_pic = $this->input->post('picture_page_main_pic');
    $pic_order = $this->input->post('pic_order');
    $active = $this->input->post('active');

    if($cover_pic == 'Y'){
        $this->load->model('edit_model', 'cover_pic');
        $this->cover_pic->make_cover_pic($id);
    }
    if($amenities_page_main_pic == 'Y'){
        $this->load->model('edit_model', 'amen_pic');
        $this->amen_pic->make_amenities_pic($id);
    }
    if($picture_page_main_pic == 'Y'){
        $this->load->model('edit_model', 'pic_pic');
        $this->pic_pic->make_picture_pic($id);
    }

    $this->load->model('edit_model', 'picture');
    $old_pic_data = $this->picture->get_picture_data($id);
    $old_order = $old_pic_data[0]['pic_order'];
    if($old_order != $pic_order){
        $this->load->model('edit_model', 'renumber_pics');
        $this->renumber_pics->insert_pic_in_order($id, $pic_order, $old_order);
    }
    $data = array('caption' => $caption, 'active' => $active, 'cover_pic' => $cover_pic, 'amenities_page_main_pic' => $amenities_page_main_pic, 'picture_page_main_pic' => $picture_page_main_pic );
    $this->db->where('id', $id);
    $this->db->update('pictures', $data);

    redirect(base_url().'edit/pictures');

}


public function logo_upload(){
        $data = array('error' => '');
        $this->load->view('edit/header.php');
        $this->load->view('edit/upload_logo', $data);
        $this->load->view('edit/footer.php');
}


public function do_upload_logo(){
    $this->db->where('logo', 'Y');
    $this->db->delete('pictures');
    $this->load->helper('file');
    delete_files('./images/logos/property/');

    $this->load->model('edit_model', 'id');
    $new_pic_data = $this->id->get_new_logo_data();
    $id = $new_pic_data['id'];

    if(!is_dir('./images/logos/property/')){
            mkdir('./images/logos/property/', 0777, true);
        }
                
        $config['upload_path'] = './images/logos/property';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = '6048';
        $config['max_width']  = '6024';
        $config['max_height']  = '2868';
        $config['min_width'] = '12000';
        $config['min_height'] = '5000';
        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload())
        {
            $data['error'] = $this->upload->display_errors();
            $data['id'] = $id;
            $this->load->view('edit/header.php');
            $this->load->view('edit/upload_logo', $data);
            $this->load->view('edit/footer.php');
        }
        else
        {   
            $this->db->where('id', $id);
            $this->db->insert('pictures', $new_pic_data);

            $data = array('upload_data' => $this->upload->data());

            $file_name = $data['upload_data']['file_name'];
            $data_b['name'] = $file_name;

            $this->db->where('id', $id);
            $this->db->update('pictures', $data_b);     
            redirect(base_url().'edit/pictures/');
        }
}

public function logo_delete($id){
    $this->load->helper('file');
    $this->db->where('id', $id);
    $this->db->delete('pictures');
    delete_files('./images/logos/property/');
    redirect(base_url().'edit/pictures', 'refresh');
}


public function man_logo_upload(){
        $data = array('error' => '');
        $this->load->view('edit/header.php');
        $this->load->view('edit/upload_man_logo', $data);
        $this->load->view('edit/footer.php');
}


public function do_upload_man_logo(){
    $this->db->where('management_logo', 'Y');
    $this->db->delete('pictures');
    $this->load->helper('file');
    delete_files('./images/logos/management/');

    $this->load->model('edit_model', 'id');
    $new_pic_data = $this->id->get_new_man_logo_data();
    $id = $new_pic_data['id'];

    if(!is_dir('./images/logos/management')){
            mkdir('./images/logos/management/', 0777, true);
        }
                
        $config['upload_path'] = './images/logos/management';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = '6048';
        $config['max_width']  = '6024';
        $config['max_height']  = '2868';
        $config['min_width'] = '12000';
        $config['min_height'] = '5000';
        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload())
        {
            $data['error'] = $this->upload->display_errors();
            $data['id'] = $id;
            $this->load->view('edit/header.php');
            $this->load->view('edit/upload_man_logo', $data);
            $this->load->view('edit/footer.php');
        }
        else
        {   
            $this->db->where('id', $id);
            $this->db->insert('pictures', $new_pic_data);

            $data = array('upload_data' => $this->upload->data());

            $file_name = $data['upload_data']['file_name'];
            $data_b['name'] = $file_name;

            $this->db->where('id', $id);
            $this->db->update('pictures', $data_b);     
            redirect(base_url().'edit/pictures/');
        }
}

public function man_logo_delete($id){
    $this->load->helper('file');
    $this->db->where('id', $id);
    $this->db->delete('pictures');
    delete_files('./images/logos/management/');
    redirect(base_url().'edit/pictures', 'refresh');
}



































}
?>
