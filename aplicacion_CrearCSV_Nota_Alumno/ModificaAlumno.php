<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form class="formulario" method="post">
        <label class="nombre" for="nombre">Nombre del alumno:</label>
        <input name="nombre" type="text" size="15"> <br> <br>
        <label class="nota" for="nota">Nota:</label>
        <input name="nota" type="text" size="1"> <br> <br>
        <label class="fecha" for="fecha">Fecha: </label>
        <input name="fecha" type="date"> <br><br>
        <input type="submit" name="Enviar" value="Añadir">
    </form>

    <?php
        include 'Funciones.php';
        $nombre=$_POST['nombre'];
        $nota=$_POST['nota'];
        $fecha=$_POST['fecha'];
        if (isset($_POST['Enviar'])) {
            if (!file_exists("Alumnos/$nombre.csv")) {
                $arreglo[0] = array("Nombre","Nota","Fecha");
                $arreglo[1] = array("$nombre","$nota","$fecha");

                $ruta ="Alumnos/$nombre.csv";
                generarCSV($arreglo, $ruta, $delimitador = ';', $encapsulador = '"');
            }
            else {
                $fileName = basename("$nombre.csv");
                $filePath = 'Alumnos/'.$fileName;
                $añadido=array("$nombre","$nota","$fecha");
                file_put_contents($filePath,$añadido);
            }
        }
    ?>
</body>
</html>