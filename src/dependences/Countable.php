<?php

namespace Roke\Dependences;

/**
* 
*/
class Countable
{
	private $string;
	private $undesirable_ascii_code;
	/* A list of additional characters which will be considered as 'word' */
	private $charlist;
	
	function __construct($string)
	{
		$this->string = $string;
		$this->undesirable_ascii_code = array(
			'Line Feed'       => 10, 
			'Carriage Return' => 13, 
			'c_195' 		  => 195,
		);
		
		$this->charlist = "àéè1234567890";
	}

	private function getChar($ascii_code)
	{
		if( in_array($ascii_code, $this->undesirable_ascii_code) )  
		{
			return FALSE;
		}

		if( $ascii_code == 9 )
		{
			return 'Horizontal_Tab';
		}
		elseif( $ascii_code == 32 )
		{
			return 'space';
		}
		elseif( $ascii_code <= 127 )
		{
			return chr($ascii_code);
		}
	}

	/**
	* @return array
	*/
	function chars()
	{
		//supprimer les balise html et php
		$string = strip_tags($this->string);

		//Stokera les information à retouner.
		$arr_temp = [];

		$arr1 = count_chars($string, 1);

		foreach ($arr1 as $key => $value) 
		{
			$temp_key = $this->getChar($key);
			if(!$temp_key)
			{
				continue;
			}

			$arr_temp[$temp_key] = $value;
		}
		return $arr_temp;
		/*
		//don't work with accentueted characters 
		$arr1 = count_chars($this->string, 1);
		var_dump($arr1);
		*/
	}

	/**
	*  @return array
	*/
	function words()
	{
		return str_word_count($this->string, 0, $this->charlist);
	}

	/**
	* @return integer
	*/
	function substr($needle)
	{
		return substr_count($this->string, $needle);
	}


}






























?>
