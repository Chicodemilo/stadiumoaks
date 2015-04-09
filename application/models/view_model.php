<?php
class View_model extends CI_Model{


    public function get_bg_data(){
        $query = $this->db->get('main_info')->result_array();
        if(count($query) > 0){
            $data['property_name'] = $query[0]['property_name'];
            $data['property_city'] = $query[0]['property_city'];
            $data['property_state'] = $query[0]['property_state'];
            $data['property_slogan'] = $query[0]['property_slogan'];
            $data['property_description'] = $query[0]['property_description'];
        }else{
            $data['property_name'] = 'N';
            $data['property_city'] = 'N';
            $data['property_state'] = 'N';
            $data['property_slogan'] = 'N';
            $data['property_description'] = 'N';
        }
        

        $this->db->where('cover_pic', 'Y');
        $this->db->where('active', 'Y');
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


    
                
}
?>