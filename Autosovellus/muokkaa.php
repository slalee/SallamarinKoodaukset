<?php

include('autolistaus.php');

if(isset($JSON) && !empty($JSON)) {
    // Muunnetaan JSON-data PHP-taulukoksi
    $autot = json_decode($JSON, true);
    ?>
    <!DOCTYPE html>
    <html>
    <head>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <title>Muokkaa autoa</title>
    </head>
    <body>
    <div class="container">
        <h1>Muokkaa autoa</h1>
        <?php
        // Haetaan auton tiedot rekisterinumeron perusteella
        $rekisteri = $_GET['Rekisteri'];
        $auto = null;
        foreach ($autot['autot'] as $a){
            if ($a['Rekisteri'] == $rekisteri) {
                $auto = $a;
                break;
            }
        }

        if ($auto) {
            ?>
            <form action="paivitys.php" method="POST">
    
                <input type="hidden" name="rekisteri" value="<?php echo $auto['Rekisteri']; ?>">
                <div class="mb-3">
                    <label for="rekisteri" class="form-label">Rekisteri</label>
                    <input type="text" class="form-control" id="rekisteri" name="rekisteri" value="<?php echo $auto['Rekisteri']; ?>">
                </div>
                <div class="mb-3">
                    <label for="valmistaja" class="form-label">Valmistaja</label>
                    <input type="text" class="form-control" id="valmistaja" name="valmistaja" value="<?php echo $auto['Valmistaja']; ?>">
                </div>
                <div class="mb-3">
                    <label for="malli" class="form-label">Malli</label>
                    <input type="text" class="form-control" id="malli" name="malli" value="<?php echo $auto['Malli']; ?>">
                </div>
                <div class="mb-3">
                    <label for="hinta" class="form-label">Hinta</label>
                    <input type="text" class="form-control" id="hinta" name="hinta" value="<?php echo $auto['Hinta']; ?>">
                </div>
                <div class="mb-3">
                    <label for="vari" class="form-label">Väri</label>
                    <input type="text" class="form-control" id="vari" name="vari" value="<?php echo $auto['Vari']; ?>">
                </div>
                <div class="mb-3">
                    <label for="vuosimalli" class="form-label">Vuosimalli</label>
                    <input type="text" class="form-control" id="vuosimalli" name="vuosimalli" value="<?php echo $auto['Vuosimalli']; ?>">
                </div>
                <div class="mb-3">
                    <label for="km" class="form-label">Kilometrit</label>
                    <input type="text" class="form-control" id="km" name="km" value="<?php echo $auto['Km']; ?>">
                </div>
                <button type="submit" class="btn btn-primary">Tallenna muutokset</button>
            </form>
            <?php
        } else {
            echo "<p>Autoa ei löytynyt.</p>";
        }
        ?>
    </div>
    </body>
    </html>
    <?php
} else {
    echo "Autoja ei löytynyt.";
}
?>