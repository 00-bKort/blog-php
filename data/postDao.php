<?php

    include "entidadPost.php"; //se importa para utilizarse despues
    include "conexion.php";

     class PostDao{
        //propiedades
        private $con;


        //constructor
        public function __construct() {
            $this->con=new Conexion();
        }

        //metodos
        public function insertar($entity){

            //inciando conexion
            $this->con->conectar();

            $stmt = $this->con->getConexion()->prepare("insert into post(title, description, author, date) values (?, ?, ?, ?)");

            $stmt->bindParam(1, $entity->getTitle());
            $stmt->bindParam(2, $entity->getDescription());
            $stmt->bindParam(3, $entity->getAuthor());
            $stmt->bindParam(4, $entity->getDate());

            $res=$stmt->execute();
            
            //cerrando conexion
            $this->con->desconectar();
            
            if($res){
                return true;
            }else{
                return false;
            }
        }

        public function modificar($entity){
             //inciando conexion
            $this->con->conectar();
            $stmt = $this->con->getConexion()->prepare("update post set title=?,description=?,author=?,date=? where id=?");
            
            $stmt->bindParam(1, $entity->getTitle());
            $stmt->bindParam(2, $entity->getDescription());
            $stmt->bindParam(3, $entity->getAuthor());
            $stmt->bindParam(4, $entity->getDate());
            $stmt->bindParam(5, $entity->getId());
    
            $res=$stmt->execute();
            
            //cerrando conexion
            $this->con->desconectar();
            
            if($res){
                return true;
            }else{
                return false;
            }
        }

        public function eliminar($entity){
             //inciando conexion
            $this->con->conectar();
         
            $stmt = $this->con->getConexion()->prepare("delete from post where id=?");
            
            $stmt->bindParam(1, $entity['id']);
    
            $res=$stmt->execute();
            
            //cerrando conexion
            $this->con->desconectar();

            if($res){
                return true;
            }else{
                return false;
            }
        }

        public function getAll(){
             //inciando conexion
            $this->con->conectar();

            $stmt= $this->con->getConexion()->prepare("select * from post");

            $res=$stmt->execute();
            $data=$stmt->fetchAll(PDO::FETCH_ASSOC);
            
            //cerrando conexion
            $this->con->desconectar();
            
            if($res){
                return $data;
            }else{
                return null;
            } 
        }

        public function getById($id){
            //inciando conexion
           $this->con->conectar();

           $stmt= $this->con->getConexion()->prepare("select * from post where id=?");

           $stmt->bindParam(1, $id);

           $res=$stmt->execute();
           $data=$stmt->fetchAll(PDO::FETCH_ASSOC);

           $post=$data[0];

           //cerrando conexion
           $this->con->desconectar();
           
           if($res){
               return $post;
           }else{
               return null;
           } 
        }
     }
?>