<?php
function create($dataname, $datapassword, $dataimage) {
    $name = $dataname ."\n";
    $password = $datapassword ."\n";
    $image = $dataimage;
    $csvFile = fopen("info.csv", 'w') or die('Unable to open File');
    fwrite($csvFile, $name);
    fwrite($csvFile, $password);
    fwrite($csvFile, $image);
    fclose($csvFile);
}
?>