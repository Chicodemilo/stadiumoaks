<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCn87Zc_6XoEGDPiAZM9WBofRLNaNOX6bU&callback=initMap"
    type="text/javascript"></script>

<script>
        
        function initMap() {
          var geocoder = new google.maps.Geocoder();

          var address = "<?php echo $main['property_address'] ?>"+" "+"<?php echo $main['property_city'] ?>"+" "+"<?php echo $main['property_state'] ?>";

          geocoder.geocode( { 'address': address}, function(results, status) {
              if (status == google.maps.GeocoderStatus.OK) {
                var mapOptions = {
                  zoom: 14,
                  scrollwheel: false,
                }
                var mapOptions_mobile = {
                  zoom: 15,
                  scrollwheel: false,
                  draggable: false
                }
                var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
                var map_mobile = new google.maps.Map(document.getElementById('map-canvas-mobile'), mapOptions_mobile);
                map.setCenter(results[0].geometry.location);
                map_mobile.setCenter(results[0].geometry.location);
                var marker = new google.maps.Marker({
                    map: map,
                    position: results[0].geometry.location,
                    title: "<?php echo $main['property_name'] ?>"
                });
                var marker_mobile = new google.maps.Marker({
                    map: map_mobile,
                    position: results[0].geometry.location,
                    title: "<?php echo $main['property_name'] ?>"
                });
                var contentString = "<h3><?php echo $main['property_name'] ?></h3>"+"<p>"+"<?php echo $main['property_address'] ?>"+" "+"<?php echo $main['property_city'] ?>"+", "+"<?php echo $main['property_state'] ?>"+"</p>"+"<h3>"+"<?php echo $main['property_phone'] ?>"+"</h3>";

                var infowindow = new google.maps.InfoWindow({
                    content: contentString
                });

                google.maps.event.addListener(marker, 'click', function() {
                  infowindow.open(map,marker);
                });

                google.maps.event.addListener(marker_mobile, 'click', function() {
                  infowindow.open(map_mobile,marker);
                });
              } else {
              }
            });
        }

        google.maps.event.addDomListener(window, 'load', initMap);
        google.maps.event.addDomListener(window, 'resize', initMap);
