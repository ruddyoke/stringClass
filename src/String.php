<?php

namespace Roke;

use Roke\Builder;

/**
* 
*/
class String extends Builder
{
	protected $string;
	function __construct($string)
	{
		$this->string = nl2br($string);
		parent::__construct($this->string);
	}

	function __toString()
	{
		return $this->string;
	}

	function bold()
	{
		return '<b>'. $this->string . '</b>';
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

	function HTMLencode()
	{
		return htmlentities($this->string);
	}

	function HTMLdecode()
	{
		return HTMLdecode($string);
	}

	/**
	*  @return array
	*/
	function getWords()
	{
		return str_word_count($this->string, 1, $this->charlist);
	}

	/**
	*  @return array
	*/
	function getWordsIndex()
	{
		$temp_arr = array();
		$temp = str_word_count($this->string, 2, $this->charlist);
		foreach ($temp as $key => $value) {
			$temp_arr[$value] = $key;
		}
		return $temp_arr;
	}

	function italics()
	{
		return '<i>'. $this->string . '</i>';
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

	function trim($character_mask = " \t\n\r\0\x0B")
	{
		return trim($this->string, $character_mask);
	}

	function toUtf8($from_encoding="ISO-8859-1")
	{
		return mb_convert_encoding($this->string, "UTF-8",$from_encoding);
	}
	
	function wd_remove_accents($str, $charset='utf-8')
	{
		$str = htmlentities($str, ENT_NOQUOTES, $charset);

		$str = preg_replace('#&([A-za-z])(?:acute|cedil|caron|circ|grave|orn|ring|slash|th|tilde|uml);#', '\1', $str);
		$str = preg_replace('#&([A-za-z]{2})(?:lig);#', '\1', $str); // pour les ligatures e.g. '&oelig;'
		$str = preg_replace('#&[^;]+;#', '', $str); // supprime les autres caractères

		return $str;
	}


}

















?>
