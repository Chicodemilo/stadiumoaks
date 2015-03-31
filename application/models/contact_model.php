<?php 

class Contact_model extends CI_Model{
	public function get_messages(){
		
		$this->db->order_by('time', 'desc');
		$data = $this->db->get('contact');
		return $data;
	}
	

}//close of Contact_model


 ?>