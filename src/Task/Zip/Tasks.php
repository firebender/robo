<?php

declare(strict_types = 1);

namespace FireBender\Robo\Task\Zip;

trait Tasks
{
	/**
	 * 
	 */
	protected function taskZipExtract($archive, $extractTo)
	{
		return $this->task(Extract::class, $archive, $extractTo);
	}
}