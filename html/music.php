<?php



print_r($_GET);
$action = $_GET['action'];

switch ($action) {
    case "Start":
        echo "Sarting 1";
        exec("mplayer -slave -quiet http://online-radioroks2.tavrmedia.ua/RadioROKS_NewRock </dev/null >/dev/null 2>&1 &");
        echo "Sarting 2";
        break;
    case "Pause":
        exec("pkill mplayer");
        break;
}


?>
    <form action="music.php" method="get">
        <input type="submit" name="action" value="Start">
        <input type="submit" name="action" value="Pause">
    </form>

<?php

?>