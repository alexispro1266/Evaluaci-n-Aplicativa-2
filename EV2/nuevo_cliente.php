<?php 
require 'data/basedatos.php';

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    
    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $tipodoc = $_POST['tipodoc'];
    $documento = $_POST['documento'];
    $direccion = $_POST['direccion'];

    $sql = "INSERT INTO clientes (id,nombre,apellido,
                tipodoc,documento,direccion) 
            VALUES ('$id','$nombre','$apellido','$tipodoc',
                  '$documento','$direccion')";
    $resultado = $db->query($sql);
    if($resultado){
        header('location:index.php');
    }
    exit;
}


$sql = "SELECT * FROM tipo_documento";
$resultado = $db->query($sql);
$tipos_documento = [];
while($tipo = $resultado->fetch_assoc()){
    $tipos_documento[] = $tipo;
}



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h1>Nuevo Cliente</h1>
        <form method="POST">

        <div class="mb-3">
                <label for="id" class="form-label">ID:</label>
                <input type="text" name="id" id="id" class="form-control">
            </div>

            <div class="mb-3">
                <label for="nombre" class="form-label">Nombres:</label>
                <input type="text" name="nombre" id="nombre" class="form-control">
            </div>

            <div class="mb-3">
                <label for="apellido" class="form-label">Apellidos:</label>
                <input type="text" name="apellido" id="apellido" class="form-control">
            </div>

            <div class="mb-3">
                <label for="tipodoc" class="form-label">Tipodoc:</label>
                <select class="form-control" id="tipodoc" name="tipodoc">
                    <option value="0">--SELECCIONE--</option>
                    <?php
                    foreach ($tipos_documento as $tipo) :
                    ?>
                        <option value="<?php echo $tipo['nombre'] ?>">
                            <?php echo $tipo['nombre'] ?>
                        </option>
                    <?php
                    endforeach;
                    ?>
                </select>
            </div>


            <div class="mb-3">
                <label for="documento" class="form-label">Numero de Documento:</label>
                <input type="text" name="documento" id="documento" class="form-control">
            </div>

            <div class="mb-3">
                <label for="direccion" class="form-label">Direccion</label>
                <input type="text" name="direccion" id="direccion" class="form-control">
            </div>        

            <input type="submit" value="Grabar" class="btn btn-primary">
        </form>

    </div>
</body>

</html>