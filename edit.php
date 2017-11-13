<?php

require_once __DIR__ . '/lib.php';
$dir = __DIR__ . '/data';

$file = getArrayValue($_GET, 'file');

if (empty($file)) {
    die ('Required params are not exists');
}

$comment = readSerializeFile($file, $dir);
$action = "/contact/save.php?file = {$file}";


require_once __DIR__ . '/form.php';
