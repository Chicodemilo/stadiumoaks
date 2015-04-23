<?php
class View_model extends CI_Model{


    public function get_bg_data(){
        $query = $this->db->get('main_info')->result_array();
        $data['property_description'] = $query[0]['property_description'];
      
        
        $this->db->where('cover_pic', 'Y');
        $query = $this->db->get('pictures')->result_array();
        if(count($query) > 0){
            $data['pic_id'] = $query[0]['id'];
            $data['name'] = $query[0]['name'];
            $data['caption'] = $query[0]['caption'];
        }else{
            $data['pic_id'] = 'N';
            $data['name'] = 'N';
            $data['caption'] = 'N';
        }
        return $data;
    }


    public function get_header_data()
    {
        $query = $this->db->get('main_info')->result_array();
        $data['property_name'] = $query[0]['property_name'];
        $data['property_city'] = $query[0]['property_city'];
        $data['property_state'] = $query[0]['property_state'];
        $data['property_slogan'] = $query[0]['property_slogan'];
        $data['property_description'] = $query[0]['property_description'];
        return $data;
    }

        public function get_special_data()
    {
        $query = $this->db->get('special')->result_array();
        if(count($query) > 0){
            $data['title'] = $query[0]['title'];
            $data['description'] = $query[0]['description'];
            $data['start'] = $query[0]['start'];
            $data['end'] = $query[0]['end'];
            $data['conditions'] = $query[0]['condition_1']." ".$query[0]['condition_2']." ".$query[0]['condition_3']." ".$query[0]['condition_4'];
            

            $end = date('Y-m-d', strtotime($query[0]['end']));
            $now = date('Y-m-d');
            if($now > $end){
                return 'N';
            }else{
                return $data;
            }
        }else{
            return 'N';
        }
    }


    public function get_nav_data($value='')
    {
        $query = $this->db->get('main_info')->result_array();
        $data['property_name'] = $query[0]['property_name'];
        $data['property_color_1'] = $query[0]['property_color_1'];
        $data['property_color_2'] = $query[0]['property_color_2'];
        $data['property_color_3'] = $query[0]['property_color_3'];
        $data['property_phone'] = $query[0]['property_phone'];
        $data['property_address'] = $query[0]['property_address'];
        $data['property_city'] = $query[0]['property_city'];
        $data['property_state'] = $query[0]['property_state'];
        $data['property_zip'] = $query[0]['property_zip'];
        return $data;
    }
    
    
    public function get_body_data()
    {       $query = $this->db->get('main_info')->result_array();
            $data['property_name'] = $query[0]['property_name'];
            $data['property_slogan'] = $query[0]['property_slogan'];
            $data['property_description'] = $query[0]['property_description'];
            $data['property_color_1'] = $query[0]['property_color_1'];
            $data['property_color_2'] = $query[0]['property_color_2'];
            $data['property_color_3'] = $query[0]['property_color_3'];

            $this->db->where('logo', 'Y');
            $query = $this->db->get('pictures')->result_array();
            if (count($query) > 0) {
                $data['logo_id'] = $query[0]['id'];
                $data['logo_name'] = $query[0]['name'];
            }else{
                $data['logo_id'] = 'N';
                $data['logo_name'] = 'N';
            }

        return $data;
    }

    public function get_hours_data(){
        $this->db->order_by('hours_order', 'asc');
        $hours = $this->db->get('office_hours')->result_array();
        if(count($hours) > 0){
            return $hours;
        }
        
    }     
    
    public function get_pic_data()
    {       
            $this->db->where('picture_page_main_pic', 'Y');
            $query = $this->db->get('pictures')->result_array();
            if (count($query) > 0) {
                $data['main_pic_id'] = $query[0]['id'];
                $data['main_pic_name'] = $query[0]['name'];
            }
            if (count($query) < 1) {
                $this->db->where('pic_order', 1);
                $query = $this->db->get('pictures')->result_array();
                $data['main_pic_id'] = $query[0]['id'];
                $data['main_pic_name'] = $query[0]['name'];
            }

            $query = $this->db->get('main_info')->result_array();
            $data['property_pictures_text'] = $query['0']['property_pictures_text'];
            $data['property_color_2'] = $query['0']['property_color_2'];

            $this->db->where('logo', 'N');
            $this->db->where('management_logo', 'N');
            $this->db->where('active', 'Y');
            $this->db->order_by('pic_order', 'asc');
            $data['pictures'] = $this->db->get('pictures')->result_array();

            return $data;
    }

