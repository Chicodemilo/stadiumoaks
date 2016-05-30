<?php 
class Edit_model extends CI_Model{

	

	public function get_main_info(){
		$data = $this->db->get('main_info')->result_array();
		return $data;
	}

	public function get_our_amenities(){
		$data = $this->db->get('our_amenities_list');
		return $data;
	}	

	public function get_thier_amenities(){
		$data = $this->db->get('their_amenities_list');
		return $data;
	}

	public function get_hours(){
		$data = $this->db->get('office_hours');
		return $data;
	}	

	public function get_floorplans(){
		$data = $this->db->get('floorplans');
		return $data;
	}

	public function get_flooplan_info($id){
		$this->db->where('id', $id);
		$data = $this->db->get('floorplans');
		return $data;
	}


	public function get_pets(){
		$data = $this->db->get('pet_policy');
		return $data;
	}


	public function get_specials(){
		$data = $this->db->get('special');
		return $data;
	}


	public function get_users(){
		$data = $this->db->get('membership');
		return $data;
	}


	public function get_user($id){
		$this->db->where('id', $id);
		$data = $this->db->get('membership');
		return $data;
	}

	public function get_pictures(){
		$this->db->where('logo', 'N');
		$this->db->where('management_logo', 'N');
		// $this->db->where('active', 'Y');
		$this->db->order_by('pic_order', 'asc');
		$data = $this->db->get('pictures');
		return $data;
	}

	public function reorder_pictures(){
		$this->db->where('logo', 'N');
		$this->db->where('management_logo', 'N');
		$this->db->order_by('pic_order', 'asc');
		$data = $this->db->get('pictures')->result_array();
		$x = 1;
		foreach ($data as $value) {
			$number['pic_order'] = $x;
			$this->db->where('id', $value['id']);
			$this->db->update('pictures', $number);
			$x = $x + 1;
		}
	}


	public function get_new_picture_data(){
		$this->db->order_by('id', 'desc');
		$ids = $this->db->get('pictures')->result_array();
		if(count($ids)  > 49){
			return "N";
		}else{
			$id_new = $ids[0]['id'] + 1;

			$this->db->where('logo', 'N');
			$this->db->where('management_logo', 'N');
			$this->db->order_by('pic_order', 'desc');
			$orders = $this->db->get('pictures')->result_array();
			$order_new = $orders[0]['pic_order'] + 1;

			$data = array('id' => $id_new, 'cover_pic' => 'N', 'logo' => 'N', 'management_logo' => 'N', 'amenities_page_main_pic' => 'N', 'picture_page_main_pic' => 'N', 'pic_order' => $order_new, 'active' => 'Y');
			return $data;
		}
	}


	public function get_picture_data($id){
		$this->db->where('id', $id);
		$data = $this->db->get('pictures')->result_array();
		return $data;
	}


	public function make_cover_pic($id){
		$data['cover_pic'] = 'N';
		$this->db->where('cover_pic', 'Y');
		$this->db->update('pictures', $data);
		$data['cover_pic'] = 'Y';
		$this->db->where('id', $id);
		$this->db->update('pictures', $data);
	}

	public function make_amenities_pic($id){
		$data['amenities_page_main_pic'] = 'N';
		$this->db->where('amenities_page_main_pic', 'Y');
		$this->db->update('pictures', $data);
		$data['amenities_page_main_pic'] = 'Y';
		$this->db->where('id', $id);
		$this->db->update('pictures', $data);
	}

	public function make_picture_pic($id){
		$data['picture_page_main_pic'] = 'N';
		$this->db->where('picture_page_main_pic', 'Y');
		$this->db->update('pictures', $data);
		$data['picture_page_main_pic'] = 'Y';
		$this->db->where('id', $id);
		$this->db->update('pictures', $data);
	}

	public function make_logo($id){
		$data['logo'] = 'N';
		$this->db->where('logo', 'Y');
		$this->db->update('pictures', $data);
		$data['logo'] = 'Y';
		$this->db->where('id', $id);
		$this->db->update('pictures', $data);
	}

	public function management_logo($id){
		$data['management_logo'] = 'N';
		$this->db->where('management_logo', 'Y');
		$this->db->update('pictures', $data);
		$data['management_logo'] = 'Y';
		$this->db->where('id', $id);
		$this->db->update('pictures', $data);
	}

