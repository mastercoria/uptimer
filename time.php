<?php
$value = $_POST["load"];
$timeWithText = array();
$time = array();
$status = array();

    $starttime = microtime(true);
    // supress error messages with @
    $file      = @fsockopen($value, 80, $errno, $errstr, 7);
    $stoptime  = microtime(true);
    $status    = 0;

    if (!$file){
        $timeWithText = "Cannot connect";
        echo $timeWithText; 
    } else {
        fclose($file);
        $status = ($stoptime - $starttime) * 1000;
        $status = floor($status);
        $timeWithText = $status . " ms.";
        $status = "<b style='color:GREEN;''>ONLINE</b>"; 
        echo $timeWithText;
    }
    //return $status;
?>