<?php

namespace CraigWoodlandOW\LaravelMailLogging;

use \Swift_Plugins_Logger;

class SwiftMailServerLogging implements Swift_Plugins_Logger
{
    public function add($entry)
    {
		$file = fopen(storage_path('/logs/mail_' . date('Y-m-d') . '.log'), 'a+');
        fwrite($file, $entry . "\r\n\r\n");
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
