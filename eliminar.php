<?php
require 'conexion.php';

$id = (int) $_POST['id'];
$conexion->query("DELETE FROM personas WHERE id = $id");

header('Location: index.php');
exit;
