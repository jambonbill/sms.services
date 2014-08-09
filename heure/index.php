<?php
/**
 * SMS service 'heure'
 * Retourne l'heure a peu près
 */
header('Content-Type: text/html; charset=utf-8');

$t = time();
$t+= rand(-2000, 2000);

$heure=date("H", $t);

$list=[];
$list[]="a vu de nez il est $heure h";
$list[]="a mon avis, il est $heure h";
$list[]="il doit etre a peu pret $heure h";
$list[]="il est a peu près $heure h";
$list[]="je crois qu'il est $heure h";
$list[]="la il doit etre autour de $heure h";

shuffle($list);

die($list[0]);
