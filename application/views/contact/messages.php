<table class='message_head'>
	<tr class='message_head'>
		<th colspan='7'>YOUR MESSAGES</th>
	</tr>
	<tr class='message_head'>
		<td width='10%'>DATE & TIME</td>
		<td width='10%'>EMAIL</td>
		<td width='10%'>FIRST<br>NAME</td>
		<td width='10%'>LAST<br>NAME</td>
		<td width='10%'>PHONE</td>
		<td width='40%'>MESSAGE</td>
		<td width='10%'>DELETE</td>
	</tr>
</table>
<div class='message_table'>
	<table>
		<?php 
			foreach ($messages as $key => $value) {
				echo "<tr><td width='10%'>DATE & TIME</td>
					<td width='10%'>EMAIL</td>
					<td width='10%'>FIRST<br>NAME</td>
					<td width='10%'>LAST<br>NAME</td>
					<td width='10%'>PHONE</td>
					<td width='40%'>MESSAGE</td>
					<td width='10%'>DELETE</td></tr>";			}
		 ?>
	</table>
</div>
