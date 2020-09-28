<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
    <link rel="stylesheet" href="index.css">
    <style>
    html
    {
      padding-left: 550px;
    }
    </style>
</head>
<body>
    <h1>Mi calculadora</h1>
    <div class="container">
<form method="GET">
         <input type ="text" name = "num1" placeholder="Numero 1"><br><br>
         <input type ="text" name = "num2" placeholder="Numero 2">
         <br>
         <br>
         <select name="operator">
             <option >Seleccione el operador</option>
             <option >Suma</option>
             <option >Resta</option>
             <option >Multiplicar</option>
             <option >Dividir</option>
         </select><br>
         <br>
         <button type="submit" value="submit" name="submit">Calcular</button>
         
         <p>La respuesta es :</p>
      </form>
     <?php
      if(isset($_GET['submit']))
      {
       $result1=$_GET['num1'];
       $result2=$_GET['num2'];
       $operator=$_GET['operator'];
       switch($operator)
       {
         case "Seleccione":
           echo" Seleccione el operador";
         break;
         case "Suma":
           echo $result1+$result2;
         break;
         case "Resta":
           echo $result1-$result2;
         break;
         case "Multiplicar" :
          echo $result2*$result2;
         break;
         case "Dividir" :
         echo $result1/$result2;
         break;
        }
      }
      ?>
     
      </div>
</body>
</html>

