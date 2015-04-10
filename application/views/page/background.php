   <div class="background_fade">
    
        
    </div>
    <div id="background_image">
        <?php if($pic_id != 'N'){
            echo '<img src="'.base_url().'images/pictures/'.$pic_id.'/'.$name.'" alt="'.$caption.'">';
        }else{
            echo '';
        }?>
        
    </div>