	public function insert_pic_in_order($id, $pic_order, $old_order){
		if($pic_order != NULL){
			if($pic_order < $old_order){
				$this->db->where('logo', 'N');
				$this->db->where('management_logo', 'N');
				$this->db->where('pic_order >= ', $pic_order);
				$this->db->where('pic_order <', $old_order);
				$data = $this->db->get('pictures')->result_array();
				$start = $pic_order + 1;
				foreach ($data as $key => $value) {
					$insert_data['pic_order'] = $start;
					$this->db->where('id', $value['id']);
					$this->db->update('pictures', $insert_data);
					$start = $start + 1;
				}
				$data_b['pic_order'] = $pic_order;
				$this->db->where('id', $id);
				$this->db->update('pictures', $data_b);
			}else{
				$this->db->where('logo', 'N');
				$this->db->where('management_logo', 'N');
				$this->db->where('pic_order > ', $old_order);
				$this->db->where('pic_order <=', $pic_order);
				$data = $this->db->get('pictures')->result_array();
				// print_r($data);
				$start = $old_order;
				foreach ($data as $key => $value) {
					$insert_data['pic_order'] = $start;
					$this->db->where('id', $value['id']);
					$this->db->update('pictures', $insert_data);
					$start = $start + 1;
				}
				$data_b['pic_order'] = $pic_order;
				$this->db->where('id', $id);
				$this->db->update('pictures', $data_b);
			}
		}
	}


	public function get_new_logo_data(){
		$this->db->order_by('id', 'desc');
		$ids = $this->db->get('pictures')->result_array();
		$id_new = $ids[0]['id'] + 1;
		$order_new = null;
		$data = array('id' => $id_new, 'cover_pic' => 'N', 'logo' => 'N', 'management_logo' => 'N', 'amenities_page_main_pic' => 'N', 'picture_page_main_pic' => 'N', 'pic_order' => $order_new, 'active' => 'Y', 'logo' => 'Y');
		return $data;
	}


	public function get_logo(){
		$this->db->where('logo', 'Y');
		$this->db->where('management_logo', 'N');
		$this->db->order_by('pic_order', 'asc');
		$data = $this->db->get('pictures');
		return $data;
	}

	public function get_new_man_logo_data(){
		$this->db->order_by('id', 'desc');
		$ids = $this->db->get('pictures')->result_array();
		$id_new = $ids[0]['id'] + 1;
		$order_new = null;
		$data = array('id' => $id_new, 'cover_pic' => 'N', 'logo' => 'N', 'management_logo' => 'N', 'amenities_page_main_pic' => 'N', 'picture_page_main_pic' => 'N', 'pic_order' => $order_new, 'active' => 'Y', 'management_logo' => 'Y');
		return $data;
	}


	public function get_man_logo(){
		$this->db->where('logo', 'N');
		$this->db->where('management_logo', 'Y');
		$this->db->order_by('pic_order', 'asc');
		$data = $this->db->get('pictures');
		return $data;
	}


	public function get_template_info(){
		$data = $this->db->get('template')->result_array();
		return $data;
	}





