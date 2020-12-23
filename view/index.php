<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Clientes</title>

    <!-- agregando los asset: CSS y JS -->
    <?php require "template/assetTable.php";?>
</head>
<body>
<!-- agregando el navbar del template-->
<?php require "template/navbarTable.php";?>

<div class="container">

<h1 class="text-center">PUBLICACIONES CRUD</h1>

<div class="d-flex justify-content-center justify-content-md-start">
    <a href="guardarForm" class="btn btn-primary">Nueva Publicacion</a>
</div>

<br><br>

<table id="tclientes"  class="table table-striped table-bordered" style="width:100%">
    <thead>
        <tr>
            <th>ID</th>
            <th>Titulo</th>
            <th>Descripcion</th>
            <th>Autor</th>
            <th>Fecha</th>
            <th>OPERACIONES</th>
        </tr>
    </thead>
    <tbody>
        <!-- agregando  codigo php para procesar las filas -->
    <?php
        //procesando variable
        foreach ($posts as $key => $value) {
           echo "<tr>";
                echo "<td>".$value['id']."</td>";
                echo "<td>".$value['title']."</td>";
                echo "<td>".$value['description']."</td>";
                echo "<td>".$value['author']."</td>";
                echo "<td>".$value['date']."</td>";
                echo "<td>"; //agregando acciones y rutas para cada fila
                    echo "<a class='btn btn-danger' href='eliminar?id=".$value['id']."'>Eliminar</a>";
                    echo "<a  class='btn btn-warning ml-1' href='actualizarForm?id=".$value['id']."'>Modificar</a>";
                echo"</td>";
           echo "</tr>";
        }
    ?>     
    </tbody>
</table>
<!-- agregando el footer del template -->
<?php require "template/footerTable.php";?>

<script>
    $(document).ready(function() {
 
        //configuracion de datatable
       var  table = $('#tclientes').DataTable({

            "searching": true,
            "destroy": true,
            "conditionalPaging": true,
            "scrollCollapse": true,
            "paging": true,
            "lengthMenu": [[5, 10, 20, 30], [5, 10, 20, 30]],
            "order": [[0, "desc"]],
            "responsive": true,
           
            "language": {
                "lengthMenu": "Mostrar _MENU_ ",
                "zeroRecords": "Datos no encontrados",
                "info": "Mostar páginas _PAGE_ de _PAGES_",
                "infoEmpty": "Datos no encontrados",
                "infoFiltered": "(Filtrados por _MAX_ total registros)",
                "search": "Buscar:",
                "paginate": {
                    "first": "Primero",
                    "last": "Anterior",
                    "next": "Siguiente",
                    "previous": "Anterior"
                },
            }

            })

            //anexando la instancia de botones antes creada                   
            table.buttons(0, null).container().prependTo(
              table.table().container()
            )



    } );
</script>
</div>
    
</body>
</html>