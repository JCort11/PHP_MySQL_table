<?php

    $nombreServer = "localhost";
    $usuario = "root";
    $contra = "";
    $nombreBaseDatos = "test";

    try {
        $conn = new PDO("mysql:host=$nombreServer;dbname=$nombreBaseDatos",$usuario,$contra);
        //echo "conexion exitosa";
    } catch (PDOException $th) {
        //echo "Occurrio un error en la conexion ".$th->getMessage();
    }

?>