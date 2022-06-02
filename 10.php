<?php include 'includes/header.php';
//?  Conectar BBDD con PDO.
//* Mysqli solo se puede conectar a base de datos mysql
//* PDO se puede conectar hasta 12 tipos de BBDD.


//* 1. Conectar la BD
$db = new PDO('mysql:host=localhost; dbname=bienes_raices', 'root', '1234'); 

//* 2. Escribioms el query
$query = "SELECT titulo, imagen from propiedades";

//* 3. consultamos la BD 
// Sentencia preparada para prepara la sentencia o la consulta
$stmt = $db->prepare($query); 

// Ejecutamos
$stmt->execute();

// Obtenemos los resultados
$resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Iteramos
foreach($resultado as $propiedad):
    echo $propiedad['titulo'];
    echo "<br>";
    echo $propiedad['imagen'];
    echo "<br>";
endforeach;

/* echo "<pre>";
var_dump($resultado);
echo "</pre>"; */

include 'includes/footer.php';