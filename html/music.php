<?php



print_r($_GET);
$action = $_GET['action'];

switch ($action) {
    case "Start":
        echo "Sarting 1";
        exec("mplayer http://online-radioroks2.tavrmedia.ua/RadioROKS_NewRock");
        echo "Sarting 2";
        break;
    case "Pause":
        break;
}


?>
    <form action="music.php" method="get">
        <input type="submit" name="action" value="Start">
        <input type="submit" name="action" value="Pause">
    </form>

<?php

?>