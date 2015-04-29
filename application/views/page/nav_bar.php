

<div id="nav_bar" style="background-color: #<?php echo $property_color_1; ?>;">
    <div id="nav_bar_inner">
        <div id="name_box">
        <?php 
                echo "<div id='name_text'><p><a href='".base_url()."' class='name' style='color:#".$property_color_2.";'>".$property_name."</a></p</div>";
         ?>
        </div>
    </div>
    <div class="nav_bar_links_button" id="nav_bar_links_button">
            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                     width="35px" height="35px" viewBox="0 0 198 198" enable-background="new 0 0 198 198" xml:space="preserve">
                <path fill="<?php echo "#".$property_color_3; ?>" d="M190.347,32.599c0,8.067-7.021,14.608-15.684,14.608H25.983c-8.662,0-15.684-6.541-15.684-14.608l0,0
                    c0-8.068,7.022-14.608,15.684-14.608h148.68C183.326,17.99,190.347,24.531,190.347,32.599L190.347,32.599z"/>
                <path fill="<?php echo "#".$property_color_3; ?>" d="M190.347,96.494c0,8.067-7.021,14.608-15.684,14.608H25.983c-8.662,0-15.684-6.541-15.684-14.608l0,0
                    c0-8.068,7.022-14.608,15.684-14.608h148.68C183.326,81.885,190.347,88.426,190.347,96.494L190.347,96.494z"/>
                <path fill="<?php echo "#".$property_color_3; ?>" d="M190.347,160.389c0,8.067-7.021,14.607-15.684,14.607H25.983c-8.662,0-15.684-6.54-15.684-14.607l0,0
                    c0-8.068,7.022-14.608,15.684-14.608h148.68C183.326,145.78,190.347,152.32,190.347,160.389L190.347,160.389z"/>
            </svg>
    </div>
     <div id="nav_bar_links_mobile" class="nav_bar_links_mobile">
            <span>
                &bull;&nbsp;&nbsp;<a href="<?php echo base_url() ?>home/">Home</a>
                <br>
                &bull;&nbsp;&nbsp;<a href="<?php echo base_url() ?>home/floorplans">Floorplans &amp; Prices</a>
                <br>
                &bull;&nbsp;&nbsp;<a href="<?php echo base_url() ?>home/pictures">Pictures</a>
                <br>
                &bull;&nbsp;&nbsp;<a href="<?php echo base_url() ?>home/amenities">Amenities</a>
                <br>
                &bull;&nbsp;&nbsp;<a href="<?php echo base_url() ?>home/contact">Contact</a>
                <!-- &nbsp;&nbsp;&bull;&nbsp;&nbsp;<a href="<?php echo base_url() ?>home/contact">Residents</a> -->
            </span>
    </div>
    
    <div id="nav_bar_links" class="nav_bar_links" style="color:#<?php echo $property_color_3; ?>">
            <span>
                <a href="<?php echo base_url() ?>home/floorplans">Floorplans &amp; Prices</a>
                &nbsp;&nbsp;&bull;&nbsp;&nbsp;<a href="<?php echo base_url() ?>home/pictures">Pictures</a>
                &nbsp;&nbsp;&bull;&nbsp;&nbsp;<a href="<?php echo base_url() ?>home/amenities">Amenities</a>
                &nbsp;&nbsp;&bull;&nbsp;&nbsp;<a href="<?php echo base_url() ?>home/contact">Contact</a>
                <!-- &nbsp;&nbsp;&bull;&nbsp;&nbsp;<a href="<?php echo base_url() ?>home/contact">Residents</a> -->
            </span>
    </div>
</div>
<div class="address_bar" id="address_bar" style="background-color: #<?php echo $property_color_3 ?>;">
    <p style="color:#<?php echo $property_color_1; ?>"><?php echo $property_address."&nbsp;&nbsp;&bull;&nbsp;&nbsp;<span class='address_city'>".$property_city.", ".$property_state."&nbsp;&nbsp;&bull;&nbsp;&nbsp;</span>".$property_phone ?></p>

</div>
<style>
    a:link {color: #<?php echo $property_color_3; ?>;}
    a:visited {color: #<?php echo $property_color_3; ?>;}
    a:hover   {color: #<?php echo $property_color_3; ?>;}
    a:active  {color:#DEDEDE; }
</style>
<script type="text/javascript" >
    $('#nav_bar_links a').mouseover(function(){
        $(this).animate({color:'#<?php echo $property_color_2; ?>'}, 200);
    }).mouseout(function(){
        $(this).animate({color:'#<?php echo $property_color_3; ?>'}, 400);
    }); 

    $('#name_text a').mouseover(function(){
        $(this).animate({color:'#<?php echo $property_color_3; ?>'}, 200);
    }).mouseout(function(){
        $(this).animate({color:'#<?php echo $property_color_2; ?>'}, 400);
    });
    $(document).ready(function() {
        $('#nav_bar_links_button').click(function(event) {

            $('#nav_bar_links_mobile').animate({top: '+=330'}, 300);
        });
    });
</script>

