<?php

namespace CraigWoodlandOW\LaravelMailLogging;

use \Swift_Events_SendEvent;
use \Swift_Plugins_MessageLogger;

class SwiftMailMessageLogging extends Swift_Plugins_MessageLogger
{
    /**
     * Invoked immediately after the Message is sent.
     */
    public function sendPerformed(Swift_Events_SendEvent $evt)
    {
        $file = fopen(storage_path('/logs/mail_' . date('Y-m-d_H-i-s') . '.log'), 'a+');
        fwrite($file, $evt->getMessage() . "\r\n\r\n");
        fclose($file);
    }
}
