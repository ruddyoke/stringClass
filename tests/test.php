<?php

require '../vendor/autoload.php';
use Roke\String;

$a = new String("testz me meet mtz");
$b = new String("_concat me");
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

echo $a->length(),'<br/>';
echo $a->length(),'<br/>';
echo $a->length(),'<br/>';
echo $a->length(),'<br/>';
echo $a->length(),'<br/>';







?>