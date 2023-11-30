<?php
session_start();
require_once 'app/config/database.php';
if(isset($_SESSION['user_session'])){
   echo "<a href=$url/app/controllers/cerrar_sesion.php>Cerrar Sesión</a>";
    echo 'Bienvenido Administrador:'.$_SESSION['user_session'];
}else{
    echo 'Debes iniciar sesión';
}

?>