<?php 
// se declaran las variables para el uso de la conexion a la base de datos
$host = 'localhost';
$dbname = 'evento_credenciales';
$username = 'root';
$password = '';

try{
   $pdo = new PDO(dns: "mysql:host=$host;dbname=$dbname;charset=utf8",username: $username, password: $password);
   $pdo->setAttribute(attribute: PDO::ATTR_ERRMODE, value: PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e){
     die("Error de conexion: ".htmlspecialchars(string: $e->getMessage()));
}


?>