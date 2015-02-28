<div class="amenities_wrapper">
	<div class="amenities_box">
		<div class="amenities_head">
			SELECT THE AMENITIES FOR YOUR COMMUNITY
		</div>
		<form action="<?php echo base_url() ?>edit/submit_amenities" method="post">
			<div >
			<table class="amenities_table_head">

				<tr>
					<th style="width: 50%;">Amenity</th>
					<th style="width: 25%;">In Select Units</th>
					<th style="width: 25%;">Additional Fees<br>May Apply</th>
				</tr>
			</table>
			</div>
			<div class="amenities_table">
				<table>
					<?php 

						foreach ($our_amenities_list as $value) {
							if($value['active'] == 'Y'){
								$active_checked = 'checked';
							}else{$active_checked = '';}

							if($value['select_units'] == 'Y'){
								$select_units_checked = 'checked';
							}else{$select_units_checked = '';}

							if($value['extra_fees'] == 'Y'){
								$fees_checked = 'checked';
							}else{$fees_checked = '';}


							echo '<input type="hidden" value="'.$value['id'].'" name="'.$value['id'].'[id]" id="id">';
							echo '<tr><td style="width: 50%;">';	
							echo '<input type="hidden" name="'.$value['id'].'[active]" value="N">';
							echo '<input type="checkbox" '.$active_checked.' value="Y" name="'.$value['id'].'[active]" id="active">&nbsp;';
							echo '<input type="hidden" value="'.$value['name'].'" name="'.$value['id'].'[name]" id="id">';
							echo $value['name'];
							echo '</td><td style="width: 25%;">';
							echo '<input type="hidden" name="'.$value['id'].'[select_units]" value="N">';
							echo '<input type="checkbox" '.$select_units_checked.' value="Y" name="'.$value['id'].'[select_units]" id="select_units">&nbsp;';
							echo '</td><td style="width: 25%;">';
							echo '<input type="hidden" name="'.$value['id'].'[extra_fees]" value="N">';
							echo '<input type="checkbox" '.$fees_checked.' value="Y" name="'.$value['id'].'[extra_fees]" id="extra_fees">&nbsp;';
							echo '</td></tr>';

						}



					 ?>
				</table>
			</div>	
			
			<div class="amenities_submit">
				<input type="submit">
			</div>
		</form>
	</div>
	<div class="their_amenities_box_maker">
		<div class="their_amenities_head_maker">
			MAKE A CUSTOM AMENITY
		</div>
			<form action="create_their_amenities" method="post">
				<table class="their_amenities_table_maker">
				
				<tr>
					<td>
						<input type="text" name="name" placeholder="Enter A Custom Amenity.  30 Characters Max." maxlength="30" style="width: 90%;"> 
						<input type="hidden" name="active" value="Y">
				</tr>
				</table>
				<div class="their_amenities_submit_maker">
					<input type="submit" value="Submit" >
					
				</div>
			</form>
	</div>
<?php
	if(count($their_amenities_list) >= 1){ 
		
		echo '<div class="their_amenities_box">
				<div class="their_amenities_head">
					EDIT YOUR CUSTOM AMENITIES
				</div>
				<form action="'.base_url().'edit/submit_their_amenities" method="post">
					<div class="their_amenities_table_head">
						<table>
							<tr>
								<th style="width: 50%;">Amenity</th>
								<th style="width: 25%;">In Select Units</th>
								<th style="width: 25%;">Additional Fees<br>May Apply</th>
							</tr>
						</table>
					</div>
					<div class="their_amenities_table">
						<table>';}
					
						

						foreach ($their_amenities_list as $value) {
							if($value['active'] == 'Y'){
								$their_active_checked = 'checked';
							}else{$their_active_checked = '';}

							if($value['select_units'] == 'Y'){
								$their_select_units_checked = 'checked';
							}else{$their_select_units_checked = '';}

							if($value['extra_fees'] == 'Y'){
								$their_fees_checked = 'checked';
							}else{$their_fees_checked = '';}


							echo '<input type="hidden" value="'.$value['id'].'" name="'.$value['id'].'[id]" id="id">';
							echo '<tr><td style="width: 50%;">';	
							echo '<input type="hidden" name="'.$value['id'].'[active]" value="N">';
							echo '<input type="checkbox" '.$their_active_checked.' value="Y" name="'.$value['id'].'[active]" id="active">&nbsp;';
							echo '<input type="hidden" value="'.$value['name'].'" name="'.$value['id'].'[name]" id="id">';
							echo $value['name'];
							echo '<a href="'.base_url().'edit/delete_amenity/'.$value['id'].'" class="link_small" style="float: right;">delete</a>';
							echo '</td><td style="width: 25%;">';
							echo '<input type="hidden" name="'.$value['id'].'[select_units]" value="N">';
							echo '<input type="checkbox" '.$their_select_units_checked.' value="Y" name="'.$value['id'].'[select_units]" id="select_units">&nbsp;';
							echo '</td><td style="width: 25%;">';
							echo '<input type="hidden" name="'.$value['id'].'[extra_fees]" value="N">';
							echo '<input type="checkbox" '.$their_fees_checked.' value="Y" name="'.$value['id'].'[extra_fees]" id="extra_fees">&nbsp;';
							echo '</td></tr>';
						}

	if(count($their_amenities_list) >= 1){ 				
			echo			'</table>
					</div>
					<div class="their_amenities_submit">
						<input type="submit" value="Submit" >
					</div>
				</form>
				
			</div>'; 
	}
?>
</div>



