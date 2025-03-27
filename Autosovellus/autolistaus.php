<?php
header("Access-Control-Allow-Origin: *");

include('conn.php');

try {
    $kysely = "SELECT Rekisteri, valmistaja, malli, hinta, vari, vuosimalli, km FROM autot ORDER BY valmistaja ASC";
    $data = $yhteys->query($kysely);

    $JSON = '{"autot":[';
    $laskuri = 0;

    while ($rivi = $data->fetch(PDO::FETCH_ASSOC)) {
        $JSON .= '{"Rekisteri":"' . $rivi['Rekisteri'] . '","Valmistaja":"' . $rivi['valmistaja'] . '","Malli":"' . $rivi['malli'] . '","Hinta":"' . $rivi['hinta'] . '","Vari":"' . $rivi['vari'] . '","Vuosimalli":"' . $rivi['vuosimalli'] . '","Km":"' . $rivi['km'] . '"}';
        $laskuri++;
        if ($laskuri < $data->rowCount()) $JSON .= ",";
    }

    $JSON .= "]}";

    // tiedoston käsittely
    $handler = fopen("data.json", "w");
    fwrite($handler, $JSON);
    fclose($handler);
} catch(PDOException $e) {
    echo "Virhe: " . $e->getMessage();
}
?>