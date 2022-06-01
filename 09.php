<?php include 'includes/header.php';

// mysqli y PDO utilizan POO. mysqli soporta funciones, PDO no.

//? Conectar mysql con POO.

// el objeto de $db va a tener todos los metodos, es una ventaja del POO.

//* 1- Conectamos a la BD
$db = new mysqli('localhost', 'root', '1234', 'bienes_raices'); 

//* 2. Creamos el query
$query = "SELECT titulo from propiedades";
/* $resultado = $db->query($query); */

// Para mostrar todos solo lo iteramos con un loop.
/* var_dump($resultado->fetch_assoc()); */

//? Sentencias preparadas: 
//* Tienen varias ventajas las principales son la seguridad ( evitar inyección sql) y las consultas se pueeden almacenar en mooria y esto le evita trabajo al servidor.

//* 3. Preapramos el query
$stmt = $db->prepare($query); // Con prepare aclaramos que será una sentencia preparada. usamos la variable stms porque son sentecias preparadas

//* 4. Ejecutamos el query.
$stmt->execute(); // ejecutamos el statemment

//* 5. creamos la variable
$stmt->bind_result($titulo); //bind_result nos crea una variable con al consuta.


// Asignamos e imprimimos el resultados
while($stmt->fetch()):
    var_dump($titulo);
endwhile;

include 'includes/footer.php';