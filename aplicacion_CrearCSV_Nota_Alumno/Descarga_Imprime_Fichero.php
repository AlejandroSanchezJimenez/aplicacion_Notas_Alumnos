<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" class="formulario">
        <label for="busqueda" class="busqueda">Nombre del alumno:</label>
        <input type="text" name="busqueda">
        <input name="download" type="submit" value="Descargar CSV">
        <input name="imprime" type="submit" value="Imprime CSV">
    </form>
    <?php
        include 'Funciones.php';
        if (isset($_POST['download'])) {
            $nombre=$_POST['busqueda'];
            
            $fileName = basename("$nombre.csv");
            $filePath = 'Alumnos/'.$fileName;
            if(!empty($fileName) && file_exists($filePath)){
                // Define headers
                header("Cache-Control: public");
                header("Content-Description: File Transfer");
                header("Content-Disposition: attachment; filename=$fileName");
                header("Content-Type: application/csv");
                header("Content-Transfer-Encoding: binary");
    
                // Read the file
                readfile($filePath);
                exit;
            }else{
                echo 'No existe un alumno con ese nombre';
            }
        }

        if (isset($_POST['imprime'])) {
            $nombre=$_POST['busqueda'];
            $fileName = basename("$nombre.csv");
            $filePath = 'Alumnos/'.$fileName;
            escribeCSV($filePath);
        }
        else {
            echo 'No existe un alumno con ese nombre';
        }
    ?>
</body>
</html>