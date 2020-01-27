<?php
include './master.php';
require_once 'reservasController.php';
?>
<?php startblock('principal') ?>

<!-- Si existe llama la funcion recuperarReservas y llena la table con ellas
    Si no existe crea un array vacio -->
<?php

if (isset($_SESSION['reserves'])) {
    $reserves = recuperarReserves();
} else {
    $reserves = [];
    $_SESSION['reserves'] = $reserves;
}
?>

<!-- CONTROLAR SI LA SESIO EXISTEIX O NO -->



<div class="container-fluid mt-3">
    <div class="card-body border border-primary">
        <a href="reservas.php">
            <button class="btn btn-primary">NUEVA RESERVA</button>
        </a>
    </div>

</div>
<br>

<div class="container-fluid">
    <div class="card">
        <h5 class="card-header text-white bg-primary">RESERVA HOTEL</h5>
        <div class="card-body border border-primary">
            <!-- if para comprovar la cantidad de reservas que hay, si hay 0 es que no hay ninguna y te muestra un mensaje -->
            <?php if (count($reserves) == 0) { ?>

            <div class="alert alert-info alert-dismissible fade show" role="alert">
                <strong> No hay reservas en ningun hotel </strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <?php }
            //else por si hay reservas te muestra la tabla
            else {
                ?>

            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>Ciudad</th>
                        <th>Nombre</th>
                        <th>Fecha inicio</th>
                        <th>Fecha final</th>
                        <th>Num. Pers.</th>
                        <th>Características</th>
                        <th>Comida</th>
                        <th>Orientación</th>
                        <th>Observaciones</th>
                    </tr>
                </thead>
                <tbody>

                    <!--TODO Bucle para mostrar todas las reservas que hay -->
                    <?php $pos = 0;
					foreach ($reserves as $reserva) {
                                 ?>
                    <tr>
                        <td> <?php echo $reserva['ciudades'] ?></td>
                        <td> <?php echo $reserva['nombre'] ?></td>
                        <td> <?php echo $reserva['inicio'] ?></td>
                        <td> <?php echo $reserva['final'] ?></td>
                        <td> <?php echo $reserva['numPersonas'] ?></td>
                        <td> <?php
                                                if (isset($_POST['caracteristicas'])) { //comprovar si hi han valors o no
                                                    foreach ($reserva['caracteristicas'] as $value) {

                                                        echo $value . "<br/>";
                                                    }
                                                }
                                                ?></td>

                        <td> <?php echo $reserva['comida'] ?></td>
                        <td> <?php echo $reserva['orientacion'] ?></td>
                        <td> <?php echo $reserva['observaciones'] ?></td>

                        <td>
                            <form action="reservasController.php" method="POST">
                                <!-- hacemos un imput para enviar la posicion que queremos eliminar -->
                                <button type="submit" class="btn btn-danger" name="borrar">Borrar</button>
                                <input type="hidden" name="posicion" value="<?php echo $pos ?>">
                            </form>
                        </td>
                    </tr> <?php $pos++;
                                        } ?>
                </tbody>
            </table> <?php } ?> </div>
    </div>
</div> <?php endblock() ?>