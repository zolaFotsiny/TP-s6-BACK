<?php
    
   require'Function.php';
    $data['titre'] = $_POST['titre'];
    $data['sousTitre'] = $_POST['sousTitre'];
    $data['date'] = $_POST['date'];
    $data['description'] = $_POST['description'];
    insert($data);
    Header('LOCATION:home.php');

?>