<?php
require "data/basedatos.php";
$sql = "SELECT * FROM clientes";
$resultado = $db->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lista de enfermos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" 
        rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" 
        crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1>Listado de Pacientes</h1>
        <a href="nuevo_cliente.php" class="btn btn-secondary">Nuevo</a>
        <tr>
        <a idn="lista.php" class="btn btn-secondary">Consultar</a>
        <tr> 
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Tipo Cliente</th>
                    <th>Tipo Document</th>
                    <th>Numero Documento</th>
                    <th>Direccion</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    while($listaenfermos = $resultado->fetch_assoc()):
                ?>
                       <tr>
                        <td><?php echo $listaenfermos['id'] ?></td>
                        <td><?php echo $listaenfermos['nombre'] ?></td>
                        <td><?php echo $listaenfermos['tipodoc'] ?></td>
                        <td><?php echo $listaenfermos['documento'] ?></td>
                        <td><?php echo $listaenfermos['direccion'] ?></td>
                        <td>                        
                        </td>
                        </tr>
                <?php
                    endwhile;
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>
