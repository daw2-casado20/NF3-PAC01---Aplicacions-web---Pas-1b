<?php
require_once('class.Config.php');
require_once('class.Logger.php');

//Again, the implementation of this class is left to the user, but an
//example of how it could work will be provided in the code download
//that accompanies the book on wrox.com
$obj = new Config();

$obj->addConfig('LOGGER_FILE', 'C:/logs/prova.log');
$obj->addConfig('LOGGER_LEVEL', 75);

$lg1 = new Logger($obj);
$log = $lg1->getInstance();

  if(isset($_GET['fooid'])) {
    //not written to the log - the log level is too high
    $log->logMessage('A fooid is present', 100);
     //LOG_INFO is the default so this would get printed
    $log->logMessage('The value of fooid is ' .  $_GET['fooid']);
  } else {
    //This will also be written, and includes a module name
    $log->logMessage('No fooid supplied', 5, "Foo Module");
    
   
}
?>
