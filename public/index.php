<?php
require __DIR__ . "/../vendor/autoload.php";

Use eftec\bladeone\BladeOne;

$views = __DIR__ . '/../src/views';
$cache = __DIR__ . '/../storage/cache';
// Blade mode(optional): 1=forced (test),2=run fast (production), 0=automatic, default value.
$blade = new BladeOne($views,$cache, BladeOne::MODE_AUTO);
//pass config parameters to blade view
$config = include(__DIR__ . "/../config/app.php");

echo $blade->run("index", array('showTopNav'=> true, 'config' => $config));