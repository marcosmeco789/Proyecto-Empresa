<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Empresa</title>
    <!-- Fuentes -->
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Henny+Penny&family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Workbench&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/4.0.16/fullpage.min.css">
    <link rel="stylesheet" href="css/index.css">
</head>

<body>
    <canvas id="gradient-canvas"></canvas>
    
    <!-- Navbar -->
    <div class="navbar">
        <nav>
            <ul>
                <li><a href="#inicio">Inicio</a></li>
                <li><a href="#nosotros">Sobre Nosotros</a></li>
                <li><a href="#portafolio">Portafolio</a></li>
                <li><a href="#servicios">Servicios</a></li>
                <li><a href="/contacto/index.php">Contacto</a></li>
            </ul>
        </nav>
    </div>

    <!-- FullPage Wrapper -->
    <div id="fullpage">
        <!-- Sección Inicio -->
        <div class="section" id="inicio">
            <div class="company-name">
                <div class="hero_text">
                    <h1 class="text-3d">A Tu modo</h1>
                </div>
            </div>
            <div class="description-company-name">
                <p class="description">Donde el diseñador principal es el cliente</p>
            </div>
        </div>

        <!-- Sección Portafolio -->
        <?php require_once "componentes/portafolio.php";?>
        <!-- Sección Servicios -->
        <?php require_once "componentes/servicios.php" ?>

    </div>

    <!-- Scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/4.0.16/fullpage.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
    <script src="index.js"></script>
</body>

</html>
