<!DOCTYPE html>
<html>
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora biotipo</title>
    <link rel="stylesheet" href="index.css">

    </head>
    
    <style>
    html
    {
    background-color: aquamarine;
    padding-left: 550px;
    }
    
    </style>
    <body>
        <h1>Calculador de biotipo</h1>
        <div class="container">
        
        <form name="inscription" method="post" action="calcularbiotipo.php">
            <h3>Nombre : </h3>
            <input type="text" name="nombre" placeholder="Ingrese su nombre"/> <br/>
            <h3>Estatura (En la forma 1.70): </h3>
            <input type="text" name="estatura" placeholder="Ingrese su estatura"/><br/><br>
            <input type="submit" name="valider" value="Calcular"/><br/><br>
        </form>
        <?php
        if(isset($_POST['valider'])){
            $nombre = $_POST['nombre'];
            $estatura = $_POST['estatura'];
            
            $biotipo_text = '';
            if ($estatura < 1.70) 
            {
                $biotipo_text = 'Biotipo bajo';
            }
            else if ($estatura>= 1.70 && $estatura < 1.80) {
                $biotipo_text = 'Biotipo promedio';
            }
            else if ($estatura>= 1.80) {
                $biotipo_text = 'Biotipo superior';
            }
            
                echo 'Hola '. $nombre. ','. ' segun su estatura es : '. $biotipo_text;
            
        }
        ?>
        </div>
    </body>
</html>