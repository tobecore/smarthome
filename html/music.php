<?php



print_r($_GET);
$command = $_GET['text'];

$radiostations_arr = [
    "rock" => "http://online-radioroks2.tavrmedia.ua/RadioROKS_NewRock",
    "dance" => "http://online-kissfm.tavrmedia.ua/KissFM_Live",
    "rap" => "http://192.96.205.59:7660/listen.pls?sid=1"
];

var_dump($radiostations_arr["dance"]);

function parseCommand($command){
    if (isset($radiostations_arr[$command])) {
        runStation($radiostations_arr[$command]);
    } else {
        printMessage("No such channel");
    }
    if ($command == "stop") {
        exec("pkill mplayer");
    }
}

function runStation ($link){
    $wrappedLink = stationLinkWrapper($link);
    exec($wrappedLink);
}

function stationLinkWrapper ($link) {
    return "mplayer -slave -quiet ".$link." </dev/null >/dev/null 2>&1 &";
}

function printMessage ($text) {
    echo "<BR>";
    echo $text;
    echo "<BR>";
}



parseCommand($command);


?>
    <form action="music.php" method="get">
        <input type="text" name="text">
        <input type="submit" name="action" value="Start">
    </form>

<?php

?>