<?php

declare(strict_types = 1);

namespace FireBender\Robo\Task\TempDir;

use Spatie\TemporaryDirectory\TemporaryDirectory;

trait Tasks
{
	/**
	 * 
	 */
	protected function taskTempDirCreate()
	{
		$tempDir = (new TemporaryDirectory())->create();

		return $tempDir;
	}
}