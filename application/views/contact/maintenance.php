<div class='message_head'>
	<table>
		<tr>
			<th colspan='7'>YOUR MAINTENANCE REQUESTS</th>
		</tr>
		<tr>
			<th width='10%'>DATE & TIME</th>
			<th width='20%'>EMAIL</th>
			<th width='10%'>NAME</th>
			<th width='5%'>UNIT</th>
			<th width='10%'>PHONE</th>
			<th width='35%'>MESSAGE</th>
			<th width='10%'>DELETE</th>
		</tr>
	</table>
</div>
<div class="message_table">
		<table>
			<?php 
				foreach ($maintenance as $key => $value) {
					$email_date = $value['time']; 
					$phpdate = strtotime( $email_date);
					$email_date = date( 'n/j/y, g:i a', $phpdate );
					echo "<tr><td width='10%'>".$email_date."</td>
						<td width='20%'><a href='mailto:".$value['email']."?subject=Maintenance%20Request&body=Hello%20".$value['first_name']." ".$value['last_name'].", Thanks%20for%20contacting%20us%20about%20your%20maintenance%20need.'>".$value['email']."</a></td>
						<td width='10%'>".$value['first_name']." ".$value['last_name']."</td>
						<td width='5%'>".$value['unit_number']."</td>
						<td width='10%'>".$value['phone']."</td>
						<td width='35%'>".$value['message']."</td>
						<td width='10%'><a href='".base_url()."contact/delete_maintenance/".$value['id']."'>DELETE</a></td></tr>";			}
			 ?>

		</table>
</div>

