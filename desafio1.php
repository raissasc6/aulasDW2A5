<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio #1</title>
    <style>
         body{
            background-color: lightcoral;
        }
        </style>
</head>

<body>
    <h1>Desafio #1</h1>
    <h2>Ordenar sequências com delimitadores desconhecidos</h2>
    <?php
        $numeros = filter_input(INPUT_GET, "numeros", FILTER_SANITIZE_SPECIAL_CHARS);

        $numeros2 = explode(",",$numeros );
       
        $converte_array = explode(",",$numeros );
        $clength= count($converte_array)-1;

        rsort($converte_array);

        $primeiro = $converte_array[0];
        $ultimpo = $converte_array[$clength];
        $ultimpo2 = $numeros2[$clength];
    ?>
    <hr>

    <p>Os números informados foram:</p>

    <p><b>
    <?php 
    echo $numeros2[0];
     for($x=1;$x<=$clength;$x++)
      {
      if ($x == $clength){
        echo " e " ;
        echo $ultimpo2;
       } else {
        echo ", ";
        echo $numeros2[$x];
       }
      }
     
    ?>
        </b></p>
    <br>
    <br>

    <p>Os números em ordem crescente são:</p>
    <p><b>

    <?php 
    echo $converte_array[$clength];
    for ($x=$clength-1; $x>=0; $x--)
      {
      if ($x == 0){
        echo " e " ;
        echo $primeiro;
       } else {
        echo ", ";
        echo $converte_array[$x];
       }
    }
    ?>
    </b></p>
    <br>

    <p>Os números em ordem decrescente são:</p>
    
    <p><b>

    <?php 
     echo $converte_array[0];
    for($x=1;$x<=$clength;$x++)
      {
        if ($x == $clength){
          echo " e " ;
          echo $ultimpo;
         } else {
          echo ", ";
          echo $converte_array[$x];
        }
    }
    ?>
    </b></p>
    <br>    
</body>

</html>