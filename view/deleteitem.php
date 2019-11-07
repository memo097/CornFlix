<?php
/* DELETE Item from cart*/
$bdd = new PDO('mysql:host=localhost;dbname=a70j0_bdd_ehanon', 'root', '');
$id = $_GET['id'];

$sql = "DELETE FROM shoppingcart WHERE id_movie= $id";
$req = $bdd->query($sql);
var_dump($req);
header('location: ../index.php?action=home');

?>