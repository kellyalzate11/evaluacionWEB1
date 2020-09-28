<!DOCTYPE html>
<html>
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora IMC</title>
    <link rel="stylesheet" href="index.css">
    </head>
    <style>
    html
    {
    background-color: beige;
    padding-left: 550px;
    }
    </style>
    
    </style>
    <body>
        <h1>Bienvenido </h1>
        <h3>Calculadora de IMC</h3>
        
        <form name="inscription" method="post" action="calculadoraimc.php">
            <h3>Nombre : </h3>
            <input type="text" name="nombre" placeholder="Ingrese su nombre"/> <br/>
            <h3>Estatura (En la forma 1.70): </h3>
            <input type="text" name="estatura" placeholder="Ingrese su estatura"/><br/>
            <h3>Peso (en kg) : </h3>
            <input type="text" name="peso" placeholder="Ingrese su peso"/><br/><br>
            <input type="submit" name="valider" value="Calcular"/><br/><br>
        </form>
        <?php
        if(isset($_POST['valider'])){
            $nombre = $_POST['nombre'];
            $estatura = $_POST['estatura'];
            $peso = $_POST['peso'];
            $imc = $peso / ($estatura * $estatura);
            $imc_text = '';
            if ($imc < 18.5) 
            {
                $imc_text = 'Peso insuficiente';
            }
            else if ($imc>= 18.5 && $imc < 24.9) {
                $imc_text = 'Normopeso';
            }
            else if ($imc>= 25 && $imc < 26.9) {
                $imc_text = 'Sobrepeso grado I';
            }
            else if ($imc>= 27 && $imc < 29.9) {
                $imc_text = 'Sobrepeso grado II (preobesidad)';
            }
            else if ($imc>= 30 && $imc < 34.9) {
                $imc_text = 'obesidad de tipo I';
            }
            else if ($imc>= 35 && $imc < 39.9) {
                    $imc_text = 'Obesidad de tipo II';
            }
            else if ($imc>= 40 && $imc < 49.9) {
                $imc_text = 'Obesidad de tipo III (morbida)';
            }
            else if ($imc>= 50) {
                $imc_text = 'Obesidad de tipo IV (extrema)';
            }
            
                echo 'Hola '. $nombre. ','. ' su IMC (indice de masa corporal) es de : '. $imc.'<br> La interpretacion de su IMC es : '. $imc_text;
            
        }
        ?>
    </body>
</html>

