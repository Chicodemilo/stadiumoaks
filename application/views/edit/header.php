<!DOCTYPE html>
<html lang="en" >
<head>
    <title>
      <?php echo $this->session->userdata('username')." : ".$this->session->userdata('property_name'); ?>
    </title>
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url();?>images/favicon.ico">
    <meta charset="utf-8" />
    <meta name="description" content="">
    <meta name="keywords" content="">
    
    
    <link href="<?php echo base_url();?>css/redmond/jquery-ui-1.10.4.custom.css" rel="stylesheet">
    <script src="<?php echo base_url();?>javascript/jquery-1.10.2.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>javascript/apartment_javascript.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>javascript/spectrum.js"></script>
    <link type="text/css" rel="stylesheet" href="<?php echo base_url();?>css/apartment_main.css">
    <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>css/pikaday.css">
    <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>css/spectrum.css">
    <script src="<?php echo base_url() ?>javascript/moment.js"></script>
    <script src="<?php echo base_url() ?>javascript/pikaday.js"></script>
    <script>
        // google analytics
    </script>


</head>
<body>
    <script type="text/javascript">

    </script>

    

    <header>
    <div id="nav_bar">


    </div>
    <div id="nav_bar_clear">
        <table class='user_info'>
    
            <tr><td >Hello, <?php 
                $name = $this->session->userdata('first_name');
                echo $name;
                ?>
            </td></tr>
            <tr><td><a href='<?php echo base_url(); ?>login/logout' class='not_fancy'>LOGOUT</a></td></tr>
        </table>
        <table>
            <tr>
                <td>
                    <ul class='main_links' id="main_links">
                        <li><a href="<?php echo base_url() ?>edit" class="">MAIN</a></li>
                        <li><a href="<?php echo base_url() ?>edit/amenities" class="">AMENITIES</a></li>
                        <li><a href="<?php echo base_url() ?>edit/hours" class="">HOURS</a></li>
                        <li><a href="<?php echo base_url() ?>edit/floorplans" class="">FLOORPLANS</a></li>
                        <li><a href="<?php echo base_url() ?>edit/pets" class="">PETS</a></li>
                        <li><a href="<?php echo base_url() ?>edit/pictures" class="">PICTURES</a></li>
                        <li><a href="<?php echo base_url() ?>edit/specials" class="">SPECIALS</a></li>
                        <li><a href="<?php echo base_url() ?>edit/users" class="">USERS</a></li>
                        <li><a href="<?php echo base_url() ?>edit/metadata" class="">METADATA</a></li>
                        <li><a href="<?php echo base_url() ?>edit/template" class="">TEMPLATE</a></li>
                        <li class="contact_drop" id="contact_drop"><a href="#" class="">CONTACT</a>
                            <ul class="contact_menu" id="contact_menu">
                                <li><a href="<?php echo base_url() ?>contact/messages" class="small_links">Messages</a></li>
                                <li><a href="<?php echo base_url() ?>contact/maintenance" class="small_links">Maintenance</a></li>
                                <!-- <li><a href="<?php echo base_url() ?>contact/pre_applications" class="small_links">Pre-Applications</a></li> -->
                            </ul>
                        </li>
                    </ul>
                </td>
            </tr>

        </table>
     
    </div>
<!--    <div class="contact_drop" id="contact_drop">
        <table>
            <tr>
                <td class=><a href="<?php echo base_url() ?>contact/messages" class="small_links">Messages</a></td>
                <td class=><a href="<?php echo base_url() ?>contact/maintenance" class="small_links">Maintenance</a></td>
                <td class=><a href="<?php echo base_url() ?>contact/pre_applications" class="small_links">Pre-Applications</a></td>
            </tr>
         </table>
        
    </div> -->
       
    </header>
    <div id="wrapper" class="wrapper">
    
