<?php 
if ( isset( $argv ) ) {
    parse_str(
        join( "&", array_slice( $argv, 1 )
    ), $_GET );
	// var_dump($argv[1]);
}
//$url = "http://mvrouter.ddns.net:443/webservice/index.php/welcome/getUserById/2";
$url = "http://localhost:8084/webservice/index.php/welcome/getUserById/" . $argv[1];
$json = file_get_contents($url);
$obj=json_decode($json, TRUE);
//print_r ($obj['apellido']); 
print_r ($obj['nombre'] . ' ' . $obj['apellido']); 
?> 
<html>
 <form>
	<h1>WebService</h1>
		Identificacion :    <input type="text" name="<?php echo $obj['apellido'] ?>" /><br>
		Nombre         :    <input type="text" name="<?php echo $obj['nombre']   ?>" /><br>
		Apellido       :	<input type="text" name="<?php echo $obj['apellido'] ?>" /><br>
		Latitud        :    <input type="text" name="<?php echo $obj['latitud']  ?>" /><br>
		Longitud       :    <input type="text" name="<?php echo $obj['longitud'] ?>" /><br>
 </form>
</html>


	