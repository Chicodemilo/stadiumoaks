<div id="contact_box_b">
    
        <hr/>

            <?php
            echo form_open(); 

            ?>
            <input type="hidden" name="system_date">
            <table id="contact_table">
                <tr><td class="righter">First Name:</td><td>
                    <input type="text" maxlength="50" id="first_name" size="45" name="first_name" 
                           placeholder="<?php if (form_error('first_name') != ''){echo form_error('first_name');}else{echo '';}?>"
                           value="<?php if (set_value('first_name') != ''){echo set_value('first_name');}else{echo '';}?>"
                           /></td></tr>
                <tr><td class="righter">Last Name:</td><td>
                    <input type="text" maxlength="50" id="last_name" size="45" name="last_name" 
                           placeholder="<?php if (form_error('last_name') != ''){echo form_error('last_name');}else{echo '';}?>"
                           value="<?php if (set_value('last_name') != ''){echo set_value('last_name');}else{echo '';}?>"
                           /></td></tr>
                <tr><td class="righter">Email:</td><td>
                        <input type="text" maxlength="50" id="email" size="45" name="email" 
                               placeholder="<?php if (form_error('email') != ''){echo form_error('email');}else{echo '';}?>"
                               value="<?php if (form_error('email') != ''){echo '';}else{echo set_value('email');}?>"
                               /></td></tr>
                
                <tr><td class="righter">Phone Number:</td><td>
                        <input type="text" maxlength="50" id="phone" size="45" name="phone" 
                               placeholder="<?php if (form_error('phone') != ''){echo form_error('phone');}else{echo '';}?>"
                               value="<?php if (set_value('phone') != ''){echo set_value('phone');}else{echo '';}?>"
                               /></td></tr>
                
                <tr><td class="righter">Message:</td><td>
                        <textarea maxlength="450" id="message" rows="4" cols="37" name="message"
                               placeholder="<?php if (form_error('message') != ''){echo form_error('message');}else{echo '';}?>"
                               ><?php if (set_value('message') != ''){echo set_value('message');}else{echo '';}?></textarea></td></tr>
                
                <tr><td></td><td><?php echo $image;?></td></tr>
                
                <tr><td class="righter_light">Please type the text from the box above:</td><td>
                        <input type="text" maxlength="50" size="45" name="captcha" 
                               placeholder="<?php if (form_error('captcha') != ''){echo form_error('captcha');}else{echo '';}?>"
                               /><br><a class='small4' href="<?php echo base_url();?>home/contact">Click Here if you need new random letters</a></td></tr>
                
                <tr><td></td><td><input id="button" type="submit" value="Send Message"></td></tr>
                
            </table>

            <?php
            echo form_close();

            ?>

        <hr>

    
</div>
