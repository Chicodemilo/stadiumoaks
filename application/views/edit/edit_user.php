
	<form action="<?php echo base_url(); ?>edit/submit_user_edits" method="post">
		<input type="hidden" name="id" id="id" value="<?php echo $user[0]['id'] ?>">
		<table id="user_edit">
			<tr>
				<th colspan="2">
					USER INFORMATION :: <?php echo $user[0]['username'] ?>
				</th> 
			</tr>
			<tr>
				<td class="righter">Userame:</td>
				<td><input type="text"  name="username" id="username" style="width:90%;"placeholder="Enter The Username" value="<?php echo $user[0]['username'] ?>"></td>
			</tr>
			<tr>
				<td class="righter" width="20%">First Name:</td>
				<td><input type="text"  name="first_name" id="first_name" style="width:90%;"placeholder="Enter The First Name" value="<?php echo $user[0]['first_name'] ?>"></td>
			</tr>
			<tr>	
				<td class="righter" width="20%">Last Name:</td>
				<td><input type="text"  name="last_name" id="last_name" style="width:90%;"placeholder="Enter The Last Name" value="<?php echo $user[0]['last_name'] ?>"></td>
			</tr>
			<tr>	
				<td class="righter" width="20%">Email:</td>
				<td><input type="text"  name="email" id="email" style="width:90%;"placeholder="Enter The Last Name" value="<?php echo $user[0]['email'] ?>"></td>
			</tr>
			<tr><th colspan="2"></th></tr>

		</table>
		<table style="width:600px; margin:auto;">
			<tr>
				<td class="righter_light">Receive<br>Site<br>Emails:</td>
				<td>
					<select name="" id="">
						<option value="Y">Yes</option>
						<option value="N">No</option>
					</select>
				</td>
				<td class="righter_light">Receive<br>Message<br>Emails:</td>
				<td>
					<select name="" id="">
						<option value="Y">Yes</option>
						<option value="N">No</option>
					</select>
				</td>
				<td class="righter_light">Receive<br>Maintenance<br>Emails:</td>
				<td>
					<select name="" id="">
						<option value="Y">Yes</option>
						<option value="N">No</option>
					</select>
				</td>
				<td class="righter_light">Receive<br>Pre-Application<br>Emails:</td>
				<td>
					<select name="" id="">
						<option value="Y">Yes</option>
						<option value="N">No</option>
					</select>
				</td>
			</tr>
		</table>
	</form>