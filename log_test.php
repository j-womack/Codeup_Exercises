<?php  

require_once 'Log.php';

$date = date('Y-m-d');
$log = new Log();

$log->message("INFO", "This is an info message.");
$log->info("Here's some info that I'm logging");
$log->error("Here's an error!");

unset($log);

?>