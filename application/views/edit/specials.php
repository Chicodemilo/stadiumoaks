<div class="hours_box">
		<div class="hours_head">
			ENTER YOUR CURRENT SPECIAL
		</div>
		<form action="<?php echo base_url() ?>edit/submit_pets" method="post">
			<div class="hours_table">
			<table>
				<tr>
					<th>Title</th>
					<th>Descripton</th>
					<th>Start Date</th>
					<th>End Date</th>
				</tr>

				<tr>
					<td>
						<input type="text" name="title" id="title" maxlength="40">
					</td>
					<td>
						<textarea name="description" id="description" cols="40" rows="4" placeholder="Enter terms of this special" maxlength="300"></textarea>
					</td>

					<td>
						<input type="date" name="start" id="start">
					</td>
					<td>
						<input type="date" name="end" id="end">
					</td>
				<tr>
					<th>Condition 1</th>
					<th>Condition 2</th>
					<th colspan="2">Custom Condition</th>
				</tr>
				<tr>
					<td>
						<select name="condition_1" id="condition_1">
							<option value="*In Select Units">*In Select Units</option>
							<option value="*New Residents Only">*New Residents Only</option>
							<option value="*Year Lease Required">*Year Lease Required</option>
						</select>
					</td>
					<td></td>
					<td colspan="2"></td>
				</tr>
			</table>
			</div>
			<div class="specials_submit">
				<input type="submit"> <span class="smaller"> &#8226; Submiting a new special will over-write the current one.</span>
			</div>
		</form>
		<div class="hours_table_b_div">
			<table class="hours_table_b">
			
			<?php 
			// if(count($pets) >= 1){
			// 	echo "<th colspan='5'>YOUR CURRENT PET POLICY</th>";
			// 	echo "<tr><th>Pet Policy</th><th>Pet Deposit</th><th>Refund</th><th style='width:50%;'>Restrictions</th></tr>";
			// }
			// foreach ($pets as $key => $value) {
				

			// 	echo "<tr>";
			// 	echo "<td>".$value['type']."</td>";
			// 	echo "<td>$".$value['pet_deposit']."</td>";
			// 	echo "<td>$".$value['pet_deposit_refundable']."</td>";
			// 	echo "<td>".$value['restrictions']."</td>";
				
			// 	echo "</tr>";
			// }
			?>
			</table>
		</div>

	</div>



	</div>