<?php
/* Set e-mail recipient */
//$myemail  = 'sylke-scheduikat@t-online.de';
$myemail  = 'tom.scheduikat@gmail.com';

/* Check all form inputs using check_input function */
$Vorname = check_input($_POST['firstName'], "Bitte Vorname eingeben");
$Nachname = check_input($_POST['lastName'], "Bitte Nachname eingeben");
$email    = check_input($_POST['userEmail'], "Bitte Email eintragen");
$Telefon  = check_input($_POST['userPhone'], "Bitte ihre Telefonnummer eintragen");
$Erw   = check_input($_POST['Erw'], " Bitte die Anzahl der Erwachsenen anklicken");
$Kinder = check_input($_POST['Kind'], "Bitte die Anzahl der Kinder anklicken");
$Anreise = check_input($_POST['Anreise'], "Bitte Anreise anngeben");
$Abreise = check_input($_POST['Abreise'], "Bitte Abreise angeben");
$Haustier = check_input($_POST['Haustier'], "Haben sie Haustiere?");
$FeWo = check_input($_POST['FeWo'], "FeWo");
$Kommentar = check_input($_POST['userMsg']);
$subject = "$FeWo Anfrage";
/* Let's prepare the message for the e-mail */
$message = "
Buchungsanfrage $FeWo

Vorname: $Vorname
Nachname: $Nachname
E-mail: $email
Telefon: $Telefon

Erwachsene: $Erw
Kinder: $Kinder
Haustiere: $Haustier

Anreise: $Anreise
Abreise: $Abreise

Kommentar:
$Kommentar

";

/* Send the message using mail() function */
mail($myemail, $subject, $message);

///* Redirect visitor to the thank you page */
//header('Location: danke.html');
//exit();

/* Functions we used */
?>
<?php
function check_input($data, $problem='')
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    if ($problem && strlen($data) == 0)
    {
//        show_error($problem);
    }
    return $data;
}


?>
<!DOCTYPE HTML>
<html>
<head>
    <title>The Agro-Farm Website Template | Home :: w3layouts</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link href='http://fonts.googleapis.com/css?family=Engagement' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Julius+Sans+One' rel='stylesheet' type='text/css'>
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
    <!--start slider -->
    <script type='text/javascript' src="js/jquery.min.js"></script>
    <script type='text/javascript' src="js/jquery.mobile.customized.min.js"></script>
    <script type='text/javascript' src="js/jquery.easing.1.3.js"></script>
</head>
<body>
<iframe width="100%" height="480" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"
        src="https://maps.google.com/maps?layer=c&amp;panoid=1cHZwTAztrIAAAQWmqcHjQ&amp;ie=UTF8&amp;source=embed&amp;output=svembed&amp;cbp=13%2C0%2C%2C0%2C0"></iframe>
<div class="header_bg">
    <div class="wrap">
        <div class="wrapper1">
            <div class="menu">
                <ul class="top-nav">
                    <li  class="active"><a href="index.html">START</a></li>
                    <li><a href="loggia.html">FEWO LOGGIA</a></li>
                    <li><a class="hsubs" href="terrasse.html">FEWO TERRASSE</a></li>
                    <li><a href="umgebung.html">UMGEBUNG</a></li>
                    <div class="clear"></div>
                </ul>
                <div class="clear"></div>
            </div>
        </div>
    </div>
</div>
<!-- start main -->
<div class="main_bg">
    <div class="wrap">
        <div class="wrapper">
            <div class="main">
                <div class="content">
                    <!-- start header -->
                    <a href="index.html"><h2>Vielen Dank!</h2></a>
                </div>
                <h2 class="style">Wir werden Sie schnellstmöglich kontaktieren!</h2>
            </div>
            <div class="clear"></div>
        </div>
    </div>
    <!-- start footer -->
    <div class="footer_bg">
        <div class="wrap">
            <div class="wrapper">
                <div class="footer">
                    <ul class="f_nav">
                        <li><a href="mailto:sylke-scheduikat@t-online.de">sylke-scheduikat@t-online.de</a></li>
                    </ul>
                    <div class="f_call">
                        <h3>: 038391 / 89572</h3>
                    </div>
                    <div class="clear"></div>
                    <h2><a href="index.html">Zeit zum Träumen</a></h2>
                    <div class="copy">
                        <p class="w3-link">© All Rights Reserved </p>
                    </div>
                </div>
            </div>
            <div class="clear"></div>
        </div>
    </div>
</div>
<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-50503516-1', 'fewo-traumzeit.de');
    ga('send', 'pageview');

</script>
</body>
</html>