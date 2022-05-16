<?php
    include('Function.php');

    $data['titre'] = $_POST['titre'];
    $data['sousTitre'] = $_POST['sousTitre'];
    $data['date'] = $_POST['date'];
    $data['actualite'] = $_POST['actualite'];
    insert($data);
    Header('LOCATION:home.php');

?>