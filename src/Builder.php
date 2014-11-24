<?php

namespace Roke;

use Roke\Dependences\TransformString;
use Roke\Dependences\Countable;

/**
* 
*/
class Builder
{
	public $transform;
	public $count;

	/* A list of additional characters which will be considered as 'word' */
	protected $charlist;
	
	private $majChars = "ÀÂÆÇÉÈÊËÎÏÔŒÙÛÜŸ";
	private $minChars = "àâæçéèêëîïôœùûüÿ";
	private $numbers  = "0123456789";

	function __construct($string)
	{
		$this->charlist = $this->majChars.$this->minChars.$this->numbers;

		$this->transform = new TransformString($string);
		$this->count = new Countable($string, $this->charlist);
	}
}