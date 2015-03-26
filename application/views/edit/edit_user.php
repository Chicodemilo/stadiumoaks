
	<form action="<?php echo base_url(); ?>edit/submit_user_edits" method="post">
		<input type="hidden" name="id" id="id" value="<?php echo $user[0]['id'] ?>">
		<table>
			<tr>
				<th colspan="8">
					USER INFORMATION :: <?php echo $user[0]['username'] ?>
				</th> 
			</tr>
			<tr>
				<td class="righter">Userame:</td>
				<td><input type="text"  name="username" id="username" placeholder="Enter The Username" value="<?php echo $user[0]['username'] ?>"></td>
				<td class="righter" width="20%">First Name:</td>
				<td><input type="text"  name="first_name" id="first_name" placeholder="Enter The First Name" value="<?php echo $user[0]['first_name'] ?>"></td>
				<td class="righter" width="20%">Last Name:</td>
				<td><input type="text"  name="last_name" id="last_name" placeholder="Enter The Last Name" value="<?php echo $user[0]['last_name'] ?>"></td>
				<td class="righter" width="20%">Email:</td>
				<td><input type="text"  name="email" id="email" placeholder="Enter The Last Name" value="<?php echo $user[0]['last_name'] ?>"></td>
			</tr>
		</table>
	</form>