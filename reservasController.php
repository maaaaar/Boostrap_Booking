<?php session_start(); ?>

<?php

if (isset($_POST['cerrar'])) {
    cerrarSesion();
} elseif (isset($_POST['aceptar'])) {
    aceptar();
} elseif (isset($_POST['posicion'])) {
    borrar();
}


//funcion para recuperar las reservas
function recuperarReserves()
{
    $reserves = $_SESSION['reserves'];

    return $reserves;
}

function novaReserva()
{
    //Recollir les dades enviades per POST i crear un array associatiu amb totes les dades de la reserva.
    $reserva = [];

    $reserva['ciudades'] = $_POST['cbxCursos'];
    $reserva['nombre'] = $_POST['txtNombre'];
    $reserva['inicio'] = $_POST['fechaInicio'];
    $reserva['final'] = $_POST['fechaFinal'];
    $reserva['numPersonas'] = $_POST['txtNumPersonas'];

    if (isset($_POST['caracteristicas'])) { //comprovar si hi han valors o no
        $reserva['caracteristicas'] = [];
        foreach ($_POST['caracteristicas'] as $value) {
            array_push($reserva['caracteristicas'], $value);
        }
    }
    $reserva['comida'] = $_POST['comida'];
    $reserva['orientacion'] = $_POST['orientacion'];
    $reserva['observaciones'] = $_POST['txtObservacions'];




    array_push($_SESSION['reserves'], $reserva); //guardamos la reserva en l'array de reservas

    //Afegir aquesta reserva al array de reserves que tenim guardat a la sessió.

    //tornar a la pagina reservas.php
    // header("Location: reservas.php");
}

function cerrarSesion()
{
    //para cerrar session
    session_unset();
    session_destroy();

    //tornar a la pagina inicial
    header("Location: index.php");
}

function borrar()
{
    // para borrar
    if (isset($_SESSION['reserves'][$_POST['posicion']])) {

        //con la posicion elimino la posicion de la reserva en el array
        unset($_SESSION['reserves'][$_POST['posicion']]);
        $_SESSION['reserves'] = array_values($_SESSION['reserves']); //para que se guarde sin ningun null
    }

    // Anar a la pàgina reservas.php.
    // header("Location: reservas.php");
    header("Location: index.php");
}

function aceptar()
{
    // para Aceptar reserva
    novaReserva();
}
?>