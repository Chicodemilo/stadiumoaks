<div class="center_box">
	<div id="floorplan_big_box" class="floorplan_big_box">

	<?php 
		foreach ($floorplans as $value) {
			echo "<div class='inner_floorplan_box'>";

			echo "<div class='floorplan_info'>
				 <table>";
				 
			if($value['name'] != ''){
				echo 	"<tr>
							<td colspan='3' class='floorplan_name'>".$value['name']."</td>
						</tr>";
			}
			if($value['description'] != ''){
				echo 	"<tr>
							<td colspan='3' class='floorplan_text'>".$value['description']."</td>
						</tr>";
			}
			$value['bathroom'] = number_format($value['bathroom'], 1);
			for ($i=1; $i <= $value['bathroom']; $i++) { 
				$tester = $value['bathroom'] - $i;
				if($tester < 0.5){
					$value['bathroom'] = number_format($value['bathroom']);
				}
			}


			echo "		<tr>
							<td class='floorplan_text'>Bedrooms: ".$value['bedroom']."</td>
							<td class='floorplan_text'>Baththroom: ".$value['bathroom']."</td>
							<td class='floorplan_text'>Square Feet: ".$value['square_footage']."</td>
						</tr>
						<tr>
							<td class='floorplan_text'>Rent: $".$value['rent']."</td>
							<td class='floorplan_text'>Deposit: $".$value['deposit']."</td>
							<td></td>
						</tr>
						";
							
			if($value['is_availble'] = 'Y' && $value['units_available'] > 0)
				echo 	"<tr>
							<td colspan='3' class='floorplan_text'>Units Available: ".$value['units_available']."</td>
						</tr>";
							
			echo			"<tr>
								<td colspan='3' class='body_link'><a href='".base_url()."home/contact' class='body_link'>Contact Us About This Unit</a></td>
							</tr>
						</table>
					</div>";


			echo "<div class='floorplan_pic'>";

			if($value['floorplan_pic'] != ""){
				echo "<img src='".base_url()."images/floorplans/".$value['id']."/".$value['floorplan_pic']."' alt='".$value['floorplan_pic']."'>";
			}else{
				echo "";
			}
						
			echo "</div>";

			echo "</div>";
		}
	 ?>
	 <div class="mobile_floorplan_bottom">
	 	&nbsp;
	 </div>

	</div>
	<div class="under_pic_box_content_pages" style="background:#<?php echo $property_color_1;?>;">
	</div>
	<div class="content_pages_lower" style="background:#<?php echo $property_color_3;?>;">
	</div>
</div>