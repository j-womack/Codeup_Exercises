<?php
class Log
{
    public $fileName;
    public function message($logLevel, $message)
    {
        date_default_timezone_set('America/Chicago');

        $message = date('Y-m-d') . "   " . date('H:i:s') . "   [{$logLevel}] $message";

        $handle = fopen($this->fileName, 'a');
        fwrite($handle, $message . PHP_EOL);
        fclose($handle);
    }
    public function info($info)
    {
        return $this->message("INFO", $info);
    }
    public function error($error)
    {
        return $this->message("ERROR", $error);
    }
}
?>