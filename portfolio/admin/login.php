<?php
    require_once ('adminheader.php');
?>

<?php
/* Sessie starten */
session_start();

/* Kijken of de submit knop is ingedrukt */
if(isset($_POST['Submit'])){
    /* Benoem de naam en het wachtwoord */
    $login = array('Admin' => 'Fontys123');

    /* Opgegeven naam en wachtwoord opslaan in een veriabel. */
    $naam = isset($_POST['naam']) ? $_POST['naam'] : '';
    $wachtwoord = isset($_POST['wachtwoord']) ? $_POST['wachtwoord'] : '';

    /* Naam en wachtwoord controleren */
    if (isset($login[$naam]) && $login[$naam] == $wachtwoord){
        /* Correct: Doorsturen naar adminpagina in beveiligdepagina */
        $_SESSION['UserData']['naam']=$login[$naam];
        header("location:adminpagina.php");
        exit;
    } else {
        /*Niet correct: Melding maken */
        $msg="<div class='col-xs-12'><p class='error' id='inlogerror'>Gebruikersnaam of wachtwoord is incorrect.</p></div>";
    }
}
?>

<!-- Inlogformulier -->
<html>
    <body>
        <div class="container text-center">
            <div class="col-xs-12">
                <h1>Stan CMS</h1>
                <p>Versie 1.8.1</p>

                <?php if(isset($msg)){
                    echo $msg;
                }
                ?>
            </div>

            <div class="col-xs-12">
                <form action="" method="post" name="Login_Form">
                    <p>
                        <label  class="inloglabel">Gebruikersnaam</label>
                        <input name="naam" type="text" class="Input" />
                    </p>

                    <p>
                        <label  class="inloglabel">Wachtwoord</label>
                        <input name="wachtwoord" type="password" class="Input" />
                    </p>

                    <p>
                        <input name="Submit" type="Submit" value="Login" class="btn btn-default" />
                    </p>

                    <p>
                        <label><a href="../index.php"><p>Geen admin? Klik hier om terug te gaan.</p></a></label>
                        <label><a href="Changelog.html"><p>Changelog</p></a></label>
                    </p>
                </form>
            </div>
        </div> <!-- Container -->
    </body>
</html>