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

	/**
	*  Make a string's first character uppercase
	*/
	function ucfirst()
	{
		return ucfirst($this->string);
	}

	/**
	*  Make a string's first character uppercase
	*/
	function mbUcfirst()
	{
		return mb_convert_case(Auth::user()->firstname, MB_CASE_TITLE, 'UTF-8');
	}

	/**
	* Uppercase the first character of each word in a string
	*/
	function ucwords()
	{
		return ucwords($this->string);
	}
}






























?>
