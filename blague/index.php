<?php
/**
 * SMS script
 * Blagues courtes
 */
header('Content-Type: text/html; charset=utf-8');

$list = array_filter(file(__DIR__.'/blagues.txt'), 'trim');

shuffle($list);

die( $list[0] );
