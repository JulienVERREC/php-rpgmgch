<html>
	<div>
		<table>
			<tr>
				<th>Id :</th>	
				<th>Email :</th>
				<th>Date de création :</th>
			
			</tr>
			<?php 
				$userTable = require('users.php');
				for ($i=0; $i <count($userTable) ; $i++) { 
					$id = $userTable[$i]->get_id();
					$email = $userTable[$i]->get_email();
					$createdAt = $userTable[$i]->get_createdAt();
					echo "
						<tr>
							<td>$id</td>
							<td>$email</td>
							<td>$createdAt</td>
						</tr>
					";
				}
			?>
		</table>
	</div>
</html>


