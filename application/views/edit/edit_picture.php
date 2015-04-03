
	<form action="<?php echo base_url(); ?>edit/submit_picture_edits/<?php echo $picture[0]['id']; ?>" method="post">
		<input type="hidden" name="id" id="id" value="<?php echo $picture[0]['id'] ?>">
		<table id="user_edit">
			<tr>
				<th colspan="2">
					PICTURE INFORMATION :: <?php echo $picture[0]['name']; ?>
				</th> 
			</tr>
			<tr>
				<td colspan="2"><img src="<?php echo base_url(); ?>images/pictures/<?php echo $picture[0]['id']; ?>/<?php echo $picture[0]['name']; ?>" alt="<?php echo $picture[0]['caption']; ?>" width="100%"></td>
			</tr>
			<tr>
				<td class="righter">Descripton:</td>
				<td><textarea  name="username" id="username" style="width:90%;"placeholder="Enter A Picture Caption. 120 Character Max " maxlength="120" rows="3" value="<?php echo $picture[0]['caption'] ?>"></textarea></td>
			</tr>
			<tr><th colspan="2"></th></tr>

		</table>
		<table style="width:600px; margin:auto;">
			<tr>
				<td class="righter_light">Cover Pic:</td>
				<td>
					<select name="cover_pic" id="cover_pic">
						<option value="Y">Yes</option>
						<option value="N">No</option>
					</select>
				</td>
				<td class="righter_light">Amenities Page Main Pic:</td>
				<td>
					<select name="amenities_page_main_pic" id="amenities_page_main_pic">
						<option value="Y">Yes</option>
						<option value="N">No</option>
					</select>
				</td>
				<td class="righter_light">Picture Page Main Pic</td>
				<td>
					<select name="picture_page_main_pic" id="picture_page_main_pic">
						<option value="Y">Yes</option>
						<option value="N">No</option>
					</select>
				</td>
			</tr>
			<tr>
				<th colspan="8"></th>
			</tr>
			<tr>
				<td class="righter_light">Active:</td>
				<td colspan="2">
					<select name="active" id="active">
						<option value="Y">Yes</option>
						<option value="N">No</option>
					</select>
				</td><td class="righter_light">Order:</td>
				<td colspan="2">
					<select name="active" id="active">
						<option value="1">Start Of List</option>
						<option value="2">After Pic 1</option>
						<option value="3">After Pic 2</option>
						<option value="4">After Pic 3</option>
						<option value="5">After Pic 4</option>
					</select>
				</td>
			</tr>
			<tr>
				<th colspan="6"></th>
			</tr>
			<tr>
				<td colspan="6"><input type="submit" value="Submit Edits"></td>
			</tr>
		</table>
	</form>


	<script type="text/javascript">
		$(document).ready(function() {
			// window.alert('hello cleveland');
			// $('#get_site_notify option[value="<?php echo $user[0]["get_site_notify"]; ?>"]').prop('selected',true);
			// $('#get_messages option[value="<?php echo $user[0]["get_messages"]; ?>"]').prop('selected',true);
			// $('#get_maint option[value="<?php echo $user[0]["get_maint"]; ?>"]').prop('selected',true);
			// $('#get_pre_ap option[value="<?php echo $user[0]["get_pre_ap"]; ?>"]').prop('selected',true);
			// $('#verified option[value="<?php echo $user[0]["verified"]; ?>"]').prop('selected',true);
		});
	</script>