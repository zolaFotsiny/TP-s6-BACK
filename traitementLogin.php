<?php
    // include('utils/Function.php');
    
    $email = $_POST['email'];
    $password = $_POST['password'];

    
    if( $email === 'admin@gmail.com' && $password === 'mdpprom13')
        HEADER('LOCATION:home.php');
    else
        echo 'mot de passe incorrecte';


?>