    public function get_floorplan_data()
    {       
            
            $data['floorplans'] = $this->db->get('floorplans')->result_array();
            return $data;
    } 

    public function get_amenities_data()
    {       
            $this->db->where('amenities_page_main_pic', 'Y');
            $query = $this->db->get('pictures')->result_array();
        
            if(count($query) < 1){
                $this->db->where('pic_order', 1);
                $query = $this->db->get('pictures')->result_array();
                $data['pic_id'] = $query[0]['id'];
                $data['pic_name'] = $query[0]['name'];
            }else{
                $data['pic_id'] = $query[0]['id'];
                $data['pic_name'] = $query[0]['name'];
            }

            $this->db->where('active', 'Y');
            $our_list = $this->db->get('our_amenities_list')->result_array();
            $this->db->where('active', 'Y');
            $their_list = $this->db->get('their_amenities_list')->result_array();
            $i = 0;
            foreach ($our_list as $key => $value) {
                $all_amenities[$i] = $value;
                $i = $i + 1;
            }
            foreach ($their_list as $key => $value) {
                $all_amenities[$i] = $value;
                $i = $i + 1;
            }
            usort($all_amenities, function($a, $b){
                return strnatcmp($a['name'], $b['name']);
            });
            $data['amenities'] = $all_amenities;

            $query = $this->db->get('main_info')->result_array();
            $data['property_name'] = $query[0]['property_name'];
            $data['property_amenities_text'] = $query[0]['property_amenities_text'];

            $query = $this->db->get('pet_policy')->result_array();
            if(count($query) > 0){
                $data['pet_type'] = $query[0]['type'];
                $data['pet_deposit'] = $query[0]['pet_deposit'];
                $data['pet_deposit_refundable'] = $query[0]['pet_deposit_refundable'];
                $data['pet_restrictions'] = $query[0]['restrictions'];
            }else{
                $data['pet_type'] = '';
                $data['pet_deposit'] = '';
                $data['pet_deposit_refundable'] = '';
                $data['pet_deposit_refundable'] = '';
                $data['pet_restrictions'] = '';
            }
            return $data;
    }    


    public function get_footer_data()
    {       $query = $this->db->get('main_info')->result_array();
            $data['property_name'] = $query[0]['property_name'];
            $data['property_phone'] = $query[0]['property_phone'];
            $data['property_address'] = $query[0]['property_address'];
            $data['property_city'] = $query[0]['property_city'];
            $data['property_state'] = $query[0]['property_state'];
            $data['property_zip'] = $query[0]['property_zip'];
            $data['property_color_1'] = $query[0]['property_color_1'];
            $data['property_color_3'] = $query[0]['property_color_3'];
            $data['property_management_name'] = $query[0]['property_management_name'];

            if ($query[0]['property_facebook'] != '') { 
                $data['property_facebook'] = $query[0]['property_facebook'];
            }else{
                $data['property_facebook'] = 'N';
            }

            if ($query[0]['property_twitter'] != '') { 
                $data['property_twitter'] = $query[0]['property_twitter'];
            }else{
                $data['property_twitter'] = 'N';
            }

            if ($query[0]['property_instagram'] != '') { 
                $data['property_instagram'] = $query[0]['property_instagram'];
            }else{
                $data['property_instagram'] = 'N';
            }

            if ($query[0]['property_google_plus'] != '') { 
                $data['property_google_plus'] = $query[0]['property_google_plus'];
            }else{
                $data['property_google_plus'] = 'N';
            }

            if ($query[0]['property_management_url'] != '') { 
                $data['property_management_url'] = $query[0]['property_management_url'];
            }else{
                $data['property_management_url'] = 'N';
            }


            $this->db->where('management_logo', 'Y');
            $query = $this->db->get('pictures')->result_array();
            if (count($query) > 0) {
                $data['management_logo_name'] = $query[0]['name'];
            }else{
                $data['management_logo_name'] = 'N';
            }

        return $data;
    }
}






































?>