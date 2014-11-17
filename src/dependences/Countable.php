<?php

namespace Roke\Dependences;

/**
* 
*/
class Countable
{
	private $string;
	
	function __construct($string)
	{
		$this->string =$string;
	}

	private function getChar($ascii_code)
	{
		if($ascii_code <= 127)
		{
			return chr($ascii_code);
		}
		switch ($ascii_code) {
			case 195:
				return 'è';
			
			default:
				return 'not found';
		}
	}

	/**
	* Return an array
	*/
	function chars()
	{
		$arr_temp;
		$arr1 = count_chars($this->string, 1);
		foreach ($arr1 as $key => $value) {
			$arr_temp[$this->getChar($key)] = $value;
			echo ord("è");
			echo chr("195");
		}
		return $arr_temp;
	}

	function words()
	{
		return str_word_count($this->string);
	}

	function substr($needle)
	{
		return substr_count($this->string, $needle);
	}


}






























?>