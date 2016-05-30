

<div id="nav_bar" style="background-color: #<?php echo $property_color_1; ?>;">
    <div id="nav_bar_inner">
        <a href="<?php echo base_url() ?>home/">
            <div class="logo_box">
                <?php 
                    if($logo_name != 'N'){
                        echo "<img id='logo' src='".base_url()."images/logos/property/".$logo_name."' alt='".$logo_name."'>";
                    }else{
                        echo "<span class='no_logo_header' style='color:#".$property_color_2."'>".$property_name."</span>";
                    }
                 ?>
            </div>
        </a>
        <div class="big_phone">
            <p style="color:#<?php echo $property_color_3; ?>"><?php echo $property_phone ?></p>
            
        </div>

    </div>
    <div class="nav_bar_links_button" id="nav_bar_links_button">
            <svg version="1.1" id="nav_bar_links_svg" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                 width="55px" height="55px" viewBox="0 0 35 35" enable-background="new 0 0 35 35" xml:space="preserve">
            <rect x="20.738" y="31.991" width="13.271" height="2.004" fill="<?php echo "#".$property_color_3; ?>"/>
            <rect x="14.811" y="21.643" width="19.199" height="2.004" fill="<?php echo "#".$property_color_3; ?>"/>
            <rect x="0.902" y="0.946" width="33.107" height="2.004" fill="<?php echo "#".$property_color_3; ?>"/>
            <rect x="7.466" y="11.294" width="26.544" height="2.004" fill="<?php echo "#".$property_color_3; ?>"/>
            </svg>

    </div>
     <div id="nav_bar_links_mobile" class="nav_bar_links_mobile">
            <span>
                <a href="<?php echo base_url() ?>home/">HOME</a>
                <br>
                <a href="<?php echo base_url() ?>home/floorplans">FLOORPLANS &amp; PRICES</a>
                <br>
                <a href="<?php echo base_url() ?>home/pictures">PICTURES</a>
                <br>
                <a href="<?php echo base_url() ?>home/amenities">AMENITIES</a>
                <br>
                <a href="<?php echo base_url() ?>home/contact">CONTACT &amp; LOCATION</a>
                <!-- &nbsp;&nbsp;&bull;&nbsp;&nbsp;<a href="<?php echo base_url() ?>home/contact">Residents</a> -->
            </span>
            <div class="mobile_nav_bar_closer">
                <svg version="1.1" id="mobile_x" class="mobile_x" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                         width="35px" height="35px" viewBox="0 0 198 198" enable-background="new 0 0 198 198" xml:space="preserve">
                    <polygon fill="#890E0E" points="171.25,19.941 100.535,90.655 29.82,19.941 20.111,29.651 90.825,100.365 20.112,171.078 29.822,180.789 
                        100.535,110.075 171.248,180.787 180.957,171.078 110.244,100.365 180.957,29.651 "/>
                </svg>
            </div>
    </div>
    <div class="address_bar" id="address_bar" style="background-color: #<?php echo $property_color_3 ?>;">
        <div class="address_bar_inner" style="color:#<?php echo $property_color_1; ?>"><?php echo $property_address."&nbsp;&nbsp;&bull;&nbsp;&nbsp;<span class='address_city'>".$property_city.", ".$property_state ?>
        </div>
    </div>


    
</div>


<script type="text/javascript" >
    $(document).ready(function() {
        $('#nav_bar_links_button').click(function(event) {
            $('#nav_bar_links_mobile').animate({top: '+=330'}, 300);
        });

        $('#mobile_x').click(function(){
            $('#nav_bar_links_mobile').animate({top: '-=330'}, 150);
        });
    });
</script>

