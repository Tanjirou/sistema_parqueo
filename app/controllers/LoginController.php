<?php 
    require_once '../config/database.php';
    $email = $_POST['email'];
    $password = $_POST['password'];
    $query = $pdo->prepare('SELECT * FROM users where email = :email AND password = :password');
    $query->execute(array(':email'=> $email, ':password' => $password));
    $result = $query->fetch();
    if($result)
    echo json_encode(['class'=>'alert-success','userAlert'=>'Usuario Correcto', 'generic' => null]);
    else echo json_encode(['class'=>'alert-danger','userAlert'=>'Usuario o contraseña incorrecto','generic' => 'error']);
?>