<?php
require_once __DIR__ . '/lib.php';
$name = getArrayValue($_POST, 'name');
$comment = getArrayValue($_POST, 'comment');
$file = getArrayValue($_GET, 'file');

if (empty($name) || empty($comment)) {
    die ('Required parameters are not exist');
}

$dir = __DIR__ . '/DATA';

//getUniqueFileName($dir, 'txt');
$content = serialize($_POST);
$file = saveToFile($content, $dir, $file);
header("Location: /contact/");
exit;
?>