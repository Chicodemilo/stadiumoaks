<div class="users_box">
		<div class="hours_head">
			USERS
		</div>
			<div class="users_table">
			<table>
				<tr>
					<th>Username</th>
					<th>First<br>Name</th>
					<th>Last<br>Name</th>
					<th>Email</th>
					<th>Role</th>
					<th>Verified</th>
					<th>Last Login</th>
					<th></th>
					<th></th>
				</tr>
				<?php 
					$users = array_slice($users, 1);
					
					foreach ($users as $key => $value) {
						$last_login = $value['last_login']; 
						$phpdate = strtotime( $last_login);
						$last_login = date( 'n/j/y, g:i a', $phpdate );

						echo "<tr>";
						echo "<td>".$value['username']."</td>";
						echo "<td>".$value['first_name']."</td>";
						echo "<td>".$value['last_name']."</td>";
						echo "<td>".$value['email']."</td>";
						echo "<td>".$value['role']."</td>";
						echo "<td>".$value['verified']."</td>";

						echo "<td>".$last_login."</td>";
						echo "<td><a href='".base_url()."edit/submit_users/".$value['id']."' class='small_link'>edit</a></td>";
						echo "<td><a href='".base_url()."edit/delete_user/".$value['id']."' class='small_link'>delete</a></td>";
						echo "</tr>";

					}
			?>
			<tr>
				<td colspan="9">
					<a href="<?php echo base_url(); ?>login/create_member">Create A New User</a>
				</td>
			</tr>
			</table>
			</div>
	</div>