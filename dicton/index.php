<?php
/**
 * Dictons
 */
header('Content-Type: text/html; charset=utf-8');

//$database = file(__DIR__.'/dictons.txt');
$database=array_filter(file(__DIR__.'/dictons.txt'), 'trim');
shuffle($database);
echo htmlspecialchars_decode($database[0], ENT_QUOTES);
