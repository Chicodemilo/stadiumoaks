<div id='amenities_big_box' class='amenities_big_box'>
<div class='inner_amenities_box'>
	<?php 
		if(count($amenities) > 1){
			echo "<div class='amenities_list'>";
			echo "<span class='amenities_title'>Amenities At<br>".$property_name."</span><hr>";
			

			echo "<ul>";
			$show_select = 'N';
			foreach ($amenities as $value) {
				echo "<li>".$value['name'];
				if($value['select_units'] == 'Y'){
					echo " *";
					$show_select = 'Y';
				}
				if($value['extra_fees'] == 'Y'){
					echo " <span class='super'>&#8225;</span>";
					$show_select = 'Y';
				}
				echo "</li>";
			}
			echo "</ul>";
			if($show_select == 'Y'){
					echo "<hr>";
					echo "* <span class='amenities_pet_small'>In Select Units<br>&#8225; Additional Fees May Apply</span>";
				}
			
			echo "</div>";
		}
	 ?>

	<?php 
		if($property_amenities_text != ''){
			echo "<div class='amenities_text'>
					".$property_amenities_text."
				</div>";
		}
	 ?>
	<div class='amenities_pic'>
		<img src='<?php echo base_url(); ?>images/pictures/<?php echo $pic_id; ?>/<?php echo $pic_name; ?>' alt='<?php echo $pic_name; ?>'>
	</div>
	<?php 
		if($pet_type != ''){
			echo "<div class='amenities_pet'>";
			echo $pet_type;
			if($pet_deposit > 0){
				echo "<hr><span class='amenities_pet_small'>Pet Deposit: $".$pet_deposit;
				echo "<br>Possible Refund On Deposit: $".$pet_deposit_refundable."</span>";
			}
			if($pet_restrictions != ''){
			echo "<hr><span class='amenities_pet_xsmall'>".$pet_restrictions."</span>";
			}
			echo "</div>";
		}
	 ?>
	 
</div>
</div>