<?php
require "conn.php";

if(isset($_POST['talleta'])){
    $rekisteri=$_POST['Rekisteri'];
    $valmistaja=$_POST['valmistaja'];
    $malli=$_POST['Malli'];
    $hinta=$_POST['hinta'];
    $vari=$_POST['vari'];
    $vuosimalli=$_POST['vuosimalli'];
    $km=$_POST['km'];

    $komento="INSERT INTO autot (Rekisteri, valmistaja, Malli, hinta, vari, vuosimalli, km) VALUES(:Rekisteri, :valmistaja, :Malli, :hinta, :vari, :vuosimalli, :km)";
    $lisaa = $yhteys->prepare($komento);
    $lisaa->bindValue(':Rekisteri', $rekisteri, PDO::PARAM_STR);
    $lisaa->bindValue(':valmistaja', $valmistaja, PDO::PARAM_STR);
    $lisaa->bindValue(':Malli', $malli, PDO::PARAM_STR);
    $lisaa->bindValue(':hinta', $hinta, PDO::PARAM_STR);
    $lisaa->bindValue(':vari', $vari, PDO::PARAM_STR);
    $lisaa->bindValue(':vuosimalli', $vuosimalli, PDO::PARAM_STR);
    $lisaa->bindValue(':km', $km, PDO::PARAM_STR);
    $lisaa->execute();
}
header("location:index.php");
?>
