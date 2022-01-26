<?php

namespace App\Exceptions;

use Exception;

class CompanionPluginNotAvailable extends Exception
{
    /**
     * Create a new exception instance.
     *
     * @param string $plugin The slug or name of the missing plugin.
     */
    public function __construct(string $plugin, $code = 0, \Throwable $previous = null)
    {
        $message = "The {$plugin} plugin is not installed or activated.";
        parent::__construct($message, $code, $previous);
    }
}
