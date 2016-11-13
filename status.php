<?php 

$value = $_POST["load"];
$status;

    $starttime = microtime(true);
    // supress error messages with @
    $file      = @fsockopen($value, 80, $errno, $errstr, 10);
    $stoptime  = microtime(true);
    $status    = 0;

    if (!$file){
        $status = "OFFLINE";
        echo $status;
    } else {
        fclose($file);
        $status = "ONLINE";
        echo $status;
    }
    //return $status;
?>