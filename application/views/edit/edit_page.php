
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
				<td colspan="5"><input type="text" style="width:90%" name="property_name" id="property_name" placeholder="Enter The Name Of Your Property" maxlength="35" value="<?php echo $main_info[0]['property_name'] ?>"></td>
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
				<td class="righter">Custom Color One:</td>
				<td><input type="color" style="width:90%" name="property_color_1" id="property_color_1" value="#<?php echo $main_info[0]['property_color_1']; ?>"></td>
			
				<td class="righter">Custom Color Two:</td>
				<td><input type="color" style="width:90%" name="property_color_2" id="property_color_2" value="#<?php echo $main_info[0]['property_color_2']; ?>" ></td>
			
				<td class="righter">Custom Color Three:</td>
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
<div class="bottom_room">
	&nbsp;
</div>
<script>
	jQuery(document).ready(function($) {
		 $("#property_color_1, #property_color_2, #property_color_3").spectrum({
	        showInput: true,
	        className: "full-spectrum",
	        showInitial: true,
	        showPalette: true,
	        showSelectionPalette: true,
	        maxSelectionSize: 10,
	        preferredFormat: "hex",
	        localStorageKey: "spectrum.demo",
	        move: function (color) {
	            
	        },
	        show: function () {
	        
	        },
	        beforeShow: function () {
	        
	        },
	        hide: function () {
	        
	        },
	        change: function() {
	            
	        },
	        palette: [
	            ["rgb(0, 0, 0)", "rgb(67, 67, 67)", "rgb(102, 102, 102)",
	            "rgb(204, 204, 204)", "rgb(217, 217, 217)","rgb(255, 255, 255)"],
	            ["rgb(152, 0, 0)", "rgb(255, 0, 0)", "rgb(255, 153, 0)", "rgb(255, 255, 0)", "rgb(0, 255, 0)",
	            "rgb(0, 255, 255)", "rgb(74, 134, 232)", "rgb(0, 0, 255)", "rgb(153, 0, 255)", "rgb(255, 0, 255)"], 
	            ["rgb(230, 184, 175)", "rgb(244, 204, 204)", "rgb(252, 229, 205)", "rgb(255, 242, 204)", "rgb(217, 234, 211)", 
	            "rgb(208, 224, 227)", "rgb(201, 218, 248)", "rgb(207, 226, 243)", "rgb(217, 210, 233)", "rgb(234, 209, 220)", 
	            "rgb(221, 126, 107)", "rgb(234, 153, 153)", "rgb(249, 203, 156)", "rgb(255, 229, 153)", "rgb(182, 215, 168)", 
	            "rgb(162, 196, 201)", "rgb(164, 194, 244)", "rgb(159, 197, 232)", "rgb(180, 167, 214)", "rgb(213, 166, 189)", 
	            "rgb(204, 65, 37)", "rgb(224, 102, 102)", "rgb(246, 178, 107)", "rgb(255, 217, 102)", "rgb(147, 196, 125)", 
	            "rgb(118, 165, 175)", "rgb(109, 158, 235)", "rgb(111, 168, 220)", "rgb(142, 124, 195)", "rgb(194, 123, 160)",
	            "rgb(166, 28, 0)", "rgb(204, 0, 0)", "rgb(230, 145, 56)", "rgb(241, 194, 50)", "rgb(106, 168, 79)",
	            "rgb(69, 129, 142)", "rgb(60, 120, 216)", "rgb(61, 133, 198)", "rgb(103, 78, 167)", "rgb(166, 77, 121)",
	            "rgb(91, 15, 0)", "rgb(102, 0, 0)", "rgb(120, 63, 4)", "rgb(127, 96, 0)", "rgb(39, 78, 19)", 
	            "rgb(12, 52, 61)", "rgb(28, 69, 135)", "rgb(7, 55, 99)", "rgb(32, 18, 77)", "rgb(76, 17, 48)"]
	        ]
	    });
	});
</script>

