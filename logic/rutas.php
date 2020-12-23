<?php
    /*En este archivo se procesaran las peticiones y el enrrutamiento
    de la aplicacion*/
    include "controlador.php";

//-----------------PROCESAMIENTO DE LA URL de la peticion HTTP-------------------------------
    //obteniendo la ruta de la peticion
    $ruta=$_SERVER['REQUEST_URI'];
    // echo $ruta;

    //quitando parametros despues de la ruta
    //siguen despues del signo de ?
    if (strpos($ruta, '?')) {
        $ruta = strstr($ruta, '?', true);
    }
//---------------------------------------------------------------------------------------------

    //rutas para project-php de posts
    $ctr=new PostControlador();
    
    switch ($ruta) {
        case '/project-php':
            $ctr->user();
            break;
        case '/project-php/index':
            $ctr->user();
            break;
        case '/project-php/admin':
            $ctr->admin();
            break;
        case '/project-php/guardarForm':
            $ctr->vista_guardar();
            break;
        case '/project-php/guardar':{
            //creando objeto para registrar post
            $post=new Post();

            //obteniendo datos de la peticion y
            //asignandolos al objeto

            $post->setTitle($_POST['title']);
            $post->setDescription($_POST['description']);
            $post->setAuthor($_POST['author']);
            $post->setDate($_POST['date']);
            
            $ctr->guardar($post);

            break;
        }
        case '/project-php/eliminar':{
            $id=$_GET['id'];
            $post = $ctr -> getPost($id);
            $ctr->eliminar($post);
            break;
        }   
        case '/project-php/actualizarForm':{
            $id=$_GET['id'];
            $ctr->vista_actualizar($id);
            break;
        }
        case '/project-php/actualizar':{
             //creando objeto para modificar post
             $post=new post();

             //obteniendo datos de la peticion y
             //asignandolos al objeto
             $post->setId($_POST['id']);
             $post->setTitle($_POST['title']);
             $post->setDescription($_POST['description']);
             $post->setAuthor($_POST['author']);
             $post->setDate($_POST['date']);

            $ctr->actualizar($post);
            break;
        }

        default:{  //ruta para estado 404 not found
            $ctr->error();
            break;
        }
    }   

?>