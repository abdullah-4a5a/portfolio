<!doctype html>

<html>
    <head>
        <title>Contact</title>
        <link rel="stylesheet" type="text/css" href="css/contact.css" media="all">
        <link rel="stylesheet" type="text/css" href="css/responsive.css" media="all">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="Content-type" content="text/html; charset=UTF-8">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<style>

</style>
</head>

<body>
    <div class="container">
        <main>
        <center>
            <div id="positie">
            <div id="headerPicture">
                <div class="backgroundTrans"><h1>Gratis-informatie.nl</h1></div>
                <div class="categoryName"><h3>Contact</h3></div>
            </div>
                <div class="menu">
                      <a class= "specialeLink" href="index.php"><button>Startpagina</button></a>
                      <a class= "specialeLink" href="#"><button>Meer info</button></a>
                      <a class= "specialeLink" href="contact.php"><button>Contact</button></a>
                      <a class= "specialeLink" href="#"><button>Link</button></a>
                      <a class= "specialeLink" href="#"><button>Link</button></a>
                </div>
            </div>
            <img id="plaatje" src="http://www.sbaf.net/images/gratiss.png" width="200px" height="100px">  
        <div id="contact">
<?php
  if (isset($_REQUEST['email']))  {
  
  //Email info
  $admin_email = "abdullahpamuk61.ap@gmail.com";
  $geslacht = $_REQUEST['geslacht'];
  $email = $_REQUEST['email'];
  $naam = $_REQUEST['naam'];
  $telefoonnummer = $_REQUEST['telefoonnummer'];
  $postcode = $_REQUEST['postcode'];
  $adres = $_REQUEST['adres'];
  $woonplaats = $_REQUEST['woonplaats'];
  $opmerking = $_REQUEST['opmerking'];

 $all=
"geslacht: ".$geslacht."\r\
".
"naam: ".$naam."\r\
".
"telefoonnummer: ".$telefoonnummer."\r\
".
"postcode: ".$postcode."\r\
".
"adres: ".$adres."\r\
".
"woonplaats: ".$woonplaats."\r\
".
"opmerking: ".$opmerking."\r\
";

  mail($admin_email, $onderwerp, $all, "Van: " . $email);
  

  echo "<h3>Verzonden!</h3>";
  }
  
  else  {
?>
            <form method="post" id="formulier">
                <h3 id="titelFormulier">Contact</h3>
                <div class="tekst">
                    <p>Geslacht:</p> <br>
                    <input class="radio" type="radio" name="geslacht" value="Man"> Man
                    <input class="radio" type="radio" name="geslacht" value="Vrouw"> Vrouw
                </div>
                <div class="tekst">
                    <p>Postcode:</p>
                    <input type="text" name="postcode" value="">
                </div>
                <div class="tekst">
                    <p>Naam:</p>
                    <input type="text" name="naam" value="">
                </div>
                <div class="tekst">
                    <p>Telefoonnummer:</p>
                    <input type="number" name="telefoonnummer" value="">
                </div>
                <div class="tekst">
                    <p>Adres:</p>
                    <input type="text" name="adres" value="">
                </div>
                <div class="tekst">
                    <p>email:</p>
                    <input type="email" name="email" min="0" max="0" maxlength="30" value="">
                </div>
            <div class="tekst">
              <p>Woonplaats:</p>
              <input type="text" name="woonplaats" maxlength="50" value="">
            </div>
            <div class="tekst">
	            <p>Opmerking:</p>
                <textarea maxlength="250" id="commentaar" name="opmerking" rows="1" cols="15s">
                </textarea>
            </div>
            <div id="verzend">
                <input id="verzend" type="submit" value="Verzend">
            </div>
           </form>
        </div>
        </center>
<?php
  }
?>

<div id="footer"></div>

<script type="text/javascript">
    function verzend(){

alert('Verzonden')

}

</script>
<script type="text/javascript">
    $(function () {
        $("#footer").load("footer.html");
        });
</script>


</body>
</html>