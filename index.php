<?php
  require_once 'vendor/autoload.php';
print __DIR__  . PHP_EOL;
chdir('vendor/piwik/piwik');
print getcwd() . PHP_EOL;
print __DIR__  . PHP_EOL;
//phpinfo();
require_once 'vendor/piwik/piwik/index.php';
