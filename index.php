<!DOCTYPE html>

<html lang="pt-br">

    <head>

        <meta charset="UTF-8">
        <meta name="description" content="do your calculations">
        <meta name="keywords" content="Classroom, Teacher, Calculator, Activity">
        <meta name="author" content="Gabriel Andrade">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Calculator</title>
        <link rel="icon" type="image/x-icon" href="Icon.png">
        <link rel="stylesheet" href="styles.css">

    </head>

    <body>
    <h2>Calculadora</h2>
                        <p class="lead">Entre com dois valores e clique no botão correspondente para calcular:</p>

   <form action="" method="post" >
      Primeiro Numero: <input name="num1"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" type="text"><br>
      Segundo numero: <input name="num2"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" type="text"><br>
      <input type="submit"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="operacao" value="+">     
      <input type="submit"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="operacao" value="-">     
      <input type="submit"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="operacao" value="*">     
      <input type="submit"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="operacao" value="/">     
   </form> 
<?php

   $a = $_POST['num1'];
   $b = $_POST['num2'];
   $op= $_POST['operacao'];

   if( !empty($op) ) {
      if($op == '+')
         $c = $a + $b;
      else if($op == '-')
         $c = $a - $b;
      else if($op == '*')
         $c = $a*$b;
      else
         $c = $a/$b;

      echo "O resultado da opera&ccedil;&atilde;o &eacute;: $c";
   }

?>       
</body>
</html>
