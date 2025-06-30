<?php

$message .= 'Nombre: ' . $_POST['nombre'] . "\r" ;

$message .= 'Usuario: ' . $_POST['usuario'] . "\r";
$message .= 'Email: ' . $_POST['email'] . "\r";
$message .= 'Puntuación: ' . $_POST['Resultado'] . "\r";
$message .= 'PREGUNTA 1: ' . $_POST['pregunta1'] . "\r";
$message .= 'PREGUNTA 2: ' . $_POST['pregunta2'] . "\r";
$message .= 'PREGUNTA 3: ' . $_POST['pregunta3'] . "\r";
$message .= 'PREGUNTA 4: ' . $_POST['pregunta4'] . "\r";
$message .= 'PREGUNTA 5: ' . $_POST['pregunta5'] . "\r";
$message .= 'PREGUNTA 6: ' . $_POST['pregunta6'] . "\r";
$message .= 'PREGUNTA 7: ' . $_POST['pregunta7'] . "\r";
$message .= 'PREGUNTA 8: ' . $_POST['pregunta8'] . "\r";
$message .= 'PREGUNTA 9: ' . $_POST['pregunta9'] . "\r";
$message .= 'PREGUNTA 10: ' . $_POST['pregunta10']. "\r";

mail("info@sageris-iberica.com","Resultado de cuestionario DEFDRIVING", $message);
mail("sageris.ruben@gmail.com","Resultado de cuestionario DEFDRIVING", $message);
?>