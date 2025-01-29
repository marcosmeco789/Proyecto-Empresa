<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <?php 
if (!empty($_POST['nombre']) && !empty($_POST['correo']) && !empty($_POST['telefono']) && !empty($_POST['pregunta'])) {
    require_once("modelo/modelo.php");
    $consulta = new Consulta;
    $resultado = $consulta->setConsulta($_POST['nombre'], $_POST['correo'], $_POST['telefono'], $_POST['pregunta']);
    if ($resultado) {
        echo "<div class='alert alert-success text-center'>Consulta añadida correctamente</div>";
    } else {
        echo "<div class='alert alert-danger text-center'>Error al añadir la consulta</div>";
    }
} else {
    echo "<div class='alert alert-danger text-center'>Todos los campos son obligatorios</div>";
}

?>
</head>

<body>
    <h1>Contacto</h1><br>
    <form action="" method="post">
        <label for="nombre">Nombre:</label><br>
        <input type="text" name="nombre" id="nombre"><br><br>
        <label for="correo">Correo</label><br>
        <input type="email" name="correo" id="correo"><br><br>
        <label for="telefono">Telefono</label><br>
        <input type="tel" name="telefono" id="telefono"><br><br>
        <label for="pregunta">Pregunta</label><br>
        <textarea name="pregunta" id="pregunta" cols="30" rows="10" style="resize: none;"></textarea><br><br>
        <input type="submit" value="Enviar">
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>