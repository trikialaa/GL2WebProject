<?php
session_start();
if (!isset($_SESSION["logged_in"])) header('Location:login'); //verification si admin connecté
include("navbar.php");

?>

<!DOCTYPE html>
<html>
<head>

    <meta charset="UTF-8">
    <title>Reservation</title>

    <link rel="stylesheet" href="app/css/font-awesome.css">
    <link href='app/css/css.css' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="app/css/icon.css">

    <link rel="stylesheet" href="app/css/form_check_in.css">

</head>
<body>
<form method="POST" action="app/php/controlClass/Reservation.php" >
    <div class="form-group">
        <h2 class="heading">Effectuer réservation</h2>
        <div class="controls">
            <b> <i class="material-icons">person</i> &nbsp;&nbsp;Nom </b>
            <input type="text" id="nom" class="floatLabel" name="nom" placeholder="Nom" required>
        </div>
        <div class="controls">
            <b> <i class="material-icons">person</i> &nbsp;&nbsp;Prénom </b>
            <input type="text" id="prenom" class="floatLabel" name="prenom" placeholder="Prénom" required>
        </div>


        <div class="controls">
            <b> <i class="material-icons">person</i> Type </b>
            <select class="floatLabel" name="idtype" id="idtype">
                <option value="CIN">CIN</option>
                <option value="Passeport">Passeport</option>
            </select>
        </div>


        <div class="controls">
            <b> <i class="material-icons">person</i> &nbsp;&nbsp; Numéro ID </b>
            <input type="text" id="idnumber" class="floatLabel" name="idnumber" placeholder="CIN/Passeport" required>
        </div>

        <div class="controls">
            <b> <i class="material-icons">phone</i> &nbsp;&nbsp; Numéro Téléphone client</b>
            <input type="tel" id="phone" class="floatLabel" name="phone" placeholder="Téléphone">
        </div>

    </div>

    <div class="grid">

        <div class="col-1-4 col-1-4-sm">
            <div class="controls">
                <b> <i class="fa fa-calendar"></i>&nbsp;&nbsp;Arrivé </b>
                <input type="date" id="datearr" class="floatLabel" name="datearr" value="<?php echo date('Y-m-d'); ?>">

            </div>
        </div>
        <div class="col-1-4 col-1-4-sm">
            <div class="controls">
                <b> <i class="fa fa-calendar"></i>&nbsp;&nbsp;Départ </b>
                <input type="date" id="datedepp" class="floatLabel" name="datedepp"
                       value="<?php echo date('Y-m-d'); ?>"/>

            </div>
        </div>
    </div>
    <div class="controls">
        <b> <i class="fa fa-home"></i>&nbsp;&nbsp;Room Number</b>
        <input type="number" id="roomnumber" name="roomnumber" placeholder="Room Number" required>
    </div>
    <div class="grid">
        <button type="submit" value="Submit" class="col-1-4">Valider</button>
    </div>

</form>
<script src="app/php/controlClass/Reservation.php"></script>

</body>
</html>