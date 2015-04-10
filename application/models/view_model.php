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
        // $this->db->where('logo', 'Y');
        // $query = $this->db->get('pictures')->result_array();
        // if (count($query) > 0) {
        //     $data['logo_id'] = $query[0]['id'];
        //     $data['logo_name'] = $query[0]['name'];
        // }else{
        //     $data['logo_id'] = 'N';
        //     $data['logo_name'] = 'N';
        // }

        $query = $this->db->get('main_info')->result_array();
        $data['property_name'] = $query[0]['property_name'];
        $data['property_city'] = $query[0]['property_city'];
        $data['property_state'] = $query[0]['property_state'];
        $data['property_slogan'] = $query[0]['property_slogan'];
        $data['property_description'] = $query[0]['property_description'];

        return $data;
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
}






































?>