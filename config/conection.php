<?php


class Database
{

    private $hostname = "localhost";
    private $database = "tienda-online";
    private $username = "root";
    private $password = "";
    private $charset = "utf8";


    function conectar()
    {

        try {
            //establecemos la conexion a la base de datos
            $conexion = "mysql:host=" . $this->hostname . "; dbname=" . $this->database . "; charset=" . $this->charset;

            $options = [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_EMULATE_PREPARES => false
            ];

            $pdo = new PDO($conexion, $this->username, $this->password, $options);

            return $pdo;
        } catch (PDOException $e) {
            echo 'Error conection' . $e->getMessage();
            exit();
        }
    }
}
