<?php
/**
 * SMS service "Pardon"
 * Envois un message pour se faire pardonner
 */

# http://www.textesms.fr/sms-pour-s-excuser-demander-pardon.php

header('Content-Type: text/html; charset=utf-8');

$database = array_filter(file(__DIR__.'/pardons.txt'), 'trim');

shuffle($database);

echo htmlspecialchars_decode($database[0], ENT_QUOTES);
/*
function filter($str)
{
    return trim($str);
}
*/
