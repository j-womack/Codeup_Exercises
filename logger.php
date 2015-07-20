<?php

function logMessage($logLevel, $message)
{
    date_default_timezone_set('America/Chicago');
    $date = date('Y-m-d');
    $time = date('H:i:s');
    $message = "[{$logLevel}] $message";

    $filename = "logs/log-{$date}.log";
    $handle = fopen($filename, 'a');
    fwrite($handle, $date . "   " . $time . "   " . $message . PHP_EOL);
    fclose($handle);
}

function logInfo($info) {
    return logMessage("INFO", $info);
}

function logError($error) {
    return logMessage("ERROR", $error);
}

logMessage("INFO", "This is an info message.");
logMessage("ERROR", "This is an error message.");

logInfo("Here's some info that I'm logging");
logError("Here's an error!");
