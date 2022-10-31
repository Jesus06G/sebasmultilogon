<?php

$config = include 'conexion.php';

try {
  $conexion = new PDO('mysql:host=' . $config['db']['bmbzta65sap5rbtk9ugd-mysql.services.clever-cloud.com'], $config['db']['ubh8aptvm54nwrpu'], $config['db']['M3yuXpdhUysSSJGAcXRl'], $config['db']['options']);
  $sql = file_get_contents("data/prueba.sql");
  
  $conexion->exec($sql);

  echo "La base de datos y la tabla de alumnos se han creado con éxito.";
} catch(PDOException $error) {
  echo $error->getMessage();
}