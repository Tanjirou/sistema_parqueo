<?php 
    define('SERVER','localhost');
    define('USER','root');
    define('PASSWORD','');
    define('BD','sistema_parqueo');

    $server = 'mysql:dbname='.BD.';host='.SERVER;

    try{
        $pdo = new PDO($server,USER,PASSWORD, array(PDO::MYSQL_ATTR_INIT_COMMAND=>'SET NAMES utf8'));
    }catch(PDOException $e){
        echo 'Error: '. $e->getMessage();
    }

    $url = 'http://localhost/sistema_parqueo';
?>