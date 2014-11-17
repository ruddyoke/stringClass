<?php

namespace Roke\Dependences;

/**
* 
*/
class TransformString
{
	private $string;
	
	function __construct($string)
	{
		$this->string =$string;
	}

	function ucFirst()
	{
		return ucfirst($this->string);
	}

	function toUpperCase()
	{
		return strtoupper($this->string);
	}

	function toLowerCase()
	{
		return strtolower($this->string);
	}


}






























?>