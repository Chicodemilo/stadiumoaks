<!DOCTYPE html>
<html lang="en" >
<head>
    <title>
      <?php echo $property_name." : ".$property_city." : ".$property_state ?>
    </title>
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url();?>images/favicon/<?php echo $first_letter; ?>/favicon.ico">
    <meta charset="utf-8" />
    <meta name="description" content="<?php echo $property_slogan; ?>   <?php echo $property_description ?>">
    <meta name="keywords" content="<?php echo $keyword_one; ?>, <?php echo $keyword_two; ?>, <?php echo $keyword_three; ?><?php if($keyword_four != ''){echo ', '.$keyword_four;} if($keyword_five != ''){echo ', '.$keyword_five;} if($keyword_six != ''){echo ', '.$keyword_six;} if($keyword_seven != ''){echo ', '.$keyword_seven;} ?>">
    <meta name=viewport content="width=device-width, initial-scale=1">
    
    <script type="text/javascript" src="<?php echo base_url();?>javascript/apartment_javascript.js"></script>
    <script src="<?php echo base_url();?>javascript/jquery-1.10.2.js"></script>
   
    <link rel='stylesheet' media='only screen and (min-width: 821px)' href='<?php echo base_url();?>css/<?php echo $template ?>_apartment_view_main.css' />
    <link rel='stylesheet' media='only screen and (max-width: 820px)' href='<?php echo base_url();?>css/<?php echo $template ?>_apartment_view_main_small.css' />
    <link href='http://fonts.googleapis.com/css?family=Josefin+Slab:300,400' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Oswald:300' rel='stylesheet' type='text/css'>
    <script>
        // google analytics
    </script>


</head>
<body>
