<?php

namespace CraigWoodlandOW\LaravelMailLogging;

use \Swift_Plugins_Logger;

class MailLogging implements Swift_Plugins_Logger
{
    public function add($entry)
    {
		$file = fopen(storage_path('/logs/mail_' . date('Y-m-d_H-i-s') . '.log'), 'a+');
        fwrite($file, get_class($entry) . "\r\n\r\n");
        fclose($file);
    }

    public function clear()
    {
        //
    }

    public function dump()
    {
        //
    }
}
