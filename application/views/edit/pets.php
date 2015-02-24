<div class="hours_box">
		<div class="hours_head">
			ENTER THE OFFICE HOURS FOR YOUR COMMUNITY
		</div>
		<form action="<?php echo base_url() ?>edit/submit_pets" method="post">
			<div class="hours_table">
			<table>
				<tr>
					<th>Pet Policy</th>
					<th>Pet Deposit</th>
					<th>Refund</th>
					<th>Restrictions</th>
				</tr>
				<tr>
					<td><select name="type" id="type">
						<option value="No Pets">No Pets</option>
						<option value=""></option>
						<option value=""></option>
						<option value=""></option>
						<option value=""></option>
						<option value=""></option>
						<option value=""></option>
						<option value=""></option>
						<option value=""></option>
					</select></td>
					<td>
						$ <input type="number" name="pet_deposit" id="pet_deposit">
					</td>
					<td>
						$ <input type="number" name="pet_deposit_refundable" id="pet_deposit_refundable">
					</td>
					<td>
						<textarea name="restrictions" id="restrictions" cols="50" rows="4" placeholder="Enter Any Conditions Or Special Requirements" maxlength="150"></textarea>
					</td>
			</table>
			</div>
			<div class="pet_submit">
				<input type="submit">
			</div>
		</form>
		<div class="hours_table_b_div">
			<table class="hours_table_b">
			
			<?php 
			// if(count($office_hours) >= 1){
			// 	echo "<th colspan='5'>YOUR HOURS</th>";
			// }
			// foreach ($office_hours as $key => $value) {
			// 	if($value['open_min'] == 0){
			// 		$value['open_min'] = "00";
			// 	}

			// 	if($value['close_min'] == 0){
			// 		$value['close_min'] = "00";
			// 	}

			// 	echo "<tr>";
			// 	echo "<td>".$value['day_type']."</td>";
			// 	echo "<td>".$value['open_hour'].":".$value['open_min']." ".$value['open_am_pm']."</td>";
			// 	echo "<td>".$value['close_hour'].":".$value['close_min']." ".$value['close_am_pm']."</td>";
			// 	echo "<td>".$value['day_condition']."</td>";
			// 	echo "<td><a href='".base_url()."edit/delete_hours/".$value['id']."'>delete</a></td>";
			// 	echo "</tr>";
			// }
			?>
			</table>
		</div>

	</div>



	</div>