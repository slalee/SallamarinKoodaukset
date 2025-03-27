<?php

// Tarkista, onko lomakkeen kentät täytetty
if (!empty($_POST['valmistaja']) && !empty($_POST['malli']) && !empty($_POST['hinta']) && !empty($_POST['vari']) && !empty($_POST['vuosimalli']) && !empty($_POST['km'])) {

    // Tallenna lomakkeen tiedot muuttujiin
    $rekisteri = $_POST['rekisteri'];
    $valmistaja = $_POST['valmistaja'];
    $malli = $_POST['malli'];
    $hinta = $_POST['hinta'];
    $vari = $_POST['vari'];
    $vuosimalli = $_POST['vuosimalli'];
    $km = $_POST['km'];

    // Sisällytä tietokantayhteys
    include('conn.php');

    // Päivitä tiedot tietokantaan
    $kysely = "UPDATE autot SET valmistaja=?, malli=?, hinta=?, vari=?, vuosimalli=?, km=? WHERE rekisteri=?";
    $stmt = $yhteys->prepare($kysely);
    $stmt->execute([$valmistaja, $malli, $hinta, $vari, $vuosimalli, $km, $rekisteri]);

    // Ohjaa takaisin etusivulle
    header("Location: index.php");
    exit();
} else {
    // Jos lomakkeen kenttiä ei ole täytetty, näytä virheviesti
    echo "Kaikki lomakkeen kentät ovat pakollisia!";
}
?>
