<?php

require "vendor/autoload.php";
use PHPHtmlParser\Dom;


$dom = new Dom;
$dom->loadFromUrl('https://www.idokep.hu/idojaras/Pecs');

//hétfő 


$a = $dom->find('.max-homerseklet-default')[0];
$a->text;

$b = $dom->find('.min-homerseklet-default')[0];
$b->text;


$h = intval ($a->text) - intval ($b->text);












?>