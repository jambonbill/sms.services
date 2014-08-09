<?php
/**
 * SMS Motivator
 */
header('Content-Type: text/html; charset=utf-8');

$list = array_filter(file(__DIR__.'/database.txt'), 'trim');

shuffle($list);

die( $list[0] );
