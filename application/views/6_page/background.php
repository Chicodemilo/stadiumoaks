<div class="slider_expander">
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
</div>
<div class="background_fade">
	<div id="name_slogan" class="name_slogan" >	
		<div id="upper_name" class="upper_name" style="color:#<?php echo $property_color_1; ?>">	
			<?php 

			$exp_name = explode(' ', $property_name);
			$yes_the = "N";
			foreach ($exp_name as $key => $value) {
				if($value == "The" || $value == "the" || $value == "THE"){
					echo "<span class='the' style='color:#C6C6C6;'>".$value."</span><br>";
					$yes_the = "Y";
				}else{
					if($value == "Apartment" || $value == "apartment" || $value == "APARTMENT" || $value == "Apartments" || $value == "apartments" || $value == "APARTMENTS" || $value == "Apts" || $value == "apts" || $value == "APTS"|| $value == "Townhomes" || $value == "townhomes" || $value == "TOWNHOMES"){
						if($yes_the == "N"){
							echo "<br>";
						}
						echo "<span class='apt_word' style='color:#C6C6C6;'>".$value."</span>";
						if($key < count($exp_name)-1){
							echo "<br>";
						}
					}else{
						echo "<span class='name_parts'>".$value."</span> ";
					}
				}
			}


			?>
		</div>
		<div id="slogan" class="slogan" >	
			<?php echo $property_slogan; ?>
		</div>
	</div>
	<div class="background_gradient">
	</div>
	<div class="header_main_pic_mob">
					<?php 
						echo "<img src='".base_url()."images/pictures/".$pic_data['main_pic_id']."/".$pic_data['main_pic_name']."' alt='".$pic_data['main_pic_name']."'>";
					?>
	</div>
</div>



    