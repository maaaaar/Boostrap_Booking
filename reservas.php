<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Document</title>

    <!-- para que vaya bootsrap -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/popper.min.js"></script>

    <!-- CSS MIAS -->
    <link rel="stylesheet" href="css/miCss.css">

</head>

<body>

    <div class="container">
        <div class="card">
            <h5 class="card-header text-white bg-primary">RESERVA HOTEL</h5>
            <div class="card-body">
                <form action="index.php" method="post">
                    <!-- CIUDADES -->
                    <div class="form-group row">
                        <!--Columna orizontal de divide en 12 partes -->
                        <label for="cbxCursos" class="col-2">Ciudad</label> <!-- utilitza nomes 2 columnes de les 12 -->
                        <div class="col-10">
                            <!-- utilitza 10 columnes de les 12-->
                            <select class="form-control" name="cbxCursos" id="cbxCursos" autofocus>
                                <option selected value="1">Barcelona</option>
                                <option value="2">Madrid</option>
                                <option value="3">Valencia</option>
                                <option value="4">Bilbao</option>
                                <option value="5">Sevilla</option>
                            </select>
                        </div>
                    </div>

                    <!--Nombre hotel -->
                    <div class="form-group row">
                        <label for="txtNombre" class="col-2">Nombre hotel</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" placeholder="Introduce nombre de hotel"
                                name="txtNombre" id="txtNombre" maxlength="20" />

                        </div>
                    </div>
                    <!--Fecha inicio -->
                    <div class="form-group row">
                        <label for="inicio" class="col-2">Fecha inicio</label>
                        <div class="col-sm-10">
                            <input type="date" class="form-control" name="fechaInicio" id="inicio"
                                placeholder="dd/mm/aaaa" />
                        </div>
                    </div>
                    <!--Fecha final -->
                    <div class="form-group row">
                        <label for="final" class="col-2">Fecha final</label>
                        <div class="col-sm-10">
                            <input type="date" class="form-control" name="fechaFinal" id="final"
                                placeholder="dd/mm/aaaa" />
                        </div>
                    </div>

                    <!--Numero personas -->
                    <div class="form-group row">
                        <label for="numPErsonas" class="col-2">Número de personas</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" name="txtNumPersonas" id="numPErsonas" min="1"
                                max="4" />
                        </div>
                    </div>
                    <!--Caracteristicas -->
                    <div class="form-group row">
                        <label for="caracteristicas" class="col-2">Caracteristicas</label>
                        <div class="col-10">
                            <div class="custom-control custom-checkbox custom-control-inline">
                                <input type="checkbox" class="custom-control-input" name="caracteristicas[]"
                                    id="piscina" value="Piscina">
                                <label class="custom-control-label" for="piscina">Piscina</label>
                            </div>
                            <div class="custom-control custom-checkbox custom-control-inline">
                                <input type="checkbox" class="custom-control-input" name="caracteristicas[]" id="wifi"
                                    value="WIFI">
                                <label class="custom-control-label" for="wifi">WIFI</label>
                            </div>
                            <div class="custom-control custom-checkbox custom-control-inline">
                                <input type="checkbox" class="custom-control-input" name="caracteristicas[]"
                                    id="lavanderia" value="Labanderia">
                                <label class="custom-control-label" for="lavanderia">Lavandería</label>
                            </div>
                        </div>
                    </div>
                    <!--Comida -->
                    <div class="form-group row">
                        <label for="comida" class="col-2">Comida</label>
                        <div class="col-10">
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input" id="desyuno" name="comida"
                                    value="Desayuno" checked>
                                <label class="custom-control-label" for="desyuno">Desayuno</label>
                            </div>

                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input" id="media pension" name="comida"
                                    value="Media pensión" checked>
                                <label class="custom-control-label" for="media pension">Media pensión</label>
                            </div>

                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input" id="pension completa" name="comida"
                                    value="Pensión completa" checked>
                                <label class="custom-control-label" for="pension completa">Pensión completa</label>
                            </div>
                        </div>
                    </div>
                    <!--Orientacion -->
                    <div class="form-group row">
                        <label for="orientacion" class="col-2">Orientación</label>
                        <div class="col-10">
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input" id="mar" name="orientacion" value="Mar"
                                    checked>
                                <label class="custom-control-label" for="mar">Mar</label>
                            </div>

                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input" id="montaña" name="orientacion"
                                    value="Montaña">
                                <label class="custom-control-label" for="montaña">Montaña</label>
                            </div>
                        </div>
                    </div>
                    <!--Observaciones -->
                    <div class="form-group row">
                        <label for="txtObservacions" class="col-2">Observaciones</label>
                        <div class="col-10">
                            <textarea placeholder="Observaciones" name="txtObservacions" id="txtObservacions" cols="30"
                                rows="4"></textarea>
                        </div>
                    </div>
                    <!--Botton -->
                    <div class="form-group row">
                        <div class="col-10 offset-2">
                            <!-- offset-2 para que empieze en la columna 2 -->
                            <input type="submit" class="btn btn-outline-primary" value="aceptar" id="aceptar"
                                name="aceptar" />
                            <a href="index.php" class="btn btn-outline-primary">Cancelar</a>
                            <!-- a para links, submit para coger datos -->
                            <!-- cancelar como no queremos guardar nada solo lo utilizamos como link y le ponemos forma de boton -->
                        </div>
                    </div>
                </form>
            </div>
            <h5 class="card-footer text-white bg-primary">RESERVA HOTEL</h5>

        </div>
    </div>
</body>

</html>