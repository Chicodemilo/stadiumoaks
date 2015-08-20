<div id="nav_bar">
    <div id="nav_bar_inner">
        <div id="name_box">
        
        <?php 
                echo "<div id='name_text'><p><a href='".base_url()."' class='name' id='name_link'>".$property_name."</a><span class='name' style='color:#".$property_color_2.";'>&nbsp;&nbsp;&nbsp;&nbsp;".$property_phone."</span></p></div>";
         ?>

        </div>
        <div id="nav_bar_links" class="nav_bar_links" style="color:#<?php echo $property_color_3; ?>">
            <span>
                <a href="<?php echo base_url() ?>home/floorplans">FLOORPLANS &amp; PRICES</a>
                <a href="<?php echo base_url() ?>home/pictures">PICTURES</a>
                <a href="<?php echo base_url() ?>home/amenities">AMENITIES</a>
                <a href="<?php echo base_url() ?>home/contact">CONTACT</a>
                <!-- &nbsp;&nbsp;&bull;&nbsp;&nbsp;<a href="<?php echo base_url() ?>home/contact">Residents</a> -->
            </span>
    </div>
    </div>
    <div class="nav_bar_links_button" id="nav_bar_links_button">
            <svg version="1.1" id="nav_bar_links_button_svg" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                 width="40px" height="60px" viewBox="0 0 140.069 380.217" enable-background="new 0 0 140.069 380.217"
                 xml:space="preserve">
            <rect fill="<?php echo "#".$property_color_3; ?>" y="52.525" width="190.069" height="15.54"/>
            <rect fill="<?php echo "#".$property_color_3; ?>" width="190.069" height="15.54"/>
            <rect fill="<?php echo "#".$property_color_3; ?>" y="157.576" width="190.069" height="15.54"/>
            <rect fill="<?php echo "#".$property_color_3; ?>" y="105.051" width="190.069" height="15.54"/>
            </svg>
    </div>
     <div id="nav_bar_links_mobile" class="nav_bar_links_mobile">
            <span>
                &bull;&nbsp;&nbsp;<a href="<?php echo base_url() ?>home/">HOME</a>
                <br>
                &bull;&nbsp;&nbsp;<a href="<?php echo base_url() ?>home/floorplans">FLOORPLANS &amp; PRICES</a>
                <br>
                &bull;&nbsp;&nbsp;<a href="<?php echo base_url() ?>home/pictures">PICTURES</a>
                <br>
                &bull;&nbsp;&nbsp;<a href="<?php echo base_url() ?>home/amenities">AMENITIES</a>
                <br>
                &bull;&nbsp;&nbsp;<a href="<?php echo base_url() ?>home/contact">CONTACT &amp; LOCATION</a>
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

