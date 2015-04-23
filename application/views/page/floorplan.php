<div id="floorplan_big_box" class="floorplan_big_box">

<?php 
	foreach ($floorplans as $value) {
		echo "<div class='inner_floorplan_box'>
				<div class='floorplan_pic'>
					<img src='".base_url()."images/floorplans/".$value['id']."/".$value['floorplan_pic']."' alt='".$value['floorplan_pic']."'>
				</div>
				<div class='floorplan_info'>
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

		echo "		<tr>
						<td class='floorplan_text'>Bedrooms: ".$value['bedroom']."</td>
						<td class='floorplan_text'>Baththroom: ".$value['bedroom']."</td>
						<td class='floorplan_text'>Square Feet: ".$value['square_footage']."</td>
					</tr>
					<tr>
						<td class='floorplan_text'>Rent: $".$value['rent']."</td>
						<td class='floorplan_text'>Deposit: $".$value['deposit']."</td>
						
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
				</div>
			</div>";
	}
 ?>

</div>

