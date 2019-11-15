<?php
    if ($_FILES) {
        if ($_FILES["archivo"]["error"] != 0) {
            echo "Hubo un error en el archivo";
        } else {
            $ext = pathinfo($_FILES["archivo"]["name"], PATHINFO_EXTENSION);
            if ($ext != "js") {
                echo "Tipo de Archivo Incorrecto";
            }else {
                echo "TIPO CORRECTO DE ARCHIVO";
                move_uploaded_file($_FILES["archivo"]["tmp_name"], "archivo." .  $ext);
            }
        }

      var_dump($_FILES);
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="test.php" method="post" enctype="multipart/form-data">
        <div>
            <label for="">archivo</label>
            <input type="file" name="archivo" value="">
        </div>
        <div>
            <label for="">SUBIR</label>
            <input type="submit" name="archivo" value="enviar">
        </div>
    </form>
</body>
</html>