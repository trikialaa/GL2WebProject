<?php
session_start();
if (!isset($_SESSION["logged_in"])) header('Location:login');
include("navbar.php");

?>

<?php require 'app/php/controlClass/Singlerooms.php'; ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Etat de Chambres</title>
    <link rel="stylesheet" href="app/css/globalstyle.css">
    <?php if (isset($_GET['selectstate'])) {
        if (!strcmp($_GET['selectstate'], 'ALL')) {
            echo "<link rel=\"stylesheet\" type=\"text/css\" href=\"app/css/table.css\">";
        }
    }
    ?>

    <link rel="stylesheet" type="text/css" href="app/css/modalForm.css">
    <script>
        var rooms_js =<?php echo json_encode(getRooms()); ?>;
        var date_in = "<?php echo $_GET['date_in'] ?>";
        var date_out = "<?php echo $_GET['date_out'] ?>";

    </script>
    <style type="text/css">
        input.button {
            background: #535c6b;
            color: white;
        }
    </style>
</head>
<body>

<div id="parentpage">

    <form method="get">
        <div id="dates">
            <input placeholder="Check-in date" type="text" onfocus="(this.type='date')" onblur="(this.type='text')"
                   id="date_in" name="date_in">

            <input placeholder="Check-out date" type="text" onfocus="(this.type='date')" onblur="(this.type='text')"
                   id="date_out" name="date_out">
            <select name="selectstate">
                <option value='ALL'>ALL</option>
                <option value='SINGLE'>SINGLE</option>
                <option value='DOUBLE'>DOUBLE</option>
            </select>

            <input type="submit" onclick='' value="Rafraichir" name="refresh" class="button"/>


        </div>
    </form>

    <?php
    if (isset($_GET['selectstate']))

        if (!strcmp($_GET['selectstate'], 'ALL')) {

            echo '<table align=\"center\" id=\"tblMain\" border=\"1\">
        <tr>
            <td>1</td>
            <td>2</td>
            <td>3</td>
            <td>4</td>
        </tr>
        <tr>
            <td>5</td>
            <td>6</td>
            <td>7</td>
            <td>8</td>
        </tr>
        <tr>
            <td>9</td>
            <td>10</td>
            <td>11</td>
            <td>12</td>
        </tr>
        <tr>
            <td>13</td>
            <td>14</td>
            <td>15</td>
            <td>16</td>
        </tr>

    </table>';


        } elseif (isset($_GET['selectstate']) && !strcmp($_GET['selectstate'], 'SINGLE')) {
            $rooms = $bdrm->getEmptyRoomsByType('SINGLE', $_GET['date_in'], $_GET['date_out']);

            echo "<table align='center' width='300px' border='0'>";
            echo "<tr style=\"background: #535c6b;color: white\"><td>ROOM NUMBER</td><td>CHECKIN</td></tr>";

            foreach ($rooms as $room) {
                echo "<tr><td>" . $room->CHAMBREID . "</td><td align='centre'><button style='width: 100px' onclick='redirect(" . $room->CHAMBREID . ",\"" . $room->TYPE . "\",\"" . $_GET['date_in'] . "\",\"" . $_GET['date_out'] . "\")'>checkin</button></td></tr>";
            }
            echo "</table>";


        } elseif (isset($_GET['selectstate']) && !strcmp($_GET['selectstate'], 'DOUBLE')) {
            $rooms = $bdrm->getEmptyRoomsByType('DOUBLE', $_GET['date_in'], $_GET['date_out']);

            echo "<table align='center' width='300px' border='0'>";
            echo "<tr style=\"background: #535c6b;color: white\"><td>ROOM NUMBER</td><td>CHECKIN</td></tr>";
            foreach ($rooms as $room) {
                echo "<tr><td>" . $room->CHAMBREID . "</td><td align='centre'><button style='width: 100px' onclick='redirect(" . $room->CHAMBREID . ",\"" . $room->TYPE . "\",\"" . $_GET['date_in'] . "\",\"" . $_GET['date_out'] . "\")>checkin</button></td></tr>";
            }
            echo "</table>";

        } ?>


    <!--
        <div id="checkin_dialogue" class="modal">
            <div class="modal-content">
                <span id="spanclose2" class="close">&times;</span>


                <form action="">

                    <div class="form-group">
                        <h2 class="heading" style="text-align: center">Check-in</h2>
                        <br>
                        <fieldset>
                            <h2 class="heading">Information de la réservation </h2>

                        </fieldset>
                    </div>


                    <p align="left">
                        <b>type id</b></p>
                    <div class="controls">
                        <select>
                            <option>CIN</option>
                            <option>N°passport</option>
                        </select>
                    </div>


                    <p align="left">
                        <b>Id Client: </b></p>
                    <div class="controls">
                        <p class="floatLabel" size="15">ici le cin recuperé</p>
                    </div>


                    <p align="left">
                        <b>Num Tel client</b></p>
                    <div class="controls">
                        <p class="floatLabel" size="15">ici le num tel recuperé</p>
                    </div>


                    <p align="left">
                        <b>Type chambre </b>
                        <div class="controls">
                    <p class="floatLabel" size="15">ici le type de chambre recuperé</p>
            </div>
            <p align="left">
                <b>Arrivé </b>
                <div class="controls">
            <p class="floatLabel" size="15">ici la DA recupérée</p>
        </div>
        <p align="left">
            <b>Départ </b>
            <div class="controls">
        <p class="floatLabel" size="15">ici la DD recupérée</p>
    </div>


    </fieldset>
    <br>
    <br>
    <br>
    <br>

    <h2 class="heading">Les details du check-in</h2>
    <div class="controls">
        <input type="text" id="name" class="floatLabel" name="name">
        <label for="name">Nom</label>
    </div>


    <div class="controls">
        <input type="text" id="email" class="floatLabel" name="email">
        <label for="email">Email</label>
    </div>

    <div class="grid">
        <div class="controls">
            <div class="controls">
                <input type="text" id="street" class="floatLabel" name="street">
                <label for="street">Adresse</label>
            </div>
        </div>

    </div>
    <div class="grid">
        <div class="col-2-3">
            <div class="controls">
                <input type="text" id="city" class="floatLabel" name="city">
                <label for="city">Ville</label>
            </div>
        </div>
        <div class="col-1-3">
            <div class="controls">
                <input type="text" id="post-code" class="floatLabel" name="post-code">
                <label for="post-code">Code Postal</label>
            </div>
        </div>
    </div>
    <div class="controls">
        <input type="text" id="country" class="floatLabel" name="country">
        <label for="country">Pays</label>
    </div>


    <div class="controls">
        <input readonly type="text" id="chambreid" class="floatLabel" name="chambreid">
        <label for="chambreid">Numéro de chambre</label>
    </div>

    <div>
        <button type="submit" value="Submit" class="col-1-4">Valider</button>
    </div>

    </div>

    <br>
    <br>
    <br>
    <br>

    </div>
    </form>


    </div>
    </div>
    </div> -->

    <?php
    include("foot.php");
    ?>
</body>
<?php if (isset($_GET['selectstate'])) {
    if (!strcmp($_GET['selectstate'], 'ALL')) {
        echo "<script src=\"app/js/table.js\"></script>";
    }
}
?>

<script type="text/javascript">
    function redirect(a, b, c, d) {

        var url = 'http://localhost:3000/CheckIn?chambreid=' + a + '&type=' + b + '&in=' + c + '&out=' + d;
        window.location.href = url;
    }
</script>
</html>