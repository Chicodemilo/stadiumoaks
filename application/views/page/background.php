<!DOCTYPE html>
<html lang="en" >
<head>
    <title>
      <?php echo $property_name." : ".$property_city." : ".$property_state ?>
    </title>
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url();?>images/favicon.ico">
    <meta charset="utf-8" />
    <meta name="description" content="<?php echo $property_slogan; ?>   <?php echo $property_description ?>">
    <meta name="keywords" content="<?php echo $property_name; ?>, apartments, <?php echo $property_city; ?>, <?php echo $property_state ?>">
    
    <script type="text/javascript" src="<?php echo base_url();?>javascript/apartment_javascript.js"></script>
    <link href="<?php echo base_url();?>css/redmond/jquery-ui-1.10.4.custom.css" rel="stylesheet">
    <script src="<?php echo base_url();?>javascript/jquery-1.10.2.js"></script>
    <script src="<?php echo base_url();?>javascript/jquery-ui-1.10.4.custom.js"></script>
   
    <link type="text/css" rel="stylesheet" href="<?php echo base_url();?>css/apartment_view_main.css">
    <script>
        // google analytics
    </script>


</head>
<body>
    <script type="text/javascript">
   
    </script>
    <div id="background_image">
        <?php if($pic_id != 'N'){
            echo '<img src="'.base_url().'images/pictures/'.$pic_id.'/'.$name.'" alt="'.$caption.'">';
        }
        ?>
        
    </div>