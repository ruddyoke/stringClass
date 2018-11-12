<?php

namespace App\Tools;


class Encoding {

	static function windowEncodingToUtf8($string, $from_encoding="ISO-8859-1")
	{
		return mb_convert_encoding($string, "UTF-8",$from_encoding);
	}

	static function windowEncodingToUtf8_Array($tab, $from_encoding="ISO-8859-1")
	{
		$temp = [];
		foreach ($tab as $key => $item){
			$temp[$key] = self::windowEncodingToUtf8($item, $from_encoding);
		}
		return $temp;
	}

	static function utf8ToWindowEncoding($string, $to_encoding="ISO-8859-1")
	{
		return mb_convert_encoding($string, $to_encoding, 'UTF-8');
	}

	static function utf8ToWindowEncoding_Array($tab, $to_encoding="ISO-8859-1")
	{
		$temp = [];
		foreach ($tab as $key => $item){
			$temp[$key] = self::utf8ToWindowEncoding($item, $to_encoding);
		}
		return $temp;
	}

	static function windowEncodingToUtf16($string, $from_encoding="ISO-8859-1")
	{
		return mb_convert_encoding($string, "UTF-16",$from_encoding);
	}

	static function utf16ToWindowEncoding($string, $to_encoding="ISO-8859-1")
	{
		return mb_convert_encoding($string, $to_encoding, 'UTF-16');
	}

	static function utf16ToUtf8($string, $to_encoding="UTF-8")
	{
		return mb_convert_encoding($string , $to_encoding , 'UTF-16');
	}
}
