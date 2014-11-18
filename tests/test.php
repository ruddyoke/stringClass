<?php

require '../vendor/autoload.php';
use Roke\String;

//use utf-_ for output text.
ini_set('default_charset', 'UTF-8');

$a = new String("pèéè & è  - ç à ) % ù* 
ssd  
sqd	.");// testz mèée meet mtz
$b = new String("_concat me");
$c = new String("&&  _concat me   &&");
echo $a,'<br/>';
echo $a->bold(),'<br/>';
// echo $a->charAt(3),'<br/>';
// echo $a->charCodeAt(3),'<br/>';
echo $a->concat($b),'<br/>';
echo $a->italics(),'<br/>';

echo "index of é = ",$a->indexOf('é'),'<br/>';
echo $a->lastIndexOf('tz'),'<br/>';
echo $a->length(),'<br/>';
var_dump ($a->split(' '));

echo $c->trim('&'),'<br/>';
var_dump( $a->count->chars() );

echo 'ucfirst == ', $a->transform->ucfirst(),'<br/>';
echo 'ucwords == ', $a->transform->ucwords(),'<br/>';

echo $a->length(),'<br/>';
echo $a->length(),'<br/>';







?>