<?php

namespace App\Tools;


class Encoding {

	static function getEncoding($filename)
	{
		$encoding='';
		$handle = fopen($filename, 'r');
		$bom = fread($handle, 2);
		//  fclose($handle);
		rewind($handle);

		if($bom === chr(0xff).chr(0xfe)  || $bom === chr(0xfe).chr(0xff)){
			// UTF16 Byte Order Mark present
			$encoding = 'UTF-16';
		} else {
			$file_sample = fread($handle, 1000) /*+ 'e'*/; //read first 1000 bytes
			// + e is a workaround for mb_string bug
			rewind($handle);
			//$encoding = mb_detect_encoding($file_sample, "auto");
			$encoding = mb_detect_encoding($file_sample , 'UTF-8, ISO-8859-1, UTF-7, ASCII, EUC-JP,SJIS, eucJP-win, SJIS-win, JIS, ISO-2022-JP');
		}
		/*if ($encoding){
			stream_filter_append($handle, 'convert.iconv.'.$encoding.'/UTF-8');
		}*/
		return $encoding;
	}

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
