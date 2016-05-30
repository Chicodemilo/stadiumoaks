
<div class="logo_box">
	<?php 
		if($logo_name != 'N'){
			echo "<img id='logo' src='".base_url()."images/logos/property/".$logo_name."' alt='".$logo_name."'>";
		}else{
			echo "<span class='no_logo_header' style='color:#".$property_color_2."'>".$property_name."</span>";
		}
	 ?>
</div>
<div id="outer_description" class="outer_description" >	
	<div id="inner_description" class="inner_description" >	
		<span id="slogan" class="slogan" style="color:#<?php echo $property_color_2 ?>"><?php echo $property_slogan; ?></span>
		<br>
		<p id="description" class="description"><?php echo $property_description; ?></p>
	</div>
</div>
