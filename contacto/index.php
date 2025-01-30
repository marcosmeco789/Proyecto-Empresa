<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style type="text/css">
        @font-face {
            font-family: "Geist";
            src: url("https://assets.codepen.io/605876/GeistVF.ttf") format("truetype");
        }

        * {
            box-sizing: border-box;
        }

        :root {
            --size: 20px;
        }

        body {
            display: grid;
            place-items: center;
            min-height: 100vh;
            background: hsl(0 0% 6%);
            margin: 0;
            position: relative;
        }

        .el {
            background: conic-gradient(from 180deg at 50% 70%, hsla(0, 0%, 98%, 1) 0deg, #eec32d 72.0000010728836deg, #ec4b4b 144.0000021457672deg, #709ab9 216.00000858306885deg, #4dffbf 288.0000042915344deg, hsla(0, 0%, 98%, 1) 1turn);
            width: 100%;
            height: 100%;
            mask:
                radial-gradient(circle at 50% 50%, white 2px, transparent 2.5px) 50% 50% / var(--size) var(--size),
                url("https://assets.codepen.io/605876/noise-mask.png") 256px 50% / 256px 256px;
            mask-composite: intersect;
            animation: flicker 20s infinite linear;
            position: absolute;
            top: 0;
            left: 0;
            z-index: -1;
        }

        h1 {
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            margin: 0;
            font-size: clamp(6rem, 8vw + 1rem, 14rem);
            font-family: "Geist", sans-serif;
            font-weight: 140;
            color: hsl(0 0% 2%);
            mix-blend-mode: soft-light;
            filter: drop-shadow(0 0 2px white);
            text-shadow: 2px 2px white;
        }

        @keyframes flicker {
            to {
                mask-position: 50% 50%, 0 50%;
            }
        }

        .form-container {
            position: relative;
            z-index: 1;
            background: rgba(255, 255, 255, 0.8);
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
        }
    </style>
</head>

<body>
    <canvas class="el"></canvas>
    <div class="container mt-5 form-container">
        <h1 class="text-center mb-4">Contacto</h1>
        <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if (!empty($_POST['nombre']) && !empty($_POST['correo']) && !empty($_POST['telefono']) && !empty($_POST['pregunta'])) {
                require_once("modelo/modelo.php");
                $consulta = new Consulta;
                $resultado = $consulta->setConsulta($_POST['nombre'], $_POST['correo'], $_POST['telefono'], $_POST['pregunta']);
                if ($resultado) {
                    echo "<div class='alert alert-success text-center'>Consulta añadida correctamente, nos pondremos en contacto lo antes posible!</div>";
                } else {
                    echo "<div class='alert alert-danger text-center'>Error al añadir la consulta</div>";
                }
            } else {
                echo "<div class='alert alert-danger text-center'>Todos los campos son obligatorios</div>";
            }
        }
        ?>
        <form action="" method="post">
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre:</label>
                <input type="text" name="nombre" id="nombre" class="form-control">
            </div>
            <div class="mb-3">
                <label for="correo" class="form-label">Correo:</label>
                <input type="email" name="correo" id="correo" class="form-control">
            </div>
            <div class="mb-3">
                <label for="telefono" class="form-label">Teléfono:</label>
                <input type="tel" name="telefono" id="telefono" class="form-control">
            </div>
            <div class="mb-3">
                <label for="pregunta" class="form-label">Pregunta:</label>
                <textarea name="pregunta" id="pregunta" cols="30" rows="10" class="form-control" style="resize: none;"></textarea>
            </div>
            <div class="text-center">
                <input type="submit" value="Enviar" class="btn btn-primary">
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    
</body>

</html>