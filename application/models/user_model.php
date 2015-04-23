<?php 

class User_model extends CI_Model{

	public function get_username($associated_user_id){
		$this->db->where('id', $associated_user_id);
		$all = $this->db->get('membership')->result_array();
		return $all[0]['username'];
	}

	public function info_for_session($username){
		$this->db->where('username', $username);
		$data = $this->db->get('membership')->result_array();

		$main_info = $this->db->get('main_info')->result_array();
		$data[0]['property_name'] = $main_info[0]['property_name'];
		return $data;
	}


}
?>