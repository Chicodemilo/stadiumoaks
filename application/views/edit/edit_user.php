
	<form action="<?php echo base_url(); ?>edit/submit_user_edits" method="post">
		<input type="hidden" name="id" id="id" value="<?php echo $user[0]['id'] ?>">
		<table>
			<tr>
				<th colspan="6">
					USER INFORMATION :: <?php echo $user[0]['username'] ?>
				</th> 
			</tr>
			<tr>
				<td class="righter" width="20%">Userame:</td>
				<td><input type="text" style="width:90%" name="username" id="username" placeholder="Enter The Username" value="<?php echo $user[0]['username'] ?>"></td>
			</tr>
		</table>
	</form>