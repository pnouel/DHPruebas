<?php
  $contrasena ="mono1234";

  $hash = password_hash($contrasena, PASSWORD_DEFAULT);
  var_dump($contrasena, $hash);

  $resultado = password_verify($contrasena,$hash);
  var_dump($resultado);
  $resultado = password_verify("mono1234",$hash);
  var_dump($resultado);

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