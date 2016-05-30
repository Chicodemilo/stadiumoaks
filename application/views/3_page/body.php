<div class="background_fade">

</div>
	<div class="logo_box">
		<?php 
			if($logo_name != 'N'){
				echo "<img id='logo' src='".base_url()."images/logos/property/".$logo_name."' alt='".$logo_name."'>";
			}else{
				echo "<span class='no_logo_header' style='color:#".$property_color_2."'>".$property_name."</span>";
			}
		 ?>
	</div>
	
			<div id="slogan" class="slogan" style="color:white"><?php echo $property_slogan; ?></div>
			<p id="description" class="description"><?php echo $property_description; ?></p>
