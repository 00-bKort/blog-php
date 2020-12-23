<?php
class Conexion {
    private $host;
    private $dbname;
    private $username;
    private $password;

    private $conexion;

    //BUILDER
    public function __construct(){
        $this->host = "localhost";
        $this->dbname = "db_post";
        $this->username = "root";
        $this->password= "";
    }

    //METHODS
    public function conectar(){
        try {
            $this-> conexion = new PDO("mysql:host=$this->host;dbname=$this->dbname",$this->username,$this->password);
           /*  echo "conexion a $this->dbname de $this->host establecida."; */
        }catch(PDOException $pe){
            die("No se puede conectar a $this->dbname :" .$pe->getMessage());
        }
    }

    public function desconectar(){
        $this->conexion = null;
    }

    public function getConexion(){
        return $this->conexion;
    }
}
?>