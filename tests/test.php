<?php

$a='rudddy';
echo $a{0}, '<br/>';

$keywords = preg_split("/.{3}/", "langage hypertexte,    ,  programmation");
var_dump($keywords);












require '../vendor/autoload.php';
use Roke\String;


$a = new String("ruddy");
var_dump($a->split('dd'));


//use utf-_ for output text.
ini_set('default_charset', 'UTF-8');

$a = new String("testz mèée meet mtz");
$b = new String("_concat me");
$c = new String("&&  _concat me   &&");
echo $a,'<br/>';
echo $a->bold(),'<br/>';
echo $a->charAt(3),'<br/>';
echo $a->charCodeAt(3),'<br/>';
echo $a->concat($b),'<br/>';
echo $a->italics(),'<br/>';

echo $a->indexOf('tz'),'<br/>';
echo $a->lastIndexOf('tz'),'<br/>';
echo $a->length(),'<br/>';
var_dump ($a->split(' '));

echo $a->transform->ucFirst(),'<br/>';
echo $c->trim('&'),'<br/>';
var_dump( $a->count->chars() );
echo $a->length(),'<br/>';
echo $a->length(),'<br/>';







?>