<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Autot</title>
</head>
<body>
    <div class="container">
        <br>
        <h1>Kaikki autot</h1>
        <br>
        <p><a href="lisaa_auto.php" class="btn btn-success">Lisää auto</a></p>

        <table class="table table-striped">
            <tr>                
                <th>Rekisteri</th>
                <th>Valmistaja</th>
                <th>Malli</th>
                <th>Hinta</th>
                <th>Väri</th>
                <th>Vuosimalli</th>
                <th>Km</th>
               
            </tr>

            <?php
            // Tietokantayhteys
            require 'conn.php';

            // Järjestetään autot valmistajan mukaan
            $kysely = "SELECT Rekisteri, valmistaja, Malli, hinta, vari, vuosimalli, km FROM autot ORDER BY valmistaja ASC";
            $data = $yhteys->query($kysely);

            if ($data->rowCount() > 0) {
                while ($auto = $data->fetch(PDO::FETCH_ASSOC)) {
            ?>
                    <tr>
                        <td><?php echo $auto['Rekisteri']; ?></td>
                        <td><?php echo $auto['valmistaja']; ?></td>
                        <td><?php echo $auto['Malli']; ?></td>
                        <td><?php echo $auto['hinta']; ?></td>
                        <td><?php echo $auto['vari']; ?></td>
                        <td><?php echo $auto['vuosimalli']; ?></td>
                        <td><?php echo $auto['km']; ?></td>
                        <td>
                        <a href="muokkaa.php?Rekisteri=<?php echo $auto['Rekisteri']; ?>"
                           class="btn btn-success">Muokkaa</a>
                        <td><a href="poista.php?Rekisteri=<?php echo $auto['Rekisteri']; ?>" class="btn btn-danger">Poista</a></td>
                    </tr>
            <?php
                }
            }
            ?>
        </table>
        <?php
        // Laske autojen lukumäärä tietokannassa
        $automaatti = $yhteys->query("SELECT COUNT(*) FROM auto")->fetchColumn();
        ?>
        <br> <br> <p>Autojen lukumäärä tietokannassa: <?php echo $automaatti; ?></p>
    </div>

  
    </form>
</body>
</html>
