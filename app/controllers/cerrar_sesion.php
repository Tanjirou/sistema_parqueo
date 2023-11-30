<?php
require_once '../config/database.php';
session_start();
// require_once 'app/resource/views/main.file.view.php';

if(isset($_SESSION['user_session'])){
    echo 'hola';
    echo $url;
}

?>