<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <title>Auton tiedot</title>
    </head>
    <body>
     <div class="container">
        <h1>Autot</h1>
        <a href="index.php">Takaisin listaan</a>
        <h2>Lisää auto</h2>
        <table class="table-bordered">
            <form action="uusiauto.php" method="POST">
                <tr>
                    <td>Rekisteri</td>
                    <td><input type="text" name="Rekisteri" required></td>
                </tr>
                <tr>
                    <td>Valmistaja</td>
                    <td><input type="text" name="valmistaja"></td>
                </tr>
                <tr>
                    <td>Malli</td>
                    <td><input type="text" name="Malli"></td>
                </tr>
                <tr>
                <td>hinta</td>
                    <td><input type="text" name="hinta"></td>
                </tr>
                    <td>Väri</td>
                    <td><input type="text" name="vari"></td>
                </tr>
                <td>Vuosimalli</td>
                    <td><input type="text" name="vuosimalli"></td>
                </tr>
                <td>Km</td>
                    <td><input type="text" name="km"></td>
                </tr>


                <tr>
                    <td></td>
                    <td><button name="talleta" type="submit" class="btn btn-success">Talleta</button></td>
                </tr>
            </form>
        </table>
     </div>
    </body>
</html>