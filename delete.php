<?php

require_once __DIR__ . '/lib.php';
$dir = __DIR__ . '/data';

$file = getArrayValue($_POST, 'name');

deleteFile($name, $dir);



require_once __DIR__ . '/form.php';