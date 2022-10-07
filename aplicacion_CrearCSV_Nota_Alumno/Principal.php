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
        <label class="modify" for="modify">Edita alumnos</label> <br>
        <input name="modify" type="submit" value="Entrar"> <br>
        <label class="download" for="download">Ver archivos</label> <br>
        <input name="download" type="submit" value="Entrar">
        <?php
            if (isset($_POST['modify'])) {
                header ('Location: ModificaAlumno.php');
            }
            elseif (isset($_POST['download'])) {
                header ('Location: Descarga_Imprime_Fichero.php');
            }
        ?>
        
    </form>
</body>
</html>