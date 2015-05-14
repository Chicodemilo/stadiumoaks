<div class="contact_box">
  <div class="contact_box_inner">
            <?php
            echo form_open(); 
            ?>
            <input type="hidden" name="system_date">
            <table id="contact_table">
                <tr><td class="righter" width="35%">First Name:</td><td>
                    <input type="text" maxlength="20" id="first_name" size="45" name="first_name" 
                           placeholder="<?php if (form_error('first_name') != ''){echo form_error('first_name');}else{echo '';}?>"
                           value="<?php if (set_value('first_name') != ''){echo set_value('first_name');}else{echo '';}?>"
                           /></td></tr>
                <tr><td class="righter">Last Name:</td><td>
                    <input type="text" maxlength="20" id="last_name" size="45" name="last_name" 
                           placeholder="<?php if (form_error('last_name') != ''){echo form_error('last_name');}else{echo '';}?>"
                           value="<?php if (set_value('last_name') != ''){echo set_value('last_name');}else{echo '';}?>"
                           /></td></tr>
                <tr><td class="righter">Email:</td><td>
                        <input type="text" maxlength="50" id="email" size="45" name="email" 
                               placeholder="<?php if (form_error('email') != ''){echo form_error('email');}else{echo '';}?>"
                               value="<?php if (form_error('email') != ''){echo '';}else{echo set_value('email');}?>"
                               /></td></tr>
                <tr><td class="righter">Phone Number:</td><td>
                        <input type="text" maxlength="13" id="phone" size="45" name="phone" 
                               placeholder="<?php if (form_error('phone') != ''){echo form_error('phone');}else{echo '';}?>"
                               value="<?php if (set_value('phone') != ''){echo set_value('phone');}else{echo '';}?>"
                               /></td></tr>
                <tr><td class="righter">Message:</td><td>
                        <textarea maxlength="350" id="message" rows="4" cols="42" name="message"
                               placeholder="<?php if (form_error('message') != ''){echo form_error('message');}else{echo '';}?>"
                               ><?php if (set_value('message') != ''){echo set_value('message');}else{echo '';}?></textarea></td></tr>
                
                <tr><td></td><td><?php echo $image;?></td></tr>
                <tr><td></td><td class="amenities_pet_small">Please type the text from the box above:</td></tr>
                <tr><td></td><td class='body_link_small'>
                        <input type="text" maxlength="50" size="45" name="captcha" 
                               placeholder="<?php if (form_error('captcha') != ''){echo form_error('captcha');}else{echo '';}?>"
                               /><br><a href="<?php echo base_url();?>home/contact">Click Here if you need new random letters</a></td></tr>
                
                <tr><td></td><td><input class="button_style" id="button" type="submit" value="Send Message"></td></tr>
            </table>
            <?php
            echo form_close();

            ?>
  </div>
  <div class="contact_box_inner">
    Office Hours:
    <ul class="hours_list">
    <?php
      foreach ($hours as $value) {
         echo "<li>";
         echo $value['day_type'];
         
         if($value['day_condition'] == "Closed" || $value['open_hour'] == 0 || $value['close_hour'] == 0 || $value['day_condition'] == "By Appointment"){
          echo "";
         }else{
            if($value['open_min'] == 0){$value['open_min'] = "00";}
            if($value['close_min'] == 0){$value['close_min'] = "00";}
            echo "&nbsp;&nbsp;&nbsp;";
            echo $value['open_hour'].":".$value['open_min'].$value['open_am_pm']." to ".$value['close_hour'].":".$value['close_min'].$value['close_am_pm']."";
         }
         echo " - ".$value['day_condition'];
       } 
    ?>
    </ul>
    <hr>
    <p class='body_link'><a href="<?php echo base_url();?>home/contact_maint">Click Here to Send a Maintenance Request</a></p>
</div>
<div class="below_hours"></div>
</div>

