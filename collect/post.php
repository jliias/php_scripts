<?php
/** Read in a time, player and action and save them to a file. */
// read variables from POST data.
$time     = $_GET[time];
$player   = $_GET[player];
$action   = $_GET[action];
$filename = $_GET[filename];

// verify the time is set and not empty
if (!isset($time) || $time == "") {
    echo "no time";
    exit;
}

// verify the player is set and not empty
if (!isset($player) || $player == "") {
    echo "no player";
    exit;
}

// verify the action is set and a number
if (!isset($action) || $action == "") {
    echo "bad action";
    exit;
}

// verify the filename is set and not empty
if (!isset($filename) || $filename == "") {
    echo "no filename";
    exit;
}

// format as a comma delimited row
$entry = $time . ";" . $player . ";" . $action . chr(0x0D).chr(0x0A) ;

// append entry to the score file
if (!file_put_contents($filename, $entry, FILE_APPEND)) {
    echo "failed to write"; // failed to write to file
    exit;
}

echo "success";
?>