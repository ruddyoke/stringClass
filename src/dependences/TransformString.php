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

	function toUpperCase()
	{
		return strtoupper($this->string);
	}

	function toLowerCase()
	{
		return strtolower($this->string);
	}

	function ucfirst()
	{
		return ucfirst($this->string);
	}

	function ucwords()
	{
		return ucwords($this->string);
	}
}






























?>