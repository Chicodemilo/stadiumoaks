<div class="center_box" >

	<div id="slider">
        <ul class="slides">
			<?php 
				foreach ($pic_data[pictures] as $key => $value) {
					echo "<li class='slide'>";
					echo "<img src='".base_url()."images/pictures/".$value['id']."/".$value['name']."' alt='".$value['caption']."'>";
					echo "</li>";
				}

				echo "<li class='slide'>";
				echo "<img src='".base_url()."images/pictures/".$pic_data[pictures][0]['id']."/".$pic_data[pictures][0]['name']."' alt='".$pic_data[pictures][0]['caption']."'>";
				echo "</li>";
				

			?>
        </ul>
    </div>


	<div id="outer_description" class="outer_description" >	
		<div id="inner_description" class="inner_description" >	
			<span id="slogan" class="slogan" ><?php echo $property_slogan; ?></span>
			
			<span id="description" class="description"><?php echo $property_description; ?></span>
		</div>
	</div>

	<div class="main_page_links" style="background:#<?php echo $property_color_2 ?>">
		<div class="main_page_amen">
			<a href="<?php echo base_url() ?>home/amenities">
				<div class="box_links">AMENITIES</div>
			</a>
			<?php
				if($amen_pic['amen_pic_id'] != ""){
					echo "<a href='".base_url()."home/amenities'>";
					echo "<div class='box_amen_pic'>";
					echo "<img id='box_amen_img' src='".base_url()."images/pictures/".$amen_pic['amen_pic_id']."/".$amen_pic['amen_pic_name']."'>";
					echo "</div>";
					echo "</a>";
				}
			 ?>
			
		</div>
		<div class="main_page_pics">
			<a href="<?php echo base_url() ?>home/pictures">
				<div class="box_links">PICTURES</div>
			</a>
			<?php
				if($pic_data['main_pic_id'] != ""){
					echo "<a href='".base_url()."home/pictures'>";
					echo "<div class='box_pic_pic'>";
					echo "<img id='box_pic_img' src='".base_url()."images/pictures/".$pic_data['main_pic_id']."/".$pic_data['main_pic_name']."'>";
					echo "</div>";
					echo "</a>";
				}
			 ?>
			
		</div>
		<div class="main_page_floorplans">
			<a href="<?php echo base_url() ?>home/floorplans">
				<div class="box_links">FLOORPLANS &amp; PRICES</div>
			</a>
			<?php
				if($fp_pic['fp_pic_id'] != ""){
					echo "<a href='".base_url()."home/floorplans'>";
					echo "<div class='box_pic_pic'>";
					if($fp_pic['use_the_main_pic'] === 'N'){
						echo "<img id='box_fp_img' src='".base_url()."images/floorplans/".$fp_pic['fp_pic_id']."/".$fp_pic['fp_pic_name']."'>";
					}else{
						echo "<img id='box_fp_img' src='".base_url()."images/pictures/".$fp_pic['fp_pic_id']."/".$fp_pic['fp_pic_name']."'>";
					}
					echo "</div>";
					echo "</a>";
				}
			 ?>
		</div>
	</div>

	<div id="map-canvas-main">
		
	</div>

	<div id="map-canvas-main-mobile">
		
	</div>

	<div class="under_map">
	</div>

</div>


<script type="text/javascript" >
    $(document).ready(function() {

	
	$(function() {

	    //settings for slider
	    var width = 1100;
	    var animationSpeed = 3000;
	    var pause = 9000;
	    var currentSlide = 1;


	    //cache DOM elements
	    var $slider = $('#slider');
	    var $slideContainer = $('.slides', $slider);
	    var $slides = $('.slide', $slider);
		var big_width = 1100 * ($slides.length + 2);
		$(".slides").width(big_width);
	    var interval;

	    function startSlider() {
	        interval = setInterval(function() {
	            $slideContainer.animate({'margin-left': '-='+width}, animationSpeed, function() {
	                if (++currentSlide === $slides.length) {
	                    currentSlide = 1;
	                    $slideContainer.css('margin-left', 0);
	                }
	            });
	        }, pause);
	    }
	    function pauseSlider() {
	        clearInterval(interval);
	    }

	    $slideContainer
	        .on('mouseenter', pauseSlider)
	        .on('mouseleave', startSlider);

	    startSlider();


	});




    });
</script>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
<script>
        
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