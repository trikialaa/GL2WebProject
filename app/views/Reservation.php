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

    <link rel="stylesheet" href="app/css/globalstyle.css">

</head>
<body>
<form method="POST" action="app/php/controlClass/Reservation.php" >
    <div class="form-group">
        <h2 class="heading">Effectuer réservation</h2>
        <div class="controls">
            <b>Nom </b>
            <input type="text" id="nom" class="floatLabel" name="nom" placeholder="Nom" required>
        </div>
        <div class="controls">
            <b>Prénom </b>
            <input type="text" id="prenom" class="floatLabel" name="prenom" placeholder="Prénom" required>
        </div>


        <div class="controls">
            <b>Type </b>
            <select class="floatLabel" name="idtype" id="idtype">
                <option value="CIN">CIN</option>
                <option value="Passeport">Passeport</option>
            </select>
        </div>


        <div class="controls">
            <b>Numéro ID </b>
            <input type="text" id="idnumber" class="floatLabel" name="idnumber" placeholder="CIN/Passeport" required>
        </div>

        <div class="controls">
            <b>Numéro Téléphone client</b>
            <input type="tel" id="phone" class="floatLabel" name="phone" placeholder="Téléphone">
        </div>
        <div class="controls">
            <b>Email </b>
            <input type="text" id="email" class="floatLabel" name="email" placeholder="Email" required>
        </div>

    </div>

    <div class="grid">

        <div class="col-1-4 col-1-4-sm">
            <div class="controls">
                <b>Arrivé </b>
                <input type="date" id="datearr" class="floatLabel" name="datearr" value="<?php echo date('Y-m-d'); ?>">

            </div>
        </div>
        <div class="col-1-4 col-1-4-sm">
            <div class="controls">
                <b>Départ </b>
                <input type="date" id="datedepp" class="floatLabel" name="datedepp"
                       value="<?php echo date('Y-m-d'); ?>"/>

            </div>
        </div>
    </div>
    <div class="controls">
        <b>Numéro de la chambre</b>
        <input type="number" id="roomnumber" name="roomnumber" placeholder="Numéro de la chambre" required>
    </div>
    <div class="grid">
        <button type="submit" value="Submit" class="col-1-4">Valider</button>
    </div>

</form>
<?php
include("foot.php");
?>
<script src="app/php/controlClass/Reservation.php"></script>

</body>
</html>