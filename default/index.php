<?php
// default service 

$list = array_filter(file(__DIR__.'/database.txt'), 'trim');

shuffle($list);

echo htmlspecialchars_decode($list[array_rand($list)], ENT_QUOTES);
