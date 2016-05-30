


<div id="outer_description" class="outer_description" >	
	<div id="inner_description" class="inner_description" >	
		<span id="slogan" class="slogan" style="color:#<?php echo $property_color_1; ?>"><?php echo $property_slogan; ?></span>
		<br>
		<p id="description" class="description" style="color:#<?php echo $property_color_2; ?>"><?php echo $property_description; ?></p>
	</div>
</div>



<div class="background_slider">
	 <div class="bss-slides">
	 	<?php 
				foreach ($pic_data[pictures] as $key => $value) {
					echo "<figure>";
					echo "<img src='".base_url()."images/pictures/".$value['id']."/".$value['name']."' alt='".$value['caption']."' width='100%''>";
					echo "</figure>";
				}
				

			?>
	 </div>
</div>


<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
<script>

	$(document).ready(function() {
		var opts = {
            //auto-advancing slides? accepts boolean (true/false) or object
            auto : { 
                // speed to advance slides at. accepts number of milliseconds
                speed : 14000, 
                // pause advancing on mouseover? accepts boolean
                pauseOnHover : false 
            },
            // show fullscreen toggle? accepts boolean
            fullScreen : false, 
            // support swiping on touch devices? accepts boolean, requires hammer.js
            swipe : false 
        };
		makeBSS('.bss-slides', opts);
	});

        
        function initialize() {
          var geocoder = new google.maps.Geocoder();

          var address = "<?php echo $property_address ?>"+" "+"<?php echo $property_city ?>"+" "+"<?php echo $property_state?>";

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
                var map = new google.maps.Map(document.getElementById('map-canvas-main'), mapOptions);
                var map_mobile = new google.maps.Map(document.getElementById('map-canvas-main-mobile'), mapOptions_mobile);
                map.setCenter(results[0].geometry.location);
                map_mobile.setCenter(results[0].geometry.location);
                var marker = new google.maps.Marker({
                    map: map,
                    position: results[0].geometry.location,
                    title: "<?php echo $property_name ?>"
                });
                var marker_mobile = new google.maps.Marker({
                    map: map_mobile,
                    position: results[0].geometry.location,
                    title: "<?php echo $property_name?>"
                });
                var contentString = "<h3><?php echo $property_name ?></h3>"+"<p>"+"<?php echo $property_address ?>"+" "+"<?php echo $property_city ?>"+", "+"<?php echo $property_state ?>"+"</p>"+"<h3>"+"<?php echo $property_phone ?>"+"</h3>";

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

        google.maps.event.addDomListener(window, 'load', initialize);
        google.maps.event.addDomListener(window, 'resize', initialize);
</script>