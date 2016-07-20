<div class="contact_box_form_maint">
          <span class="amenities_title">Maintenance Request</span>
          <hr>
          <?php
          echo form_open(); 
          ?>
          <input type="hidden" name="system_date">
          <table id="contact_table">
              <tr><td class="righter_width">First Name</td><td>
                  <input type="text" autofocus maxlength="20" id="first_name" size="30" name="first_name" 
                         placeholder="<?php if (form_error('first_name') != ''){echo form_error('first_name');}else{echo '';}?>"
                         value="<?php if (set_value('first_name') != ''){echo set_value('first_name');}else{echo '';}?>"
                         /></td></tr>
              <tr><td class="righter">Last Name</td><td>
                  <input type="text" maxlength="20" id="last_name" size="30" name="last_name" 
                         placeholder="<?php if (form_error('last_name') != ''){echo form_error('last_name');}else{echo '';}?>"
                         value="<?php if (set_value('last_name') != ''){echo set_value('last_name');}else{echo '';}?>"
                         /></td></tr>
              <tr><td class="righter">Apartment #</td><td>
                      <input type="text" maxlength="10" id="unit_number" size="30" name="unit_number" 
                             placeholder="<?php if (form_error('unit_number') != ''){echo form_error('unit_number');}else{echo '';}?>"
                             value="<?php if (form_error('unit_number') != ''){echo '';}else{echo set_value('unit_number');}?>"
                             /></td></tr>
              <tr><td class="righter">Email</td><td>
                      <input type="text" maxlength="50" id="email" size="30" name="email" 
                             placeholder="<?php if (form_error('email') != ''){echo form_error('email');}else{echo '';}?>"
                             value="<?php if (form_error('email') != ''){echo '';}else{echo set_value('email');}?>"
                             /></td></tr>
              <tr><td class="righter">Phone</td><td>
                      <input type="text" maxlength="13" id="phone" size="30" name="phone" 
                             placeholder="<?php if (form_error('phone') != ''){echo form_error('phone');}else{echo '';}?>"
                             value="<?php if (set_value('phone') != ''){echo set_value('phone');}else{echo '';}?>"
                             /></td></tr>
              <tr><td class="righter">Maintenance<br>Issue</td><td>
                      <textarea maxlength="350" id="message" rows="4" cols="29" name="message"
                             placeholder="<?php if (form_error('message') != ''){echo form_error('message');}else{echo '';}?>"
                             ><?php if (set_value('message') != ''){echo set_value('message');}else{echo '';}?></textarea></td></tr>
              
              <tr><td></td><td><?php echo $image;?></td></tr>
              <tr><td></td><td class="amenities_pet_xsmall">Please type the text from the box above:</td></tr>
              <tr><td></td><td class='body_link_xsmall'>
                      <input type="text" maxlength="50" size="30" name="captcha" 
                             placeholder="<?php if (form_error('captcha') != ''){echo form_error('captcha');}else{echo '';}?>"
                             /><br><a href="<?php echo base_url();?>home/contact_maint">Click Here if you need new random letters</a></td></tr>
              
              <tr><td></td><td><input class="button_style" id="button" type="submit" value="Send Request"></td></tr>
          </table>
          <?php
          echo form_close();
          ?>
          <hr>
          <span class="center_light">*For Maintenance Emergencies Please Call Us
          <?php 
            
            if ($property_emergency_phone['property_emergency_phone'] != "") {
              echo "<br>*For Afterhours Maintenance Emergencies Please Call ".$property_emergency_phone['property_emergency_phone'];
            }

           ?>
           <br>*For Police or Fire Emergencies Please Call 911
          </span>
</div>
<div class="under_pic_box_content_pages" style="background:#<?php echo $property_color_1;?>;">
  </div>
  <div class="content_pages_lower" style="background:#<?php echo $property_color_3;?>;">
  </div>

<div class="contact_box_mobile">
  <div class="contact_box_inner">
            <?php
            echo form_open(); 
            ?>
            <input type="hidden" name="system_date">
            <table id="contact_table_mobile">
                <tr><td class="lefter_width">First Name:</td></tr>
                <tr><td><input type="text" maxlength="20" id="first_name_mobile" size="59" name="first_name" 
                           placeholder="<?php if (form_error('first_name') != ''){echo form_error('first_name');}else{echo '';}?>"
                           value="<?php if (set_value('first_name') != ''){echo set_value('first_name');}else{echo '';}?>"
                           /></td></tr>
                <tr><td class="lefter">Last Name:</td></tr>
                <tr><td><input type="text" maxlength="20" id="last_name_mobile" size="59" name="last_name" 
                           placeholder="<?php if (form_error('last_name') != ''){echo form_error('last_name');}else{echo '';}?>"
                           value="<?php if (set_value('last_name') != ''){echo set_value('last_name');}else{echo '';}?>"
                           /></td></tr>
                <tr><td class="lefter">Apartment #:</td></tr>
                <tr><td><input type="text" maxlength="50" id="unit_number_mobile" size="59" name="unit_number" 
                               placeholder="<?php if (form_error('unit_number') != ''){echo form_error('unit_number');}else{echo '';}?>"
                               value="<?php if (form_error('unit_number') != ''){echo '';}else{echo set_value('unit_number');}?>"
                               /></td></tr>
                <tr><td class="lefter">Email:</td></tr>
                <tr><td><input type="text" maxlength="50" id="email_mobile" size="59" name="email" 
                               placeholder="<?php if (form_error('email') != ''){echo form_error('email');}else{echo '';}?>"
                               value="<?php if (form_error('email') != ''){echo '';}else{echo set_value('email');}?>"
                               /></td></tr>
                <tr><td class="lefter">Phone Number:</td></tr>
                <tr><td><input type="text" maxlength="13" id="phone_mobile" size="59" name="phone" 
                               placeholder="<?php if (form_error('phone') != ''){echo form_error('phone');}else{echo '';}?>"
                               value="<?php if (set_value('phone') != ''){echo set_value('phone');}else{echo '';}?>"
                               /></td></tr>
                <tr><td class="lefter">Maintenance<br>Issue:</td></tr>
                <tr><td><textarea maxlength="350" id="message_mobile" rows="6" cols="57" name="message"
                               placeholder="<?php if (form_error('message') != ''){echo form_error('message');}else{echo '';}?>"
                               ><?php if (set_value('message') != ''){echo set_value('message');}else{echo '';}?></textarea></td></tr>
                
                <tr><td><?php echo $image;?></td></tr>
                <tr><td class="lefter_light">Please type the text from the box above:</td></tr>
                <tr><td class='body_link_small'>
                        <input type="text" maxlength="50" size="45" name="captcha" 
                               placeholder="<?php if (form_error('captcha') != ''){echo form_error('captcha');}else{echo '';}?>"
                               /><br><a href="<?php echo base_url();?>home/contact">Click Here if you need new random letters</a></td></tr>
                
                <tr><td><input class="button_style" id="button_mobile" type="submit" value="Send Message"></td></tr>
            </table>
            <?php
            echo form_close();

            ?>
  </div>
  <div class="below_hours"></div>
</div>

<script type="text/javascript" >
    $('#button').mouseover(function(){
        $(this).animate({color:'#0000EE'}, 200);
    }).mouseout(function(){
        $(this).animate({color:'#8B7355'}, 400);
    }); 

   jQuery(document).ready(function($) {
      var temp_number = <?php echo $template; ?>;
        if(temp_number === 6){
            $('#nav_bar').addClass('nav_bar_gone');
            $('#nav_bar_only_top').addClass('nav_bar_only_top_see');
        }
    });
</script>