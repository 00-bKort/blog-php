<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar</title>
    <!-- agregando los asset: CSS y JS -->
    <?php require "template/assetTable.php";?>
</head>
<body>
    <h1 class="text-center mt-5"> Modificar Publicacion</h1>  
    
    <form class="container mb-4" action="actualizar" method="post">
        <div>
            <label for="id">ID</label>
            <input class="form-control" type="number" name="id"  <?php echo "value='".$post['id']."'"; ?>  readonly>
        </div>
        <br>
        <div>
            <label for="title">Titulo</label>
            <input class="form-control" type="text" name="title" placeholder="Digite su title" <?php echo "value='".$post['title']."'"; ?> required >
        </div>
        <br>
        <div>
            <label for="description">Descripcion</label>
            <textarea class="form-control" name="description"  cols="20" rows="5" required><?php echo $post['description'];?></textarea>
        </div>
        <br>
        <div>
            <label for="author">Autor</label>
            <input class="form-control" type="text" name="author" <?php echo "value='".$post['author']."'"; ?> required>
        </div>
        <br>
        <div>
            <label for="date">Fecha</label>
            <input class="form-control" type="date" name="date"<?php echo "value='".$post['date']."'"; ?> required>
        </div>
        <br>

        <br>
        <button class="btn btn-primary" type="submit"> Modificiar</button>
        <button class="btn btn-warning" type="reset">Cancelar</button>

        <a class="btn btn-danger" href="index">Regresar</a>
        
    </form>
</body>
</html>