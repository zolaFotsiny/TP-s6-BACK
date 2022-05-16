<?php
    
   require'dbConnect.php';
    
    function insert($data){
        $con = dbconnect();
        $sql = "insert into Actualite (titre, sousTitre, description, date) values('%s', '%s', '%s', '%s')";
        $sqlFinal = sprintf($sql,$data['titre'],$data['sousTitre'],$data['description'],$data['date']);   
        $con->query($sqlFinal);
    }

    $data['titre'] = $_POST['titre'];
    $data['sousTitre'] = $_POST['sousTitre'];
    $data['date'] = $_POST['date'];
    $data['actualite'] = $_POST['actualite'];
    insert($data);
    Header('LOCATION:home.php');

?>