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
    
    
    <script src="<?php echo base_url();?>javascript/jquery-1.10.2.js"></script>
    <script src="<?php echo base_url();?>slide/js/better-simple-slideshow.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>javascript/apartment_javascript.js"></script>
   
    <link rel='stylesheet' media='only screen and (min-width: 1005px)' href='<?php echo base_url();?>css/<?php echo $template ?>_apartment_view_main.css' />
    <link rel='stylesheet' media='only screen and (max-width: 1004px)' href='<?php echo base_url();?>css/<?php echo $template ?>_apartment_view_main_xsmall.css' />
    <link rel='stylesheet' href='<?php echo base_url();?>slide/css/simple-slideshow-styles.css' />

    <link href='https://fonts.googleapis.com/css?family=Yesteryear' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Raleway:200' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Playfair+Display+SC:400,400italic' rel='stylesheet' type='text/css'>
    
    <script>
        // google analytics
    </script>
    <style>
    .name {transition:0.5s;}
    .name:link {color: #<?php echo $property_color_3; ?>;}
    .name:visited {color: #<?php echo $property_color_3; ?>;}
    .name:hover   {color: #<?php echo $property_color_1; ?>;}
    .name:active  {color:#<?php echo $property_color_1; ?>; }

    .front_social {transition:0.5s;}
    .front_social:link {color: #<?php echo $property_color_2; ?>;}
    .front_social:visited {color: #<?php echo $property_color_2; ?>;}
    .front_social:hover   {color: #<?php echo $property_color_1; ?>;}
    .front_social:active  {color:#<?php echo $property_color_1; ?>; }

    .nav_bar_links span a {transition:0.5s;}
    .nav_bar_links span a:link {color: #<?php echo $property_color_3; ?>;}
    .nav_bar_links span a:visited {color: #<?php echo $property_color_3; ?>;}
    .nav_bar_links span a:hover   {color: #<?php echo $property_color_1; ?>;}
    .nav_bar_links span a:active  {color:#<?php echo $property_color_1; ?>; }

    .nav_bar_links_scroll_top span a {transition:0.5s;}
    .nav_bar_links_scroll_top span a:link {color: #<?php echo $property_color_3; ?>;}
    .nav_bar_links_scroll_top span a:visited {color: #<?php echo $property_color_3; ?>;}
    .nav_bar_links_scroll_top span a:hover   {color: #<?php echo $property_color_1; ?>;}
    .nav_bar_links_scroll_top span a:active  {color:#<?php echo $property_color_1; ?>; }

    .mobile_x polygon {transition: 0.5s;}
    .mobile_x:hover polygon {fill:#FC6060;}

    #footer_info_left a:link {color: #<?php echo $property_color_1; ?>;}
    #footer_info_left a:hover {color: #<?php echo $property_color_1; ?>;}
    #footer_info_left a:visited {color: #<?php echo $property_color_1; ?>;}
    #footer_info_left a:active {color: #dedede;}

    .facebook_logo path {transition: 0.3s;}
    .facebook_logo:hover path {fill:#3C5B9B;}
    .twitter_logo path {transition: 0.3s;}
    .twitter_logo:hover path {fill:#2DAAE1;}
    .instagram_logo path {transition: 0.3s;}
    .instagram_logo:hover path {fill:#517FA4;}
    .instagram_logo polygon {transition: 0.3s;}
    .instagram_logo:hover polygon {fill:#517FA4;}
    .google_logo path {transition: 0.3s;}
    .google_logo:hover path {fill:#F63D27;}

    .red_x polygon {transition: 0.5s;}
    .red_x:hover polygon {fill:#FC6060;}
    .right_arrow path {transition: 0.5s;}
    .right_arrow:hover path {fill:#507EFF;}
    .left_arrow path {transition: 0.5s;}
    .left_arrow:hover path {fill:#507EFF;}

    body{background:#<?php echo $property_color_3; ?>;}
    </style>

</head>
<body>
