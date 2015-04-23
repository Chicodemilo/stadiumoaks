<?php 
foreach ($pictures as $key => $value) {
	echo "<div id='".$value['name']."' class='picture_box'>";
	echo "<img src='".base_url()."images/pictures/".$value['id']."/".$value['name']."' alt='".$value['caption']."'>";
	echo "<hr>";
	echo $value['caption'];
	echo "<hr>";
	echo "<table>
			<tr>
				<td width='50%'>Active: <span class='bold'>".$value['active']."</span></td><td width='50%'>Order: <span class='bold'>".$value['pic_order']."</span></td>
			</tr>
			<tr>
				<td colspan='2'>Cover Pic: <span class='bold'>".$value['cover_pic']."</span></td>
			</tr>
			<tr>
				<td width='50%'>Amen Page Main: <span class='bold'>".$value['amenities_page_main_pic']."</span></td><td width='50%'>Pic Page Main: <span class='bold'>".$value['picture_page_main_pic']."</span></td>
			</tr>
		</table>";
	echo "<hr>";
	echo "<a href='".base_url()."edit/picture_edit/".$value['id']."' class='not_fancy_dark'>EDIT</a><br><br>";
	echo "<a href='".base_url()."edit/picture_delete/".$value['id']."' class='not_fancy_dark'>DELETE</a>";
	echo "</div>";
}

foreach ($logo as $key => $value) {
	echo "<div id='".$value['name']."' class='logo_box'>";
	echo "PROPERTY LOGO<hr>";
	echo "<img src='".base_url()."images/logos/property/".$value['name']."' alt='".$value['caption']."'>";
	echo "<hr>";
	echo "<a href='".base_url()."edit/logo_delete/".$value['id']."' class='not_fancy_dark'>DELETE</a>";
	echo "<hr>";
	echo "The best file format to use for a logo is a PNG.<br><br>To look the best it needs to be high resolution - at least 300dpi. It should also have a transparent background - which you can have with a PNG but not a JPG.<br><br>If you need help please contact us.";
	echo "</div>";
}


foreach ($man_logo as $key => $value) {
	echo "<div id='".$value['name']."' class='logo_box'>";
	echo "MANAGEMENT COMPANY LOGO<hr>";
	echo "<img src='".base_url()."images/logos/management/".$value['name']."' alt='".$value['caption']."'>";
	echo "<hr>";
	echo "<a href='".base_url()."edit/man_logo_delete/".$value['id']."' class='not_fancy_dark'>DELETE</a>";
	echo "<hr>";
	echo "The best file format to use for a logo is a PNG.<br><br>To look the best it needs to be high resolution - at least 300dpi. It should also have a transparent background - which you can have with a PNG but not a JPG.<br><br>If you need help please contact us.";
	echo "</div>";
}
 ?>

<table>
	<tr>
		<td width="33%"><a href="<?php echo base_url(); ?>edit/picture_upload">Upload A Property Picture</a></td>
		<td width="33%"><a href="<?php echo base_url(); ?>edit/logo_upload">Upload A Property Logo</a></td>
		<td width="34%"><a href="<?php echo base_url(); ?>edit/man_logo_upload">Upload A Management Company Logo</a></td>
		
	</tr>
</table>