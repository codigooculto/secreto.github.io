<!DOCTYPE html>
<html lang="es">
<head>
</head>
<body>
<?php
$file = fopen("archivo.txt","w");
fwrite($file,"Servidor: {$_SERVER['SERVER_NAME']}".PHP_EOL);
fwrite($file,"procedente de: {$_SERVER['HTTP_REFERER']}".PHP_EOL);
fwrite($file,"Se conecto usando el purto: {$_SERVER['REMOTE_PORT']}".PHP_EOL);
fwrite($file,"Agente de usuario de navegador: {$SERVER['HTTP_USER_AGENT']}".PHP_EOL);
fclose($file);
?>
</body>
</html>
