<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/Dwes/Boostrap_Booking/librerias/ti.php' ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        <?php startblock('titulo') ?>
        <?php endblock() ?>
    </title>


    <!-- para que vaya bootsrap -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <!-- CSS MIAS -->
    <link rel="stylesheet" href="css/miCss.css">


</head>

<body>
    <nav class="navbar navbar-light navbar-expand-lg bg-dark navbar-fixed-top">
        <a class="navbar-brand" href="">
            <!-- href para enlazar esto para ir a otro sitio -->
            <img src="/dwes/boostrap_booking/img/booking.png">
        </a>
        <ul class="navbar-nav mr-auto">
            <!-- mr-auto margen Right automatico -->
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdownMenuLink" role="button"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Reservas </a>

                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="reservas.php">Hotel</a>
                </div>
            </li>
        </ul>
        <form class="form-inline mx-right" action="reservasController.php" method="post">
            <!-- al apretar el boton te envia a la pagina reservasContoller.php -->
            <button class="btn btn-outline-danger my-2 my-sm-0" type="submit" name="cerrar">CERRAR
                SESIÓN</button>
        </form>
    </nav>

    <?php startblock('principal') ?>
    <?php endblock() ?>
</body>

</html>