<div class="contact_box_mobile">
  <div class="contact_box_inner">
            <?php
            echo form_open(); 
            ?>
            <input type="hidden" name="system_date">
            <table id="contact_table">
                <tr><td class="lefter" width="35%">First Name:</td></tr>
                <tr><td><input type="text" maxlength="20" id="first_name" size="59" name="first_name" 
                           placeholder="<?php if (form_error('first_name') != ''){echo form_error('first_name');}else{echo '';}?>"
                           value="<?php if (set_value('first_name') != ''){echo set_value('first_name');}else{echo '';}?>"
                           /></td></tr>
                <tr><td class="lefter">Last Name:</td></tr>
                <tr><td><input type="text" maxlength="20" id="last_name" size="59" name="last_name" 
                           placeholder="<?php if (form_error('last_name') != ''){echo form_error('last_name');}else{echo '';}?>"
                           value="<?php if (set_value('last_name') != ''){echo set_value('last_name');}else{echo '';}?>"
                           /></td></tr>
                <tr><td class="lefter">Email:</td></tr>
                <tr><td><input type="text" maxlength="50" id="email" size="59" name="email" 
                               placeholder="<?php if (form_error('email') != ''){echo form_error('email');}else{echo '';}?>"
                               value="<?php if (form_error('email') != ''){echo '';}else{echo set_value('email');}?>"
                               /></td></tr>
                <tr><td class="lefter">Phone Number:</td></tr>
                <tr><td><input type="text" maxlength="13" id="phone" size="59" name="phone" 
                               placeholder="<?php if (form_error('phone') != ''){echo form_error('phone');}else{echo '';}?>"
                               value="<?php if (set_value('phone') != ''){echo set_value('phone');}else{echo '';}?>"
                               /></td></tr>
                <tr><td class="lefter">Message:</td></tr>
                <tr><td><textarea maxlength="350" id="message" rows="6" cols="57" name="message"
                               placeholder="<?php if (form_error('message') != ''){echo form_error('message');}else{echo '';}?>"
                               ><?php if (set_value('message') != ''){echo set_value('message');}else{echo '';}?></textarea></td></tr>
                
                <tr><td><?php echo $image;?></td></tr>
                <tr><td class="lefter_light">Please type the text from the box above:</td></tr>
                <tr><td class='body_link_small'>
                        <input type="text" maxlength="50" size="45" name="captcha" 
                               placeholder="<?php if (form_error('captcha') != ''){echo form_error('captcha');}else{echo '';}?>"
                               /><br><a href="<?php echo base_url();?>home/contact">Click Here if you need new random letters</a></td></tr>
                
                <tr><td><input class="button_style" id="button" type="submit" value="Send Message"></td></tr>
            </table>
            <?php
            echo form_close();

            ?>
  </div>
  <div class="contact_box_inner">
    Office Hours:
    <ul class="hours_list">
    <?php
      foreach ($hours as $value) {
         echo "<li>";
         echo $value['day_type'];
         
         if($value['day_condition'] == "Closed" || $value['open_hour'] == 0 || $value['close_hour'] == 0 || $value['day_condition'] == "By Appointment"){
          echo "";
         }else{
            if($value['open_min'] == 0){$value['open_min'] = "00";}
            if($value['close_min'] == 0){$value['close_min'] = "00";}
            echo "&nbsp;&nbsp;&nbsp;";
            echo $value['open_hour'].":".$value['open_min'].$value['open_am_pm']." to ".$value['close_hour'].":".$value['close_min'].$value['close_am_pm']."";
         }
         echo " - ".$value['day_condition'];
       } 
    ?>
    </ul>
    <hr>
    <p class='body_link_small'><a href="<?php echo base_url();?>home/contact_maint">Click Here to Send a Maintenance Request</a></p>
</div>
<div class="below_hours"></div>
</div>

<script type="text/javascript" >
    $('#button').mouseover(function(){
        $(this).animate({color:'#0000EE'}, 200);
    }).mouseout(function(){
        $(this).animate({color:'#8B7355'}, 400);
    }); 
</script>

