<?php
/**
 * SMS script, 
 * return the list of commands
 */
header('Content-Type: text/html; charset=utf-8');

// Composer
require_once(__DIR__.'/../../sms/vendor/autoload.php');

// Uses
use ConstructionsIncongrues\Sms\SmsPi;

// Start stopwatch
$start = time();


//$config = json_decode(file_get_contents(__DIR__.'/../../config.json'));
//$smspi = new SmsPi($config);

// Get the list of services //
//$list=$smspi->serviceList();

$cmds=[];
$cmds[]="astro";
$cmds[]="blague";
$cmds[]="bondieu";
$cmds[]="cochise";
$cmds[]="dicton";
$cmds[]="heure";
$cmds[]="motivator";
$cmds[]="news";
$cmds[]="pardon";
$cmds[]="proverbe";
$cmds[]="sympa";
$cmds[]="synonyme";
/*
foreach ($list as $k => $r) {
    $cmds[] = $r['name'];
}
*/

die(implode(" ", $cmds));
