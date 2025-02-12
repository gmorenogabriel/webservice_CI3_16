<?php
// Consumir Web Service mio
$url = "http://mvrouter.ddns.net:443/webservice/index.php/welcome/getUserById/3";
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
$result = curl_exec($ch);
$clientes = array(); //creamos un array

while($row = mysqli_fetch_array($result)){
    $id=$row['id'];
    $nombre=$row['nombre'];
    $edad=$row['edad'];
    $genero=$row['genero'];
    $email=$row['email'];
    $localidad=$row['localidad'];
    $telefono=$row['telefono'];

    $clientes[] = array('id'=> $id, 'nombre'=> $nombre, 'edad'=> $edad, 'genero'=> $genero,
                        'email'=> $email, 'localidad'=> $localidad, 'telefono'=> $telefono);
}

//desconectamos la base de datos
$close = mysqli_close($conexion)
or die("Ha sucedido un error inexperado en la desconexion de la base de datos");

//Creamos el JSON
$json_string = json_encode($clientes);
echo $json_string;

//Cerramos
curl_close($ch);
echo $res;
?>