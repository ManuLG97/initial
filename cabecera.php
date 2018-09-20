<?php
$title="Mi primera pagina";
$name="Toni";
if(!isset($_GET['age'])) { echo "No has puesto nada </br>";}
else {
    $age=$_GET['age'];
    echo "<h1>".$title."</h1>";
echo "<br>";
if ($age >= 18) {echo "<strong>Eres mayor de edad</strong></br>";}
else {echo "Eres menor de edad tienes ".$age. " años";}
}

