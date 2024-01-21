<?php

use Monolog\Level;
use Monolog\Logger;
use Monolog\Handler\StreamHandler;
require __DIR__.'/vendor/autoload.php';

// create a log channel
$log = new Logger('Maharah');
$log->pushHandler(new StreamHandler('path/to/your.log', Level::Warning));

// add records to the log
$log->warning('Foo');
$log->error('Bar');
?>