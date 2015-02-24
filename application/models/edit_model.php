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
											'constraint' => 150,
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

				);

			$this->dbforge->add_field($main_info);
			$this->dbforge->add_key('id', TRUE);
			$made = $this->dbforge->create_table('main_info', TRUE);



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
											'constraint' => 150,
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
											'constraint' => 20,
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
											'type' => 'INT',
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
											'type' => 'INT',
											'constraint' => 50,
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
											'constraint' => 40,
											),
							'description' => array(
											'type' => 'VARCHAR',
											'constraint' => 400,
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
				'Accepts Credit Card Payments',
				'Accepts Electronic Payments',
				'Affordable Housing',
				'All Bills Paid',
				'Balcony',
				'Basketball Court(s)',
				'Business Center',
				'Cable Ready',
				'Cable Included',
				'Ceiling Fan(s)',
				'Clubhouse',
				'Covered Parking',
				'Disability Access',
				'Dishwasher',
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
				'Short Term Leases Available',
				'Smoke Free',
				'Some Paid Utilities',
				'Stainless Steel Appliances',
				'Swimming Pool',
				'Tennis Court(s)',
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

			$password = md5('bayrum42');
			$data = array('first_name' => 'Bay', 'last_name' => 'Rum', 'username' => 'bayrummedia', 'password' => $password, 'email' => 'master@bayrummedia.com', 'role' => 'master', 'verified' => 'Y');
			$this->db->insert('membership', $data);


			if($made){return TRUE;}else{return FALSE;}


	}




}
?>