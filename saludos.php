<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Saludos</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>

<div class="color">
<h1>Elige un idioma</h1>
<form action="saludos.php" method="POST">
<label>Escribe un idioma</label>
<label>Español: es</label>
<br>
<label>Ingles:  en</label>
<br>
<label>Frances: fr</label>
<br>
<label>Italiano:it</label>
<br>
<label>Aleman:  de</label>
<br>
<label>Japones: ja</label>

<label>Escribe un idioma</label>


<input type="text" name="idioma" id="idioma" required>
<button type="submit" name="Calcular">Saludar</button>
        </form>

<div class="r">
    <!--cuando escriben un es o fr o algo mas se manda un saludo en el idioma que escribes-->
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['Calcular'])) { 
     $idioma = ($_POST['idioma']);
        if ($idioma == 'es'){
         echo "<h2>Hola</h2>";
        } 
        else if($idioma == 'en'){
        echo "<h2>Hello</h2>";
        } 
        else if($idioma == 'fr'){
            echo "<h2>Bonjour</h2>";
        } 
        else if($idioma == 'it'){
            echo "<h2>Ciao</h2>";
        } 
        else if($idioma == 'de'){
            echo "<h2>Hallo</h2>";
        }
        else if($idioma == 'ja'){
            echo "<h2>Konnichiwa</h2>";
        }
        else{
            echo "<h2>Idioma no reconocido.</h2>";
            }
            }
            ?>
        </div>
    </div>

</body>
</html>
