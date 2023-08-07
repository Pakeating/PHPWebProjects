<?php




//host
define('HOST', 'localhost');
//dbname
define('DBNAME','paymentpage');
//user
define('USER','root');
//password
define('PASS','francisco');

try{
    $conexion=new PDO('mysql:host='.HOST.';dbname='.DBNAME.';',USER, PASS);
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
}catch(Exception $e){
    echo 'Error de Conexion: '.$e->GetMessage();
}
