<?php

use CowSay\Cow;

require_once __DIR__ . '/vendor/autoload.php';

$bessie = new Cow('Hello, Farm!');
$bessie->setEyes('oO')
    ->setTongue('U')
    ->setPoop('@@@')
    ->setUdder('W');
echo $bessie;

$percy = new Cow('Im dying');
$percy->setEyes('oO')
    ->setTongue('w');

echo $percy;