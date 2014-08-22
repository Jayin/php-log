<?php
require_once 'Logger.php';

$l  = new Logger('log.txt');
$a = array(
    'nice' => 1
);
//$l->clean();
$l->d( $a);