</script>
<div class="center_box">
  <div class="contact_box">
    <div class="map-box">
      <div class="address_box"><?php echo $main['property_name']."<br>".$main['property_address']."<br>".$main['property_city'].", ".$main['property_state']." ".$main['property_zip']."<br>".$main['property_phone']; ?></div>
      <div id="map-canvas"></div>
    </div>
    
    <div class="contact_box_form">
    
              <?php
              echo form_open(); 
              ?>
              <input type="hidden" name="system_date">
              <table id="contact_table">
                  <tr><td class="righter_width">First Name</td><td>
                      <input type="text" maxlength="20" id="first_name" size="30" autofocus name="first_name" 
                             placeholder="<?php if (form_error('first_name') != ''){echo form_error('first_name');}else{echo '';}?>"
                             value="<?php if (set_value('first_name') != ''){echo set_value('first_name');}else{echo '';}?>"
                             /></td></tr>
                  <tr><td class="righter">Last Name</td><td>
                      <input type="text" maxlength="20" id="last_name" size="30" name="last_name" 
                             placeholder="<?php if (form_error('last_name') != ''){echo form_error('last_name');}else{echo '';}?>"
                             value="<?php if (set_value('last_name') != ''){echo set_value('last_name');}else{echo '';}?>"
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
                  <tr><td class="righter">Message</td><td>
                          <textarea maxlength="350" id="message" rows="4" cols="29" name="message"
                                 placeholder="<?php if (form_error('message') != ''){echo form_error('message');}else{echo '';}?>"
                                 ><?php if (set_value('message') != ''){echo set_value('message');}else{echo '';}?></textarea></td></tr>
                  
                  <tr><td></td><td><?php echo $image;?></td></tr>
                  <tr><td></td><td class="amenities_pet_small">Please type the text from the box above:</td></tr>
                  <tr><td></td><td class='body_link_small'>
                          <input type="text" maxlength="50" size="30" name="captcha" 
                                 placeholder="<?php if (form_error('captcha') != ''){echo form_error('captcha');}else{echo '';}?>"
                                 /><br><a href="<?php echo base_url();?>home/contact">Click Here if you need new random letters</a></td></tr>
                  
                  <tr><td></td><td><input class="button_style" id="button" type="submit" value="Send Message"></td></tr>
              </table>
              <?php
              echo form_close();
              ?>
    </div>
    
  <div class="contact_info">
            
            <svg class="contact_icons" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
               width="20px" height="20px" viewBox="0 0 20 20" enable-background="new 0 0 20 20" xml:space="preserve">
            <path fill="#<?php echo $property_color_1; ?>" d="M10.361,0.387c-2.643,0-6.609,1.202-6.609,6.008c0,2.403,5.288,10.815,6.609,13.218
              c1.321-2.403,6.609-10.815,6.609-13.218C16.971,1.588,13.006,0.387,10.361,0.387z M10.361,8.498c-1.162,0-2.103-0.941-2.103-2.103
              c0-1.162,0.941-2.103,2.103-2.103c1.162,0,2.103,0.941,2.103,2.103C12.464,7.557,11.523,8.498,10.361,8.498z"/>
            </svg>

            <?php 
              echo "<span class='contact_map_phone'>".$property_address." ".$property_city.", ".$property_state."</span>";
              echo "<br>";
              echo '<svg class="contact_icons" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                 width="20px" height="20px" viewBox="0 0 20 20" enable-background="new 0 0 20 20" xml:space="preserve">
              <path fill="#'.$property_color_1.'" d="M18.374,15.409l-0.101-0.217c-0.303-0.713-4.013-1.803-4.319-1.82l-0.247,0.02
                c-0.507,0.103-1.062,0.582-2.233,1.617c-1.319-0.607-3.124-2.235-3.974-3.193C6.579,10.777,5.43,9.031,5.017,7.727
                c1.333-1.183,1.89-1.696,1.926-2.267c0.018-0.307-0.618-4.12-1.289-4.505L5.452,0.828C5.027,0.552,4.38,0.136,3.665,0.282
                c-0.174,0.037-0.343,0.104-0.5,0.203c-0.483,0.303-1.66,1.12-2.197,2.188c-0.331,0.666-0.48,6.736,4.067,11.865
                c4.496,5.074,10.039,5.295,10.873,5.125l0.022-0.006l0.073-0.021c1.124-0.403,2.077-1.476,2.437-1.917
                C19.1,16.902,18.63,15.932,18.374,15.409z"/>
              </svg>
              ';
              echo "<span class='contact_map_phone'>".$property_phone."</span>";
              if($property_email){
                echo "<br>";
                echo '<svg class="contact_icons" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                     width="20px" height="20px" viewBox="0 0 20 20" enable-background="new 0 0 20 20" xml:space="preserve">
                  <g>
                    <polygon fill="#'.$property_color_1.'" points="18.534,4.058 18.366,4.024 1.634,4.024 1.531,4.045 10.002,11.592  "/>
                    <path fill="#'.$property_color_1.'" d="M19.479,4.818l-6.024,5.319l5.947,5.204c0.094-0.169,0.159-0.354,0.159-0.561V5.219
                      C19.562,5.077,19.526,4.945,19.479,4.818z"/>
                    <path fill="#'.$property_color_1.'" d="M0.532,4.757C0.474,4.899,0.438,5.055,0.438,5.219v9.562c0,0.175,0.042,0.337,0.11,0.486l6.004-5.148
                      L0.532,4.757z"/>
                    <polygon fill="#'.$property_color_1.'" points="9.998,13.188 7.453,10.921 1.571,15.963 1.634,15.976 18.312,15.976 12.552,10.935  "/>
                  </g>
                  </svg>
                  ';
                echo "<a href='mailto:".$property_email."' target='_blank' class='contact_social'>";
                echo $property_email;
                echo "</a>";

              }
              if($property_facebook){
                echo "<br>";
                echo '<svg class="contact_icons" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                     width="20px" height="20px" viewBox="0 0 20 20" enable-background="new 0 0 20 20" xml:space="preserve">
                  <path fill="#'.$property_color_1.'" d="M14.297,10h-2.834c0,4.278,0,9.55,0,9.55H7.641c0,0,0-5.223,0-9.55H5.73V6.18h1.895V4.453c0-1.563,0.744-4.004,4.019-4.004
                    l2.951,0.012v3.274c0,0-1.793,0-2.143,0s-0.844,0.172-0.844,0.917V6.18h3.035L14.297,10z"/>
                  </svg>
                  ';
                echo "<a href='http://".$property_facebook."' class='contact_social'>";
                echo $property_facebook;
                echo "</a>";
              }
              if($property_instagram){
                echo "<br>";
                echo '<svg class="contact_icons" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                   width="20px" height="20px" viewBox="0 0 20 20" enable-background="new 0 0 20 20" xml:space="preserve">
                <path fill="#'.$property_color_1.'" d="M15.839,0.523H4.16c-2.029,0-3.679,1.65-3.679,3.679v3.886v7.794c0,2.027,1.65,3.676,3.679,3.676h11.675
                  c2.031,0,3.684-1.648,3.684-3.676V8.088V4.203C19.519,2.173,17.866,0.523,15.839,0.523z M16.872,2.719l0.422-0.002v0.42v2.807
                  l-3.215,0.008l-0.013-3.225L16.872,2.719z M7.159,8.089c0.606-0.844,1.598-1.397,2.718-1.397c1.116,0,2.104,0.553,2.714,1.397
                  c0.396,0.552,0.635,1.225,0.635,1.953c0,1.847-1.505,3.348-3.349,3.348c-1.849,0-3.354-1.501-3.354-3.348
                  C6.523,9.314,6.762,8.641,7.159,8.089z M17.537,15.884c0,1.003-0.82,1.822-1.827,1.822H4.035c-1.006,0-1.824-0.819-1.824-1.822
                  V8.089h2.841c-0.247,0.602-0.38,1.263-0.38,1.953c0,2.869,2.333,5.207,5.206,5.207c2.868,0,5.201-2.338,5.201-5.207
                  c0-0.69-0.139-1.351-0.385-1.953h2.844V15.884z"/>
                </svg>
                  ';
                echo "<a href='http://".$property_instagram."' class='contact_social'>";
                echo $property_instagram;
                echo "</a>";
              }
              if($property_twitter){
                echo "<br>";
                echo '<svg class="contact_icons" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                   width="20px" height="20px" viewBox="0 0 20 20" enable-background="new 0 0 20 20" xml:space="preserve">
                <path id="Twitter_1_" fill="#'.$property_color_1.'"" d="M15.083,14.816h-4.755c-0.661,0-1.223-0.23-1.686-0.694
                  c-0.462-0.467-0.693-1.027-0.693-1.693v-1.691h6.776c0.61,0,1.139-0.22,1.573-0.656c0.439-0.44,0.659-0.965,0.659-1.577
                  c0-0.614-0.22-1.139-0.659-1.578C15.86,6.489,15.332,6.27,14.718,6.27H7.95V2.773c0-0.661-0.235-1.229-0.706-1.699
                  c-0.465-0.473-1.029-0.71-1.686-0.71c-0.674,0-1.248,0.234-1.713,0.695C3.376,1.524,3.144,2.096,3.144,2.775v9.657
                  c0,1.983,0.701,3.681,2.105,5.09c1.406,1.409,3.101,2.113,5.081,2.113h4.754c0.661,0,1.226-0.237,1.698-0.711
                  c0.471-0.471,0.706-1.037,0.706-1.697c0-0.661-0.235-1.229-0.706-1.701C16.311,15.056,15.744,14.816,15.083,14.816z"/>
                </svg>
                ';
                echo "<a href='http://".$property_twitter."' class='contact_social'>";
                echo $property_twitter;
                echo "</a>";
              }
              if($property_google_plus){
                echo "<br>";
                echo '<svg class="contact_icons" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                     width="20px" height="20px" viewBox="0 0 20 20" enable-background="new 0 0 20 20" xml:space="preserve">
                  <path fill="#'.$property_color_1.'"" d="M0.731,9.707c-0.194,2.474,1.434,4.902,3.731,5.778c2.291,0.882,5.226,0.281,6.688-1.775
                    c0.965-1.301,1.173-2.974,1.061-4.544c-1.875-0.014-3.745-0.011-5.618-0.006c-0.003,0.668,0,1.336,0.003,2.005
                    c1.12,0.036,2.243,0.019,3.362,0.036c-0.494,2.483-3.873,3.289-5.66,1.666c-1.838-1.422-1.752-4.543,0.16-5.864
                    c1.335-1.067,3.235-0.803,4.571,0.121c0.524-0.486,1.015-1.004,1.489-1.544C9.408,4.691,8.044,4.06,6.593,4.126
                    C3.566,4.026,0.781,6.678,0.731,9.707z M15.861,7.472c-0.006,0.559-0.01,1.117-0.013,1.679c-0.562,0.003-1.12,0.006-1.679,0.011
                    c0,0.559,0,1.115,0,1.669c0.559,0.006,1.12,0.012,1.679,0.017c0.004,0.559,0.004,1.117,0.01,1.676c0.561,0,1.115,0,1.673,0
                    c0.003-0.559,0.006-1.117,0.012-1.677c0.561-0.006,1.118-0.009,1.679-0.015c0-0.555,0-1.113,0-1.669
                    c-0.561-0.005-1.121-0.005-1.679-0.011c-0.006-0.559-0.009-1.12-0.012-1.679C16.974,7.472,16.419,7.472,15.861,7.472z"/>
                  <path fill="#'.$property_color_1.'"" d="M0.731,9.707c0.05-3.028,2.835-5.68,5.862-5.58c1.452-0.066,2.815,0.565,3.926,1.452c-0.475,0.54-0.965,1.058-1.489,1.544
                    C7.693,6.198,5.793,5.934,4.458,7.001c-1.912,1.321-1.998,4.442-0.16,5.864c1.788,1.623,5.167,0.817,5.66-1.666
                    c-1.12-0.018-2.243,0-3.362-0.036C6.593,10.495,6.59,9.827,6.593,9.158c1.873-0.004,3.744-0.007,5.618,0.006
                    c0.112,1.571-0.096,3.244-1.061,4.544c-1.462,2.057-4.397,2.657-6.688,1.775C2.165,14.608,0.537,12.181,0.731,9.707"/>
                  <path fill="#'.$property_color_1.'"" d="M15.861,7.472c0.558,0,1.112,0,1.67,0c0.003,0.559,0.006,1.12,0.012,1.679c0.558,0.006,1.118,0.006,1.679,0.011
                    c0,0.556,0,1.115,0,1.669c-0.561,0.006-1.118,0.009-1.679,0.015c-0.006,0.56-0.009,1.119-0.012,1.677c-0.558,0-1.112,0-1.673,0
                    c-0.006-0.559-0.006-1.117-0.01-1.676c-0.559-0.004-1.12-0.011-1.679-0.017c0-0.555,0-1.11,0-1.669
                    c0.559-0.005,1.117-0.008,1.679-0.011C15.852,8.589,15.855,8.031,15.861,7.472"/>
                  </svg>
                  ';
                echo "<a href='http://".$property_google_plus."' class='contact_social'>";
                echo $property_google_plus;
                echo "</a>";
              }

             ?>
          </div>
  <div class="contact_box_hours">
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
           echo "&nbsp;&nbsp;&nbsp;".$value['day_condition'];
         } 
      ?>
      </ul>
      <hr>
      <p class='body_link_small'><a href="<?php echo base_url();?>home/contact_maint">Click Here to Send a Maintenance Request</a></p>
  </div>

  <div class="below_hours"></div>
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
                  <tr><td class="lefter">Message:</td></tr>
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
    <div class="address_box">
      <?php echo $main['property_name']."<br>".$main['property_address']." ".$main['property_city'].", ".$main['property_state']." ".$main['property_zip']; ?>
    </div>
    <div id="map-canvas-mobile"></div>
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
















