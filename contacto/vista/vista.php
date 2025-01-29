<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Consultas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            background-color: #e9ecef;
        }
    </style>
</head>

<body>
    <div class="container my-5">
        <?php if (isset($mensaje)) { echo $mensaje; } ?>
        <h1 class="text-center mb-4">Listado de Consultas</h1>
        <table class="table table-striped table-bordered">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Correo</th>
                    <th>Teléfono</th>
                    <th>Pregunta</th>
                    <th>Editar</th>
                    <th>Eliminar</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if (is_array($datos) && count($datos) > 0) {
                    for ($i = 0; $i < count($datos); $i++) {
                ?>
                        <tr>
                            <td><?php echo $datos[$i]['id']; ?></td>
                            <td><?php echo $datos[$i]['nombre']; ?></td>
                            <td><?php echo $datos[$i]['correo']; ?></td>
                            <td><?php echo $datos[$i]['telefono']; ?></td>
                            <td><?php echo $datos[$i]['pregunta']; ?></td>
                            <td><a href="../controlador/editar.php?id=<?php echo $datos[$i]['id']; ?>" class="btn btn-warning">Editar</a></td>
                            <td><a href="../controlador/borrar.php?id=<?php echo $datos[$i]['id']; ?>" class="btn btn-danger">Borrar</a></td>
                        </tr>
                <?php
                    }
                } else {
                ?>
                    <tr>
                        <td colspan="7" class="text-center">No hay consultas disponibles</td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>
</body>

</html>