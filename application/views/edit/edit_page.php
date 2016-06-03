
	<form action="<?php echo base_url(); ?>edit/submit_main_edits" method="post">
		<input type="hidden" name="id" id="id" value="<?php echo $main_info[0]['id'] ?>">
		<table>
			<tr>
				<th colspan="6">
					MAIN INFORMATION :: <?php echo $main_info[0]['property_name'] ?>
				</th> 
			</tr>
			<tr>
				<td class="righter" width="20%">Name:</td>
				<td colspan="5"><input type="text" style="width:90%" name="property_name" id="property_name" placeholder="Enter The Name Of Your Property" maxlength="26" value="<?php echo $main_info[0]['property_name'] ?>"></td>
			</tr>
			<tr>
				<td class="righter">Phone Number:</td>
				<td colspan="2"><input type="text" style="width:90%" name="property_phone" id="property_phone" placeholder="Enter The Main Phone Number. Ex: (325) 340-9310" value="<?php echo $main_info[0]['property_phone'] ?>"></td>

				<td class="righter">Street Address:</td>
				<td colspan="2"><input type="text" style="width:90%" name="property_address" id="property_address" placeholder="Enter The Street Address" value="<?php echo $main_info[0]['property_address'] ?>"></td>
			</tr>
			<tr>
				<td class="righter">City:</td>
				<td><input type="text" style="width:90%" name="property_city" id="property_city" placeholder="Enter The City" value="<?php echo $main_info[0]['property_city'] ?>"></td>
			
				<td class="righter">State:</td>
				<td><input type="text" style="width:90%" name="property_state" id="property_state" placeholder="Enter The State" value="<?php echo $main_info[0]['property_state'] ?>" maxlength="2" ></td>
			
				<td class="righter">Zip Code:</td>
				<td><input type="text" style="width:90%" name="property_zip" id="property_zip" placeholder="Enter The Zip Code" value="<?php echo $main_info[0]['property_zip'] ?>"></td>
			</tr>
			<th colspan="6"></th>
			<tr>
				<td class="righter">Contact Email Address:</td>
				<td colspan="2"><input type="email" style="width:90%" name="property_email" id="property_email" placeholder="Main Email Address" value="<?php echo $main_info[0]['property_email'] ?>"></td>
			
				<td class="righter">Website:</td>
				<td colspan="2"><input type="text" style="width:90%" name="property_website" id="property_website" placeholder="www.example.com" value="<?php echo $main_info[0]['property_website'] ?>"></td>
			</tr>
			<tr>
				<td class="righter">Property Afterhours<br>Emergency Number:</td>
				<td colspan="2"><input type="text" style="width:90%" name="property_emergency_phone" id="property_emergency_phone" placeholder="After Hours Emergency Number" value="<?php echo $main_info[0]['property_emergency_phone'] ?>"></td>
			
				<td class="righter"></td>
				<td colspan="2"></td>
			</tr>
			<tr>
				<td class="righter">Slogan:</td>
				<td colspan="2"> <textarea name="property_slogan" cols="60" rows="4" id="property_slogan" maxlength='125' placeholder="Enter A Short Slogan For Your Property. 125 Characters Max."><?php echo $main_info[0]['property_slogan'] ?></textarea></td>
			
				<td class="righter">Property Description:</td>
				<td colspan="2"><textarea name="property_description" cols="60" rows="4"  id="property_description" maxlength='400' placeholder="Enter A Short Description Of Your Property. 400 Characters Max."><?php echo $main_info[0]['property_description'] ?></textarea></td>
			</tr>
			<tr>
				<td class="righter">Amenities Page Text:</td>
				<td colspan="2"><textarea name="property_amenities_text" cols="60" rows="4"  id="property_amenities_text" maxlength='400' placeholder="Enter Text That Will Go On The Amenities Page. 400 Characters Max."><?php echo $main_info[0]['property_amenities_text'] ?></textarea></td>
			
				<td class="righter">Picture Page Text:</td>
				<td colspan="2"><textarea name="property_pictures_text" cols="60" rows="4"  id="property_pictures_text" maxlength='400' placeholder="Enter Text That Will Go On The Picture Page. 400 Characters Max."><?php echo $main_info[0]['property_pictures_text'] ?></textarea></td>
			</tr>
			<th colspan="6"></th>
			<!-- <tr>
				<td class="righter">Main Logo:</td>
				<td colspan="5">Font:
					<select name="property_name_font " id="property_name_font">
						<option value="palatino">Palatino</option>
						<option value="times">Times</option>
						<option value="arial">Arial</option>
						<option value="impact">Impact</option>
						<option value="lucida">Lucida</option>
					</select>&nbsp;&nbsp;&nbsp;
				Bold:
				<input type="checkbox" name="property_name_font_bold" id="property_name_font_bold" value="Y">&nbsp;&nbsp;&nbsp;
				Italic:
				<input type="checkbox" name="property_name_font_italic" id="property_name_font_italic" value="Y">&nbsp;&nbsp;&nbsp;
				Letter Spacing:
				<select name="property_name_font_space" id="property_name_font_space">
					<option value="small">Small</option>
					<option value="medium">Medium</option>
					<option value="large">Large</option>
				</select>
				</td>
			</tr> -->
			<tr>
				<td class="righter">Color 1:</td>
				<td><input type="color" style="width:90%" name="property_color_1" id="property_color_1" value="#<?php echo $main_info[0]['property_color_1']; ?>"></td>
			
				<td class="righter">Color 2:</td>
				<td><input type="color" style="width:90%" name="property_color_2" id="property_color_2" value="#<?php echo $main_info[0]['property_color_2']; ?>" ></td>
			
				<td class="righter">Color 3:</td>
				<td><input type="color" style="width:90%" name="property_color_3" id="property_color_3" value="#<?php echo $main_info[0]['property_color_3']; ?>"></td>
			</tr>
			<th colspan="6"></th>
			<tr>
				<td class="righter">Facebook Page Address:</td>
				<td colspan="2"><input type="text" style="width:90%" name="property_facebook" id="property_facebook" placeholder="www.facebook.com/example" value="<?php echo $main_info[0]['property_facebook'] ?>"></td>
			
				<td class="righter">Twitter Address:</td>
				<td colspan="2"><input type="text" style="width:90%" name="property_twitter" id="property_twitter" placeholder="www.twitter.com/example" value="<?php echo $main_info[0]['property_twitter'] ?>"></td>
			</tr>
			<tr>
				<td class="righter">Instagram Page Address:</td>
				<td colspan="2"><input type="text" style="width:90%" name="property_instagram" id="property_instagram" placeholder="www.instagram.com/example" value="<?php echo $main_info[0]['property_instagram'] ?>"></td>
			
				<td class="righter">Google Plus Page:</td>
				<td colspan="2"><input type="text" style="width:90%" name="property_google_plus" id="property_google_plus" placeholder="www.plus.google.com/" value="<?php echo $main_info[0]['property_google_plus'] ?>"></td>
			</tr>
			<tr>
				<td class="righter">Manangement Company Name:</td>
				<td colspan="2"><input type="text" style="width:90%" name="property_management_name" id="property_management_name" placeholder="The Name Of The Property Management Company" value="<?php echo $main_info[0]['property_management_name'] ?>"></td>
			
				<td class="righter">Management Company Website:</td>
				<td colspan="2"><input type="text" style="width:90%" name="property_management_url" id="property_management_url" placeholder="www.example.com" value="<?php echo $main_info[0]['property_management_url'] ?>"></td>
			</tr>
			<tr>
				<th colspan="6"><input type="submit" value="Submit Edits"></th>
			</tr>
		</table>
	</form>
<div class"bottom_room">
	&nbsp;
</div>


