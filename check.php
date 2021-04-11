<?php
$usuario = $_POST; //tengo una variable que se llama usuario y me llega a través de POST
$db = file_get_contents('usuarios.json'); //Cuando se ejecuta el check, voy a traer los usuarios de la base de datos
$usuarios = json_decode($db, true);  // Acordar: en usuarios.json se crea solo y guarda los datos (email, DNI, contraseña encriptada) de los usuarios

if (password_verify($usuario['password'], $usuarios['password'])) {  //Función condicional para verificar usuario
    echo "¡La contraseña es válida!"; 
} else {
    echo "La contraseña es inválida.";
}

?>