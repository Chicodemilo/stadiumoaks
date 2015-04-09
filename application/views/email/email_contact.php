<h3 style="color:gray; padding: 15px; background-color: #F0F8FF;"><?php echo $property_name." "; ?>Contact Form</h3>

<div style="padding: 15px; background-color: #F0F8FF;">
<span style="font-weight:bold">Email Address:</span> <?php echo $email; ?><br>
<span style="font-weight:bold">Name:</span> <?php echo $first_name." ".$last_name; ?><br>
<span style="font-weight:bold">Phone:</span> <?php echo $phone; ?><br>
<span style="font-weight:bold">Date:</span> <?php echo $time; ?>
</div>
<br>
<div style="padding: 15px; background-color: #F0F8FF;">
<span style="font-weight:bold">Message:</span> <br><?php echo $message; ?>
</div>
<div style="padding: 15px;">
<span style="color:gray; font-size:.8em;">To edit your site <a href="<?php echo base_url(); ?>login">login here</a><br></span>
</div>
