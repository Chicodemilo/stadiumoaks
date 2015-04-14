

<div id="nav_bar" style="background-color: #<?php echo $property_color_1; ?>;">
    <div id="nav_bar_inner">
        <div id="name_box">
        <?php 
                echo "<div id='name_text'><p><a href='".base_url()."' class='name' style='color:#".$property_color_2.";'>".$property_name."</a></p</div>";
         ?>
        </div>
    </div>
    <div id="nav_bar_links" class="nav_bar_links" style="color:#<?php echo $property_color_3; ?>">
            <span>
                <a href="<?php echo base_url() ?>floorplans">Floorplans &amp; Prices</a>
                &nbsp;&nbsp;&bull;&nbsp;&nbsp;<a href="<?php echo base_url() ?>pictures">Pictures</a>
                &nbsp;&nbsp;&bull;&nbsp;&nbsp;<a href="<?php echo base_url() ?>amenities">Amenities</a>
                &nbsp;&nbsp;&bull;&nbsp;&nbsp;<a href="<?php echo base_url() ?>home/contact">Contact</a>
                <!-- &nbsp;&nbsp;&bull;&nbsp;&nbsp;<a href="<?php echo base_url() ?>home/contact">Residents</a> -->
            </span>
        </div>
</div>
<div class="address_bar" id="address_bar" style="background-color: #<?php echo $property_color_3 ?>;">
    <p style="color:#<?php echo $property_color_1; ?>"><?php echo $property_address."&nbsp;&nbsp;&bull;&nbsp;&nbsp;".$property_city.", ".$property_state."&nbsp;&nbsp;&bull;&nbsp;&nbsp;".$property_phone ?></p>
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
</script>

