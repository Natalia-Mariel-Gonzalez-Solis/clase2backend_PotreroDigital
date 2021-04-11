<?php
//Recuperar información enviada por el formulario
$usuario = $_POST;

//Para encriptar la constraseña del usuario se usa password_hash y PASSWORD_DEFAULT
$usuario['password'] = password_hash($usuario['password'], PASSWORD_DEFAULT); 

//Creo un archivo de texto que guarde la data de los usuarios
$fp = fopen('usuarios.json', 'a+');  //fopen abre o crea un directorio-archivo
fwrite($fp, json_encode($usuario));
fclose($fp); //cierra el directorio-archivo

echo "Usuario registrado correctamente";


?>