<?php
/**
 * Created by PhpStorm.
 * User: Zeineb
 * Date: 4/18/2018
 * Time: 3:00 PM
 */
?>
<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>CheckIn</title>
  <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
<link href='https://fonts.googleapis.com/css?family=Lato:300,400' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

      <link rel="stylesheet" href="css/form_check_in.css">


</head>

<body>


<form action="">
  <!--  General -->
  <div class="form-group">
    <h2 class="heading"  style="text-align: center" >Check-in</h2>
      <br>
      <fieldset>
          <h2 class="heading">Information de la réservation </h2>

          <p align="left">
              <b> <i class="material-icons">person</i> &nbsp;&nbsp; Cin Client: </b>
              <div class="controls">
          <p class="floatLabel" size="15">ici le cin  recuperé</p>
      </div>
    <p align="left">
          <b> <i class="material-icons">phone</i> &nbsp;&nbsp; Num Tel client</b>
    <div class="controls">
        <p class="floatLabel" size="15">ici le num tel  recuperé</p>
    </div>
    <p align="left">
        <b > <i class="fa fa-home"></i>&nbsp;&nbsp;Type chambre </b>
        <div class="controls">
    <p class="floatLabel" size="15" >ici le type de  chambre  recuperé</p>
    </div>
    <p align="left">
        <b> <i class="fa fa-calendar"></i>&nbsp;&nbsp;Arrivé </b>
        <div class="controls">
    <p class="floatLabel" size="15">ici la DA recupérée</p>
    </div>
    <p align="left">
        <b> <i class="fa fa-calendar"></i>&nbsp;&nbsp;Départ </b>
        <div class="controls">
    <p class="floatLabel" size="15">ici la DD recupérée</p>
    </div>


      </fieldset>
    <br>
    <br>
    <br>
    <br>

    <h2 class="heading">Les details du chec-in</h2>
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
    <p align="left">
        <b> <i class="material-icons">home</i> &nbsp;&nbsp; Choisir une chambre : </b>
        <br>
        <br>
        <div class="controls">
    <a href="Singlerooms.php"><p class="floatLabel" size="15">Map chambres</p> </a>
    </div>

  </div>

          <br>
          <br>
          <br>
          <br>
       <div>
          <button type="submit" value="Submit" class="col-1-4">Valider</button>
      </div>
  </div> <!-- /.form-group -->
</form>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='http://raw.githubusercontent.com/andiio/selectToAutocomplete/master/jquery-ui-autocomplete.js'></script>
<script src='http://raw.githubusercontent.com/andiio/selectToAutocomplete/master/jquery.select-to-autocomplete.js'></script>
<script src='http://raw.githubusercontent.com/andiio/selectToAutocomplete/master/jquery.select-to-autocomplete.min.js'></script>



    <script  src="js/form_check_in.js"></script>




</body>

</html>
