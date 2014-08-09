<?php
/**
 * SMS service 'news'
 */
header('Content-Type: text/html; charset=utf-8');

// http://fr.wikipedia.org/wiki/Personnalit%C3%A9_pr%C3%A9f%C3%A9r%C3%A9e_des_Fran%C3%A7ais
$sujets = array_filter(file(__DIR__.'/sujets.txt'), 'trim');


$verbes = array_filter(file(__DIR__.'/verbes.txt'), 'trim');

// http://ajustetitre.tumblr.com/
// http://www.7sur7.be/7s7/fr/1504/Insolite/index.dhtml
$complements = array_filter(file(__DIR__.'/complements.txt'), 'trim');

shuffle($sujets);
shuffle($verbes);
shuffle($complements);

echo "News : ".trim($sujets[0])." ".trim($verbes[0])." ".trim(lcfirst($complements[0]));
