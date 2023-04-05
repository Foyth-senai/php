<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabuada</title>
    <style>
        .verde{
            background-color: green;
        }
        .amarelo{
            background-color: yellow;
        }
    </style>
</head>
<body>
    <br>
    <?php
      //  echo("Para abrir cole no navegador LOCALHOST:8080/PHP-1/tabuada.php");
        $valor = $_POST["valor"];
        $name = $_POST["name"];
        echo("Seu nome é $name");
      for($x=1;$x<=10;$x++)
      {
        $resultado = ($valor * $x);
        if($resultado%2 == 0)
        {
            echo("<div class='verde'>");
        }
        else{
            echo("<div class='amarelo'>");
        }
        echo("$valor x $x = $resultado <br>");
        echo("</div>");
      }
    ?>
</body>
</html>