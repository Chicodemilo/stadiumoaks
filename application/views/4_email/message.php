<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCn87Zc_6XoEGDPiAZM9WBofRLNaNOX6bU&callback=initMap" type="text/javascript"></script>

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
<div class="center_box" style="background:#<?php echo $property_color_2 ?>">
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
                      <input type="text" maxlength="20" id="first_name" size="40" autofocus name="first_name" 
                             placeholder="<?php if (form_error('first_name') != ''){echo form_error('first_name');}else{echo '';}?>"
                             value="<?php if (set_value('first_name') != ''){echo set_value('first_name');}else{echo '';}?>"
                             /></td></tr>
                  <tr><td class="righter">Last Name</td><td>
                      <input type="text" maxlength="20" id="last_name" size="40" name="last_name" 
                             placeholder="<?php if (form_error('last_name') != ''){echo form_error('last_name');}else{echo '';}?>"
                             value="<?php if (set_value('last_name') != ''){echo set_value('last_name');}else{echo '';}?>"
                             /></td></tr>
                  <tr><td class="righter">Email</td><td>
                          <input type="text" maxlength="50" id="email" size="40" name="email" 
                                 placeholder="<?php if (form_error('email') != ''){echo form_error('email');}else{echo '';}?>"
                                 value="<?php if (form_error('email') != ''){echo '';}else{echo set_value('email');}?>"
                                 /></td></tr>
                  <tr><td class="righter">Phone</td><td>
                          <input type="text" maxlength="13" id="phone" size="40" name="phone" 
                                 placeholder="<?php if (form_error('phone') != ''){echo form_error('phone');}else{echo '';}?>"
                                 value="<?php if (set_value('phone') != ''){echo set_value('phone');}else{echo '';}?>"
                                 /></td></tr>
                  <tr><td class="righter">Message</td><td>
                          <textarea maxlength="350" id="message" rows="4" cols="40" name="message"
                                 placeholder="<?php if (form_error('message') != ''){echo form_error('message');}else{echo '';}?>"
                                 ><?php if (set_value('message') != ''){echo set_value('message');}else{echo '';}?></textarea></td></tr>
                  
                  <tr><td></td><td><?php echo $image;?></td></tr>
                  <tr><td></td><td class="amenities_pet_small">Please type the text from the box above:</td></tr>
                  <tr><td></td><td class='body_link_small'>
                          <input type="text" maxlength="50" size="40" name="captcha" 
                                 placeholder="<?php if (form_error('captcha') != ''){echo form_error('captcha');}else{echo '';}?>"
                                 /><br><a href="<?php echo base_url();?>home/contact">Click Here if you need new random letters</a></td></tr>
                  
                  <tr><td></td><td><input class="button_style" id="button" type="submit" value="Send Message"></td></tr>
              </table>
              <?php
              echo form_close();
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
      <p class='body_link'><a href="<?php echo base_url();?>home/contact_maint">Click Here to Send a Maintenance Request</a></p>
  </div>
  <div class="below_hours"></div>
  </div>
  <div id="map-canvas-mobile"></div>
  <div class="below_hours"> </div>
  </div>
</div>
<script type="text/javascript" >
    $('#button').mouseover(function(){
        $(this).animate({color:'#0000EE'}, 200);
    }).mouseout(function(){
        $(this).animate({color:'#8B7355'}, 400);
    }); 
</script>