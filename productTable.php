<!DOCTYPE html>
<html>
	<div>
		<table>
			<tr>
				<th>Id :</th>
				<th>Nom :</th>
				<th>Prix :</th>
				<th>Origine :</th>
				<th>Date d'expiration :</th>
				<th>Marque :</th>
			</tr>
			<?php
				$productTable = require('products.php');
				
				for ($i=0; $i <count($productTable) ; $i++) { 
				 	$id = $productTable[$i]->get_id();
				 	$name = $productTable[$i]->get_name();
				 	$price = $productTable[$i]->get_price();
				 	$productorName = null;
				 	$expiresAt = null;
				 	$brand = null;
				 	echo "
				 		<tr>
							<td>$id</td>
							<td>$name</td>
							<td>$price</td>


						";
					if (method_exists($productTable[$i], 'get_productorName')) {
					 	$productorName = $productTable[$i]->get_productorName();
					 	$expiresAt = $productTable[$i]->get_expiresAt();
						echo "
							
							<td>$productorName</td>
							<td>$expiresAt</td>
							";
					}
					else {
						echo "
							<td></td>
							<td></td>
							";
					}

					if (method_exists($productTable[$i], 'get_brand')) {
				 		$brand = $productTable[$i]->get_brand();
					 	echo "
							<td>$brand</td>
						";
					}
					else {
						echo "
							<td></td>
							";
				 	} 
						
				}

			 ?>
		</table>
	</div>
</html>