<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guardar</title>
     <!-- agregando los asset: CSS y JS -->
    <?php require "template/assetTable.php";?>
</head>
<body>

    <h1 class="text-center mt-5">Nuevo Post</h1>  
    
    <form class="container mb-4" action="guardar" method="post">

        <div>
            <label for="title">Title</label>
            <input class="form-control" type="text" name="title" placeholder="Digite su title" required>
        </div>
        <br>
        <div>
            <label for="Descripcion">Descripcion</label>
            <textarea class="form-control" name="description" cols="20" rows="5" required></textarea>
        </div>
        <br>
        <div>
            <label for="author">Author</label>
            <input class="form-control" type="text" name="author" required>
        </div>
        <br>
        <div>
            <label for="date">Date</label>
            <input class="form-control" type="date" name="date" required>
        </div>
        <br>

        <br>
        <button class="btn btn-primary" type="submit">Guardar</button>
        <button class="btn btn-warning" type="reset">Cancelar</button>

        <a class="btn btn-danger" href="index">Regresar</a>
        
    </form>
</body>
</html>