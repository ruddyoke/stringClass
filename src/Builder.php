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

	function __construct($string)
	{
		$this->transform = new TransformString($string);
		$this->count = new Countable($string);
	}
}