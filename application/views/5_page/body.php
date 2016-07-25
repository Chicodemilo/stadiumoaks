


<div id="outer_description" class="outer_description" >	
	<div id="inner_description" class="inner_description" >	
		<span id="slogan" class="slogan" style="color:#<?php echo $property_color_1; ?>"><?php echo $property_slogan; ?></span>
		<br>
		<p id="description" class="description" style="color:#<?php echo $property_color_2; ?>"><?php echo $property_description; ?></p>
	</div>
</div>

<script type="text/javascript">
	$(document).ready(function() {

		if($(window).height() < 439){
			$("#inner_description").addClass('inner_description_right');
		}else{
			$("#inner_description").removeClass('inner_description_right');
		}

		$(window).resize(function(event) {
			if($(window).height() < 439){
				$("#inner_description").addClass('inner_description_right');
			}else if ($(window).height() > 440){
				$("#inner_description").removeClass('inner_description_right');
			}
		});
	});
</script>
