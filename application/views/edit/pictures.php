<?php 
foreach ($pictures as $key => $value) {
	echo "<div id='".$value['name']."' class='picture_box'>";
	echo "<img src='".base_url()."images/pictures/".$value['name']."' alt='".$value['caption']."'>";
	echo "<hr>";
	echo $value['caption'];
	echo "<hr>";

	echo "</div>";
}







 ?>

<table>
	<tr>
		<td width="33%"><a href="<?php echo base_url(); ?>edit/picture_upload">Upload A Proberty Picture</a></td>
		<td width="33%"><a href="<?php echo base_url(); ?>edit/logo_upload">Upload A Property Logo</a></td>
		<td width="34%"><a href="<?php echo base_url(); ?>edit/picture_upload">Upload A Management Company Logo</a></td>
		
	</tr>
</table>