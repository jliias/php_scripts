<?php
$fileName   = $_GET[fileName];

// verify the fileName is set and not empty
if (!isset($fileName) || $fileName == "") {
    echo "error";
    exit;
}

if (file_exists($fileName)) {
    echo "yes";
} else {
    echo "no";
}

?>
