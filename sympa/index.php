<?php
/**
 * SMS service "Sympa"
 * Envois un message sympa
 */

//http://www.1messagedamour.com/search/label/SMS%20d%27amour#ixzz2yKQrV2Lv
//http://lesamoureuxdumonde.blogspot.fr/2012/02/sms-tu-me-manque.html
//http://www.adoskuat.com/article-ados-7071-25_sms_qui_lui_donneront_envie_de_decrocher_son_portable.html
//http://123smsdamour.blogspot.fr/2013/05/les-plus-beau-sms-damour.html
//http://123smsdamour.blogspot.fr/2013/06/beaux-sms-damour.html
//
header('Content-Type: text/html; charset=utf-8');

$database = array_filter(file(__DIR__.'/database.txt'), 'trim');

shuffle($database);

echo htmlspecialchars_decode($database[0], ENT_QUOTES);
