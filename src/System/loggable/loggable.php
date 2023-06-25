<?php
namespace System\Loggable;

trait Loggable
{
    public function log($msg)
    {
        $logFile = 'log_file.txt';
        $timestamp = date('d-m-y H:i:s');
        $logMessage = "[$timestamp] $msg\n";
        file_put_contents($logFile, $logMessage, FILE_APPEND);
    }
}