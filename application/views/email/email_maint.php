<h3 style="color:gray; padding: 15px; background-color: #FFE1FF;"><?php echo $property_name." "; ?>Maintenance Request</h3>

<div style="padding: 15px; background-color: #FFE1FF;">
<span style="font-weight:bold">Email Address:</span> <?php echo $email; ?><br>
<span style="font-weight:bold">Name:</span> <?php echo $first_name." ".$last_name; ?><br>
<span style="font-weight:bold">Unit Number:</span> <?php echo $unit_number; ?><br>
<span style="font-weight:bold">Phone:</span> <?php echo $phone; ?><br>
<span style="font-weight:bold">Date:</span> <?php echo $time; ?>
</div>
<br>
<div style="padding: 15px; background-color: #FFE1FF;">
<span style="font-weight:bold">Request:</span> <br><?php echo $message; ?>
</div>
<div style="padding: 15px;">
<span style="color:gray; font-size:.8em;">To edit your site <a href="<?php echo base_url(); ?>login">login here</a><br></span>
</div>
