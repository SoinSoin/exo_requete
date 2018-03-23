
    <!DOCTYPE html>
    <html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Page Title</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" media="screen" href="css/main.css" />
      
    </head>

    <body>


<form method="post">


</form>
<input type="button" value="Nom Prenom"  id="bouton" class="btn btn-primary" data-toggle="modal" data-target="#oua" data-recupbtn="nomPren">
<input type="button"  value="genremusical" id="bouton" class="btn btn-primary" data-toggle="modal" data-target="#oua" data-recupbtn="genre">
<input type="button"  value="les 20 premiers" id="bouton" class="btn btn-primary" data-toggle="modal" data-target="#oua" data-recupbtn="20premiers">
<input type="button" value="carte fidelite" id="bouton" class="btn btn-primary" data-toggle="modal" data-target="#oua" data-recupbtn="fidelite">
<input type="button" value="nom M" id="bouton" class="btn btn-primary" data-toggle="modal" data-target="#oua" data-recupbtn="nomM">
<input type="button" value="Spectacles" id="bouton" class="btn btn-primary" data-toggle="modal" data-target="#oua" data-recupbtn="spectacles">


<div class="modal fade bd-example-modal-lg" id="oua" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" id="nomPren">
        
      </div>
    </div>
    </div>
    </div>


<form method="post">
<input type="submit" name="caca" value="thomas le gros batard">
<?php

$connect = mysqli_connect("127.0.0.1", "root", "1a2b3c4D", "colyseum");
mysqli_set_charset($connect, 'utf8');

$query = "SELECT firstName, lastName FROM clients";
$lole = mysqli_query($connect, $query);

if( isset($_POST['caca']) && !empty($_POST['caca'])){
while ($row = mysqli_fetch_array($lole)) 
{
    $name =  $row["firstName"] . $row ["lastName"];
    echo$name;
    }
}


?>

</form>









    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <script src="app.js"></script>
    </body>

    </html>