	public function make_databases(){

			$this->load->dbforge();

			$main_info = array('id' => array(
											'type' => 'INT',
											'constraint' => 5,
											'unsigned' => TRUE,
											'auto_increment' => TRUE
											 ),
							'property_name' => array(
											'type' => 'VARCHAR',
											'constraint' => 26,
											),

							'property_phone' => array(
											'type' => 'VARCHAR',
											'constraint' => 20,
											),

							'property_address' => array(
											'type' => 'VARCHAR',
											'constraint' => 70,
											),

							'property_city' => array(
											'type' => 'VARCHAR',
											'constraint' => 40,
											),

							'property_state' => array(
											'type' => 'VARCHAR',
											'constraint' => 2,
											),

							'property_zip' => array(
											'type' => 'INT',
											'constraint' => 5,
											),

							'property_email' => array(
											'type' => 'VARCHAR',
											'constraint' => 60,
											),

							'property_website' => array(
											'type' => 'VARCHAR',
											'constraint' => 50,
											),

							'property_slogan' => array(
											'type' => 'VARCHAR',
											'constraint' => 125,
											),

							'property_description' => array(
											'type' => 'VARCHAR',
											'constraint' => 400,
											),

							'property_amenities_text' => array(
											'type' => 'VARCHAR',
											'constraint' => 400,
											),

							'property_pictures_text' => array(
											'type' => 'VARCHAR',
											'constraint' => 400,
											),

							'property_name_font' => array(
											'type' => 'VARCHAR',
											'constraint' => 20,
											),

							'property_name_font_bold' => array(
											'type' => 'VARCHAR',
											'constraint' => 1,
											),

							'property_name_font_italic' => array(
											'type' => 'VARCHAR',
											'constraint' => 1,
											),

							'property_name_font_space' => array(
											'type' => 'VARCHAR',
											'constraint' => 20,
											),

							'property_color_1' => array(
											'type' => 'VARCHAR',
											'constraint' => 6,
											),

							'property_color_2' => array(
											'type' => 'VARCHAR',
											'constraint' => 6,
											),

							'property_color_3' => array(
											'type' => 'VARCHAR',
											'constraint' => 6,
											),

							'property_facebook' => array(
											'type' => 'VARCHAR',
											'constraint' => 70,
											),

							'property_twitter' => array(
											'type' => 'VARCHAR',
											'constraint' => 70,
											),

							'property_instagram' => array(
											'type' => 'VARCHAR',
											'constraint' => 70,
											),

							'property_google_plus' => array(
											'type' => 'VARCHAR',
											'constraint' => 70,
											),

							'property_management_name' => array(
											'type' => 'VARCHAR',
											'constraint' => 35,
											),

							'property_management_url' => array(
											'type' => 'VARCHAR',
											'constraint' => 60,
											),

							'property_emergency_phone' => array(
											'type' => 'VARCHAR',
											'constraint' => 20,
											),

							'keyword_one' => array(
											'type' => 'VARCHAR',
											'constraint' => 25,
											),

							'keyword_two' => array(
											'type' => 'VARCHAR',
											'constraint' => 25,
											),

							'keyword_three' => array(
											'type' => 'VARCHAR',
											'constraint' => 25,
											),

							'keyword_four' => array(
											'type' => 'VARCHAR',
											'constraint' => 25,
											),

							'keyword_five' => array(
											'type' => 'VARCHAR',
											'constraint' => 25,
											),

							'keyword_six' => array(
											'type' => 'VARCHAR',
											'constraint' => 25,
											),

							'keyword_seven' => array(
											'type' => 'VARCHAR',
											'constraint' => 25,
											),

							'template' => array(
											'type' => 'INT',
											'constraint' => 4,
											),
				);

			$this->dbforge->add_field($main_info);
			$this->dbforge->add_key('id', TRUE);
			$made = $this->dbforge->create_table('main_info', TRUE);



			$captcha = array('id' => array(
											'type' => 'INT',
											'constraint' => 11,
											'unsigned' => TRUE,
											'auto_increment' => TRUE
											 ),
							'time' => array(
											'type' => 'int',
											'constraint' => 11,
											),
							'ip_address' => array(
											'type' => 'VARCHAR',
											'constraint' => 16,
											),
							'word' => array(
											'type' => 'VARCHAR',
											'constraint' => 11,
											),
				);

			$this->dbforge->add_field($captcha);
			$this->dbforge->add_key('id', TRUE);
			$made = $this->dbforge->create_table('captcha', TRUE);




			$our_amenities_list = array('id' => array(
											'type' => 'INT',
											'constraint' => 5,
											'unsigned' => TRUE,
											'auto_increment' => TRUE
											 ),
							'name' => array(
											'type' => 'VARCHAR',
											'constraint' => 150,
											),
							'active' => array(
											'type' => 'VARCHAR',
											'constraint' => 1,
											),
							'select_units' => array(
											'type' => 'VARCHAR',
											'constraint' => 1,
											),
							'extra_fees' => array(
											'type' => 'VARCHAR',
											'constraint' => 1,
											),

				);

			$this->dbforge->add_field($our_amenities_list);
			$this->dbforge->add_key('id', TRUE);
			$made = $this->dbforge->create_table('our_amenities_list', TRUE);


			$their_amenities_list = array('id' => array(
											'type' => 'INT',
											'constraint' => 5,
											'unsigned' => TRUE,
											'auto_increment' => TRUE
											 ),
							'name' => array(
											'type' => 'VARCHAR',
											'constraint' => 150,
											),
							'active' => array(
											'type' => 'VARCHAR',
											'constraint' => 1,
											),
							'select_units' => array(
											'type' => 'VARCHAR',
											'constraint' => 1,
											),

							'extra_fees' => array(
											'type' => 'VARCHAR',
											'constraint' => 1,
											),

				);

			$this->dbforge->add_field($their_amenities_list);
			$this->dbforge->add_key('id', TRUE);
			$made = $this->dbforge->create_table('their_amenities_list', TRUE);



			$pictures = array('id' => array(
											'type' => 'INT',
											'constraint' => 5,
											'unsigned' => TRUE,
											'auto_increment' => TRUE
											 ),
							'name' => array(
											'type' => 'VARCHAR',
											'constraint' => 50,
											),
							'caption' => array(
											'type' => 'VARCHAR',
											'constraint' => 120,
											),
							'cover_pic' => array(
											'type' => 'VARCHAR',
											'constraint' => 1,
											),
							'logo' => array(
											'type' => 'VARCHAR',
											'constraint' => 1,
											),
							'management_logo' => array(
											'type' => 'VARCHAR',
											'constraint' => 1,
											),
							'amenities_page_main_pic' => array(
											'type' => 'VARCHAR',
											'constraint' => 1,
											),
							'picture_page_main_pic' => array(
											'type' => 'VARCHAR',
											'constraint' => 1,
											),
							'pic_order' => array(
											'type' => 'INT',
											'constraint' => 3,
											'null' => TRUE,
											),
							'active' => array(
											'type' => 'VARCHAR',
											'constraint' => 1,
											),
				);

			$this->dbforge->add_field($pictures);
			$this->dbforge->add_key('id', TRUE);
			$made = $this->dbforge->create_table('pictures', TRUE);



			$floorplans = array('id' => array(
											'type' => 'INT',
											'constraint' => 5,
											'unsigned' => TRUE,
											'auto_increment' => TRUE
											 ),
							'name' => array(
											'type' => 'VARCHAR',
											'constraint' => 150,
											),
							'bedroom' => array(
											'type' => 'INT',
										    'constraint' => '2',
										    ),
							'bathroom' => array(
											'type' => 'DECIMAL',
										    'constraint' => '10,2',
										    'unsigned' => FALSE, ),
							'square_footage' => array(
											'type' => 'INT',
										    'constraint' => '5',
										    ),
							'units_available' => array(
											'type' => 'INT',
										    'constraint' => '5',
										    ),
							'is_available' => array(
											'type' => 'VARCHAR',
										    'constraint' => '1',
										    ),
							'rent' => array(
											'type' => 'INT',
										    'constraint' => '6',
										    ),
							'deposit' => array(
											'type' => 'INT',
										    'constraint' => '6',
										    ),
							'description' => array(
											'type' => 'VARCHAR',
										    'constraint' => '400',
										    ),

							'floorplan_pic' => array(
											'type' => 'VARCHAR',
										    'constraint' => '100',
										    ),




				);

			$this->dbforge->add_field($floorplans);
			$this->dbforge->add_key('id', TRUE);
			$made = $this->dbforge->create_table('floorplans', TRUE);



			$contact = array('id' => array(
											'type' => 'INT',
											'constraint' => 5,
											'unsigned' => TRUE,
											'auto_increment' => TRUE
											 ),
							'first_name' => array(
											'type' => 'VARCHAR',
											'constraint' => 50,
											),
							'last_name' => array(
											'type' => 'VARCHAR',
											'constraint' => 50,
											),
							'email' => array(
											'type' => 'VARCHAR',
											'constraint' => 100,
											),
							'phone' => array(
											'type' => 'VARCHAR',
											'constraint' => 13,
											),
							'message' => array(
											'type' => 'VARCHAR',
											'constraint' => 400,
											),
							'time' => array(
											'type' => 'DATETIME',
											),

				);

			$this->dbforge->add_field($contact);
			$this->dbforge->add_key('id', TRUE);
			$made = $this->dbforge->create_table('contact', TRUE);


			$maint_request = array('id' => array(
											'type' => 'INT',
											'constraint' => 5,
											'unsigned' => TRUE,
											'auto_increment' => TRUE
											 ),
							'first_name' => array(
											'type' => 'VARCHAR',
											'constraint' => 50,
											),
							'last_name' => array(
											'type' => 'VARCHAR',
											'constraint' => 50,
											),
							'email' => array(
											'type' => 'VARCHAR',
											'constraint' => 100,
											),
							'phone' => array(
											'type' => 'VARCHAR',
											'constraint' => 20,
											),
							'message' => array(
											'type' => 'VARCHAR',
											'constraint' => 400,
											),
							'time' => array(
											'type' => 'DATETIME',
											),
							'unit_number' => array(
											'type' => 'VARCHAR',
											'constraint' => 10,
											),

				);

			$this->dbforge->add_field($maint_request);
			$this->dbforge->add_key('id', TRUE);
			$made = $this->dbforge->create_table('maint_request', TRUE);


			$office_hours = array('id' => array(
											'type' => 'INT',
											'constraint' => 5,
											'unsigned' => TRUE,
											'auto_increment' => TRUE
											 ),
							'day_type' => array(
											'type' => 'VARCHAR',
											'constraint' => 100,
											),
							'open_hour' => array(
											'type' => 'INT',
											'constraint' => 2,
											),
							'open_min' => array(
											'type' => 'INT',
											'constraint' => 2,
											),
							'open_am_pm' => array(
											'type' => 'VARCHAR',
											'constraint' => 2
											),
							'close_hour' => array(
											'type' => 'INT',
											'constraint' => 2,
											),
							'close_min' => array(
											'type' => 'INT',
											'constraint' => 2,
											),
							'close_am_pm' => array(
											'type' => 'VARCHAR',
											'constraint' => 2
											),
							'day_condition' => array(
											'type' => 'VARCHAR',
											'constraint' => 50,
											),
							'hours_order' => array(
											'type' => 'INT',
											'constraint' => 2,
											),

				);

			$this->dbforge->add_field($office_hours);
			$this->dbforge->add_key('id', TRUE);
			$made = $this->dbforge->create_table('office_hours', TRUE);



			$special = array('id' => array(
											'type' => 'INT',
											'constraint' => 5,
											'unsigned' => TRUE,
											'auto_increment' => TRUE
											 ),
							'title' => array(
											'type' => 'VARCHAR',
											'constraint' => 30,
											),
							'description' => array(
											'type' => 'VARCHAR',
											'constraint' => 150,
											),
							'start' => array(
											'type' => 'DATETIME',
											),
							'end' => array(
											'type' => 'DATETIME',
											),
							'condition_1' => array(
											'type' => 'VARCHAR',
											'constraint' => 70,
											),
							'condition_2' => array(
											'type' => 'VARCHAR',
											'constraint' => 70,
											),
							'condition_3' => array(
											'type' => 'VARCHAR',
											'constraint' => 70,
											),
							'condition_4' => array(
											'type' => 'VARCHAR',
											'constraint' => 100,
											),

				);

			$this->dbforge->add_field($special);
			$this->dbforge->add_key('id', TRUE);
			$made = $this->dbforge->create_table('special', TRUE);


			$pet_policy = array('id' => array(
											'type' => 'INT',
											'constraint' => 5,
											'unsigned' => TRUE,
											'auto_increment' => TRUE
											 ),
							'type' => array(
											'type' => 'VARCHAR',
											'constraint' => 100,
											),
							'pet_deposit' => array(
											'type' => 'INT',
											'constraint' => 6,
											),
							'pet_deposit_refundable' => array(
											'type' => 'INT',
											'constraint' => 6,
											),
							'restrictions' => array(
											'type' => 'VARCHAR',
											'constraint' => 450,
											),

				);

			$this->dbforge->add_field($pet_policy);
			$this->dbforge->add_key('id', TRUE);
			$made = $this->dbforge->create_table('pet_policy', TRUE);



			$user_todo = array('id' => array(
											'type' => 'INT',
											'constraint' => 5,
											'unsigned' => TRUE,
											'auto_increment' => TRUE
											 ),
							'todo_name' => array(
											'type' => 'VARCHAR',
											'constraint' => 1,
											),
							'todo_phone' => array(
											'type' => 'VARCHAR',
											'constraint' => 1,
											),
							'todo_address' => array(
											'type' => 'VARCHAR',
											'constraint' => 1,
											),
							'todo_email' => array(
											'type' => 'VARCHAR',
											'constraint' => 1,
											),
							'todo_description' => array(
											'type' => 'VARCHAR',
											'constraint' => 1,
											),
							'todo_pictures' => array(
											'type' => 'VARCHAR',
											'constraint' => 1,
											),
							'todo_amenities' => array(
											'type' => 'VARCHAR',
											'constraint' => 1,
											),
							'todo_office_hours' => array(
											'type' => 'VARCHAR',
											'constraint' => 1,
											),
							'todo_floorplans' => array(
											'type' => 'VARCHAR',
											'constraint' => 1,
											),
							'todo_pet_policy' => array(
											'type' => 'VARCHAR',
											'constraint' => 1,
											),
							'todo_special' => array(
											'type' => 'VARCHAR',
											'constraint' => 1,
											),
							

				);

			$this->dbforge->add_field($user_todo);
			$this->dbforge->add_key('id', TRUE);
			$made = $this->dbforge->create_table('user_todo', TRUE);


			$pre_application = array('id' => array(
											'type' => 'INT',
											'constraint' => 5,
											'unsigned' => TRUE,
											'auto_increment' => TRUE
											 ),
							'first_name' => array(
											'type' => 'VARCHAR',
											'constraint' => 50,
											),
							'last_name' => array(
											'type' => 'VARCHAR',
											'constraint' => 50,
											),
							'email' => array(
											'type' => 'VARCHAR',
											'constraint' => 100,
											),
							'phone' => array(
											'type' => 'VARCHAR',
											'constraint' => 20,
											),
							
							'time' => array(
											'type' => 'DATETIME',
											),
							'street_address' => array(
											'type' => 'VARCHAR',
											'constraint' => 100,
											),
							'city' => array(
											'type' => 'VARCHAR',
											'constraint' => 30,
											),
							'state' => array(
											'type' => 'VARCHAR',
											'constraint' => 20,
											),
							'spouses_first_name' => array(
											'type' => 'VARCHAR',
											'constraint' => 35,
											),
							'spouses_last_name' => array(
											'type' => 'VARCHAR',
											'constraint' => 35,
											),
							'other_occupant_name_1' => array(
											'type' => 'VARCHAR',
											'constraint' => 70,
											),
							'other_occupant_name_2' => array(
											'type' => 'VARCHAR',
											'constraint' => 70,
											),
							'other_occupant_name_3' => array(
											'type' => 'VARCHAR',
											'constraint' => 70,
											),
							'other_occupant_name_4' => array(
											'type' => 'VARCHAR',
											'constraint' => 70,
											),
							'other_occupant_name_5' => array(
											'type' => 'VARCHAR',
											'constraint' => 70,
											),
							'other_occupant_name_6' => array(
											'type' => 'VARCHAR',
											'constraint' => 70,
											),
							'current_landlord_name' => array(
											'type' => 'VARCHAR',
											'constraint' => 70,
											),
							'current_landlord_address' => array(
											'type' => 'VARCHAR',
											'constraint' => 70,
											),
							'current_landlord_phone' => array(
											'type' => 'VARCHAR',
											'constraint' => 20,
											),
							'current_landlord_years' => array(
											'type' => 'VARCHAR',
											'constraint' => 70,
											),
							'previous_landlord_name' => array(
											'type' => 'VARCHAR',
											'constraint' => 70,
											),
							'previous_landlord_address' => array(
											'type' => 'VARCHAR',
											'constraint' => 70,
											),
							'previous_landlord_phone' => array(
											'type' => 'VARCHAR',
											'constraint' => 20,
											),
							'previous_landlord_years' => array(
											'type' => 'VARCHAR',
											'constraint' => 70,
											),
							'previous_landlord_name_2' => array(
											'type' => 'VARCHAR',
											'constraint' => 70,
											),
							'previous_landlord_address_2' => array(
											'type' => 'VARCHAR',
											'constraint' => 70,
											),
							'previous_landlord_phone_2' => array(
											'type' => 'VARCHAR',
											'constraint' => 20,
											),
							'previous_landlord_years_2' => array(
											'type' => 'VARCHAR',
											'constraint' => 70,
											),
							'estimated_income' => array(
											'type' => 'INT',
											'constraint' => 7,
											),
							'bedrooms_desired' => array(
											'type' => 'INT',
											'constraint' => 2,
											),
							'move_in_date' => array(
											'type' => 'DATETIME',
											),

				);

			$this->dbforge->add_field($pre_application);
			$this->dbforge->add_key('id', TRUE);
			$made = $this->dbforge->create_table('pre_application', TRUE);

			$amenities = array(
				'55+ Community',
				'65+ Community',
				'Accepts Credit Card Payments',
				'Accepts Electronic Payments',
				'Affordable Housing',
				'All Bills Paid',
				'Balcony',
				'Basketball Court',
				'Business Center',
				'Cable Ready',
				'Cable Included',
				'Ceiling Fan(s)',
				'Clubhouse',
				'Covered Parking',
				'Disability Access',
				'Dishwasher',
				'Dog Park',
				'Enclosed Yards',
				'Extra Storage',
				'Fireplace',
				'Fitness Center',
				'Furnished Available',
				'Garage',
				'Garden Tub',
				'Gas Range',
				'Gated Access',
				'Hardwood Flooring',
				'High Speed Internet Access',
				'Income Restrictions',
				'Internet Included',
				'Laundry Facility',
				'Microwaves',
				'Oversized Closets',
				'Pets',
				'Playground',
				'Se Habla Espanol',
				'Security Systems',
				'Seniors Community',
				'Short Term Leases Available',
				'Smoke Free',
				'Some Paid Utilities',
				'Stainless Steel Appliances',
				'Swimming Pool',
				'Swimming Pools',
				'Tennis Court',
				'Tennis Courts',
				'Vaulted Ceilings',
				'Washer & Dryer Connections',
				'Washer & Dryer In Unit',
				'Wireless Internet Access',
				'Yards',
			);

			foreach ($amenities as $amenity) {
				$data = array('name' => $amenity, 'active' => 'N', 'select_units' => 'N', 'extra_fees' => 'N');
				$this->db->insert('our_amenities_list', $data); 
			}


			$membership = array('id' => array(
											'type' => 'INT',
											'constraint' => 5,
											'unsigned' => TRUE,
											'auto_increment' => TRUE
											 ),
							'first_name' => array(
											'type' => 'VARCHAR',
											'constraint' => 35,
											),
							'last_name' => array(
											'type' => 'VARCHAR',
											'constraint' => 35,
											),
							'username' => array(
											'type' => 'VARCHAR',
											'constraint' => 35,
											),
							'password' => array(
											'type' => 'VARCHAR',
											'constraint' => 32,
											),
							'email' => array(
											'type' => 'VARCHAR',
											'constraint' => 50,
											),
							'role' => array(
											'type' => 'VARCHAR',
											'constraint' => 11,
											),
							'verified' => array(
											'type' => 'VARCHAR',
											'constraint' => 3,
											),
							'last_login' => array(
											'type' => 'DATETIME',
											),
							'get_site_notify' => array(
											'type' => 'VARCHAR',
											'constraint' => 1,
											),
							'get_message' => array(
											'type' => 'VARCHAR',
											'constraint' => 1,
											),
							'get_maint' => array(
											'type' => 'VARCHAR',
											'constraint' => 1,
											),
							'get_pre_ap' => array(
											'type' => 'VARCHAR',
											'constraint' => 1,
											),

				);

			$this->dbforge->add_field($membership);
			$this->dbforge->add_key('id', TRUE);
			$made = $this->dbforge->create_table('membership', TRUE);

			$template = array('id' => array(
										'type' => 'INT',
										'constraint' => '4',
										'unsigned' => TRUE,
										'auto_increment' => TRUE),
							'name' => array(
										'type' => 'VARCHAR',
										'constraint' => 25),
							'description' => array(
										'type' => 'VARCHAR',
										'constraint' => 500),
							'example_link' => array(
										'type' => 'VARCHAR',
										'constraint' => 60),
							'image' => array(
										'type' => 'VARCHAR',
										'constraint' => 50),
			);


			$password = md5('bayrum42');
			$data = array('first_name' => 'Bay', 'last_name' => 'Rum', 'username' => 'bayrummedia', 'password' => $password, 'email' => 'master@bayrummedia.com', 'role' => 'master', 'verified' => 'Y');
			$this->db->insert('membership', $data);

			$data = array('keyword_four' => 'apartments', 'template' => 1);
			$this->db->insert('main_info', $data);


			if($made){return TRUE;}else{return FALSE;}


	}




}
?>