<?php

namespace Factory\Logger;

use Illuminate\Support\Facades\Log;

class Logger
{
    public function info($message)
    {
        Log::info($message);
    }

    public function emergency($message)
    {
        Log::info($message);
    }

    public function debug($message)
    {
        Log::debug($message);
    }

    public function critical($message)
    {
        Log::critical($message);
    }

    public function warning($message)
    {
        Log::warning($message);
    }

    public function notice($message)
    {
        Log::notice($message);
    }

    public function error($message)
    {
        Log::error($message);
    }

    public function alert($message)
    {
        Log::alert($message);
    }
}