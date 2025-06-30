<?php

$message .= 'Usuario: ' . $_POST['usuario'] . "\r\n\r\n";

mail("info@sageris-iberica.com","entrada nuevo usuario", $message);
mail("sageris.ruben@gmail.com","Entrada nuevo usuario ", $message);
?>