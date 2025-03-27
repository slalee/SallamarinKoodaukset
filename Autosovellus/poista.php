<?php
    require "conn.php";

    if(isset($_GET['Rekisteri'])){
        $rekisteri=$_GET['Rekisteri']; 
        $kysely="DELETE FROM autot WHERE Rekisteri=:Rekisteri";
        $poista = $yhteys->prepare($kysely);
        $poista->bindValue(':Rekisteri', $rekisteri, PDO::PARAM_STR); // Muuttuja $rekisteri pienellä kirjaimella
        $poista->execute();
    }
    
    header("location:index.php");
?>
