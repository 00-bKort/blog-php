<?php
   
   include "./data/postDao.php";


    class PostControlador{
        //propiedades
        private $dao;

        //constructor
        public function __construct() {
            //instanciando el objeto DAO
            $this->dao=new PostDao();
        }

        //metodos
        public function guardar($post){
            //obtener la vista
            $res=$this->dao->insertar($post);

            //evaluando resultado de la operacion
            if(true){
                //redireccionando al index
               header("Location: admin"); 
            }else{
                echo "Error al guardar";
            }
        }

        public function actualizar($post){
              //obteniendo la vista
              $res=$this->dao->modificar($post); 

            //evaluando resultado de la operacion
           if(true){
               //redireccionando al index
            header("Location: admin"); 
           }else{
               echo "Error al eliminar";
           }
           
        }

        public function eliminar($post){
           $res=$this->dao->eliminar($post); 

            //evaluando resultado de la operacion
           if(true){
               //redireccionando al index
            header("Location: admin"); 
           }else{
               echo "Error al eliminar";
           }

        }

        public function getPosts(){
            return $this->dao->getAll();
        }

        public function getPost($id){
            return $this->dao->getById($id);
        }

        //vistas
        public function user(){
            //obtenendo los registro de posts 
            //esta variable se podra procesar en la vista
           $posts=$this->getPosts();

           //obteniendo la vista
           include "./view/post.php";            
        }
        public function admin(){
            //obtenendo los registro de posts 
            //esta variable se podra procesar en la vista
           $posts=$this->getPosts();

           //obteniendo la vista
           include "./view/index.php";            
        }
          
        public function vista_guardar(){
           //obteniendo la vista
           include "./view/guardar.php";
            
        }

        public function vista_actualizar($id){
            $post=$this->getPost($id);
            //obteniendo la vista
            include "./view/actualizar.php"; 
        }

         //vista para ruta no encontrada
         public function error(){
            echo "Error 404 :( Bro!!";
        }
    }
?>