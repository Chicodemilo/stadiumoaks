<div id="nav_bar" style='background-color:#<?php echo $property_color_2; ?>;'>
   
    <div id="nav_bar_inner">
        <div class="logo_box">
            <a href="<?php echo base_url() ?>home/">

                <?php 
                    if($logo_name != 'N'){
                        
                        echo "<img id='logo' src='".base_url()."images/logos/property/".$logo_name."' alt='".$logo_name."'>";

                    }else{
                        echo "<div class='no_logo_name' style='color:#".$property_color_3."'><span class='name'>".$property_name."</span></div>"; 
                    }
                 ?>

                </a>

            </div>
            <div id="nav_bar_links" class="nav_bar_links" style="color:#<?php echo $property_color_2; ?>">
                <span>
                    <a href="<?php echo base_url() ?>home/floorplans">FLOORPLANS &amp; PRICES</a>
                    <a href="<?php echo base_url() ?>home/pictures">PICTURES</a>
                    <a href="<?php echo base_url() ?>home/amenities">AMENITIES</a>
                    <a href="<?php echo base_url() ?>home/contact">CONTACT</a>
                    <!-- &nbsp;&nbsp;&bull;&nbsp;&nbsp;<a href="<?php echo base_url() ?>home/contact">Residents</a> -->
                </span>
            </div>
    </div>
</div>

<div id="nav_bar_scroll_top" style='background-color:#<?php echo $property_color_2; ?>;'>
    <div class="mobile_hamburger" id="mobile_hamburger">
        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
         width="25px" height="25px" viewBox="0 0 25 25" enable-background="new 0 0 25 25" xml:space="preserve">
        <rect x="0.419" y="0.706" fill="#<?php echo $property_color_1; ?>" width="24.12" height="5.486"/>
        <rect x="0.419" y="9.874" fill="#<?php echo $property_color_1; ?>" width="24.12" height="5.487"/>
        <rect x="0.419" y="19.041" fill="#<?php echo $property_color_1; ?>" width="24.12" height="5.486"/>
        </svg>
    </div>

    <div id="nav_bar_inner">
        <div class="logo_box_scroll_top">
            <a href="<?php echo base_url() ?>home/">

                <?php 
                    if($logo_name != 'N'){
                        
                        echo "<img id='logo_scroll_top' src='".base_url()."images/logos/property/".$logo_name."' alt='".$logo_name."'>";

                    }else{
                        echo "<div class='no_logo_name_scroll_top' style='color:#".$property_color_3."'><span class='name'>".$property_name."</span></div>"; 
                    }
                 ?>

                </a>

            </div>
            <div id="nav_bar_links_scroll_top" class="nav_bar_links_scroll_top" style="color:#<?php echo $property_color_2; ?>">
                <span>
                    <a href="<?php echo base_url() ?>home/floorplans">FLOORPLANS &amp; PRICES</a>
                    <a href="<?php echo base_url() ?>home/pictures">PICTURES</a>
                    <a href="<?php echo base_url() ?>home/amenities">AMENITIES</a>
                    <a href="<?php echo base_url() ?>home/contact">CONTACT</a>
                    <!-- &nbsp;&nbsp;&bull;&nbsp;&nbsp;<a href="<?php echo base_url() ?>home/contact">Residents</a> -->
                </span>
            </div>
    </div>
</div>

<div id="nav_bar_only_top" class="nav_bar_only_top" style='background-color:#<?php echo $property_color_2; ?>;'>
    <div class="mobile_hamburger_only_top" id="mobile_hamburger_only_top">
        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
         width="25px" height="25px" viewBox="0 0 25 25" enable-background="new 0 0 25 25" xml:space="preserve">
        <rect x="0.419" y="0.706" fill="#<?php echo $property_color_1; ?>" width="24.12" height="5.486"/>
        <rect x="0.419" y="9.874" fill="#<?php echo $property_color_1; ?>" width="24.12" height="5.487"/>
        <rect x="0.419" y="19.041" fill="#<?php echo $property_color_1; ?>" width="24.12" height="5.486"/>
        </svg>
    </div>
    <div id="nav_bar_inner">
        <div class="logo_box_scroll_top">
            <a href="<?php echo base_url() ?>home/">

                <?php 
                    if($logo_name != 'N'){
                        
                        echo "<img id='logo_scroll_top' src='".base_url()."images/logos/property/".$logo_name."' alt='".$logo_name."'>";

                    }else{
                        echo "<div class='no_logo_name_scroll_top' style='color:#".$property_color_3."'><span class='name'>".$property_name."</span></div>"; 
                    }
                 ?>

                </a>

            </div>
            <div id="nav_bar_links_scroll_top" class="nav_bar_links_scroll_top" style="color:#<?php echo $property_color_2; ?>">
                <span>
                    <a href="<?php echo base_url() ?>home/floorplans">FLOORPLANS &amp; PRICES</a>
                    <a href="<?php echo base_url() ?>home/pictures">PICTURES</a>
                    <a href="<?php echo base_url() ?>home/amenities">AMENITIES</a>
                    <a href="<?php echo base_url() ?>home/contact">CONTACT</a>
                    <!-- &nbsp;&nbsp;&bull;&nbsp;&nbsp;<a href="<?php echo base_url() ?>home/contact">Residents</a> -->
                </span>
            </div>
    </div>
</div>

<script type="text/javascript" >
    $(document).ready(function() {
        $('#mobile_hamburger').click(function(event) {
            $('#nav_bar_links_mobile').animate({top: '+=350'}, 300);
        });

        $('#mobile_hamburger_only_top').click(function(event) {
            $('#nav_bar_links_mobile').animate({top: '+=350'}, 300);
        });

        $('#mobile_x').click(function(){
            $('#nav_bar_links_mobile').animate({top: '-=350'}, 150);
        });
    });
</script>

 <!-- ************************************  MOBILE NAV FOR LATER   ********************************** -->
    
     <div id="nav_bar_links_mobile" class="nav_bar_links_mobile">
            <span>
                <a href="<?php echo base_url() ?>home/floorplans" class="front_page_link">
                    FLOORPLANS &amp; PRICES
                </a><br>

                <a href="<?php echo base_url() ?>home/pictures" class="front_page_link">
                        PICTURES
                </a><br>
                
                <a href="<?php echo base_url() ?>home/amenities" class="front_page_link">
                        AMENITIES
                </a><br>
                
                <a href="<?php echo base_url() ?>home/contact" class="front_page_link">
                        CONTACT &amp; LOCATION
                </a>
                
            </span>
            <div class="mobile_nav_bar_closer">
                <svg version="1.1" id="mobile_x" class="mobile_x" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                         width="35px" height="35px" viewBox="0 0 198 198" enable-background="new 0 0 198 198" xml:space="preserve">
                    <polygon fill="#890E0E" points="171.25,19.941 100.535,90.655 29.82,19.941 20.111,29.651 90.825,100.365 20.112,171.078 29.822,180.789 
                        100.535,110.075 171.248,180.787 180.957,171.078 110.244,100.365 180.957,29.651 "/>
                </svg>
            </div>
    </div>