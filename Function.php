<?php
    // require'dbConnect.php';
    function insert($data){
        $con = dbconnect();
        $sql = "insert into Actualite (titre, sousTitre, description, data) values('%s', '%s', '%s', '%s')";
        $sqlFinal = sprintf($sql,$data['titre'],$data['sousTitre'],$data['description'],$data['date']);   
        $con->query($sqlFinal);
        echo $sqlFinal;
    }
?>