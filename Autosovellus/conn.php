<?php
try{
    header ('Content-Type: text/html; charset=utf-8');
    $palvelin     =   "localhost";
    $tietokanta   =   "autot";
    $tunnus       =   "Salla";
    $salasana     =   "saana145";

    $yhteys = new PDO("mysql:host=$palvelin;dbname=$tietokanta;charset=utf8", "$tunnus", "$salasana");
    $yhteys->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "";
    
}catch(PDOException $e){
    print "<p>Tietokantayhdeyden avaaminen epäonnistui.</p>" . $e -> getMessage();
}

?>

