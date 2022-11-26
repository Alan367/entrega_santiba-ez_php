<?php
$nombre_receta = $_POST["nombre"];
$imagen_receta = $_POST["imagen"];
$receta = $_POST["receta"];

include("./conexion.php");

mysqli_query($conexion_db, "INSERT INTO recetas VALUE (DEFAULT, '$nombre_receta', '$imagen_receta', '$receta')"); 

mysqli_close($conexion_db);
header("Location:index.php?ok");