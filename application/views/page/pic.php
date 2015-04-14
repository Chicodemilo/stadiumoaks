
<div class="big_pic_box">
	<div class="pic_main_text" style="color:#<?php echo $property_color_2; ?>;">
		<?php echo $property_pictures_text; ?>
	</div>
	<div class="all_pics">
		<?php 
			foreach ($pictures as $value) {
				echo "<div class='not_seen_pic_box'>";
				echo "<div class='small_pic_box'>";
				echo "<img src='".base_url()."images/pictures/".$value['id']."/".$value['name']."' alt'".$value['caption']."'>";
				echo "</div>";
				echo "</div>";
			}



		 ?>
	</div>
</div>

