<?php

namespace Roke;

/**
* 
*/
class String
{
	protected $string;
	function __construct($string)
	{
		$this->string = nl2br($string);
	}

	function __toString()
	{
		return $this->string;
	}

	function bold()
	{
		return "<b>{$this->string}</b>";
	}

	function charAt($position)
	{
		$array = str_split($this->string);
		return $array[$position];
	}

	function charCodeAt($position)
	{
		return ord($this->charAt($position));
	}

	function concat($string)
	{
		return $this->string . $string;
	}

	function italics()
	{
		return "<i>{$this->string}</i>";
	}

	function indexOf($needle, $offset = 0)
	{
		return stripos($this->string, $needle, $offset);
	}

	function lastIndexOf($needle, $offset = 0)
	{
		return strripos($this->string, $needle, $offset);
	}

	function length()
	{
		return strlen($this->string);
	}

	function split($delimiter)
	{
		return explode($delimiter, $this->string);
	}

	function reverse()
	{
		return strrev($this->string);
	}




}

















?>