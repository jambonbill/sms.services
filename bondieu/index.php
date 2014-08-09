<?php
/**
 * SMS script
 * Une bondieuserie
 */
header('Content-Type: text/html; charset=utf-8');

$list = array_filter(file(__DIR__.'/bondieu.txt'), 'trim');

shuffle($list);

die( $list[0] );
