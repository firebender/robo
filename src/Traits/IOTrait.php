<?php

namespace FireBender\Robo\Traits;

trait IOTrait
{
	/**
	 * 
	 */
	protected function space($num = 1)
	{
		$this->io->newLine($num);
	}

}