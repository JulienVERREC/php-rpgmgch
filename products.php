<?php 

	include 'Product.php';
	include 'Vegetable.php';
	include 'Cloth.php';

	$courgettes = new Vegetable("1234","courgettes","1.50$","ferme du tarn","20-07-17");
	$haricotsVerts = new Vegetable("5678","haricots verts","3.70$","bretagne", "18-12-2018");

	$strings = new Cloth("169","ficèle","10$","Aubade");
	$soutientGorge = new Cloth("269","soutient-gorge","20$","Aubade");
	$boxers = new Cloth("369","boxer","8$","Pull-in");

//var_dump($boxers);
	return [
		$courgettes,
		$haricotsVerts,
		$strings,
		$soutientGorge,
		$boxers,
	];

 ?>