<?php

declare(strict_types = 1);

namespace FireBender\Robo\Traits;

use Symfony\Component\Filesystem\Filesystem;

trait FilesystemTrait
{
	/**
	 * 
	 */
	protected $fs;

	/**
	 * 
	 */
	public function loadFilesystem()
	{
		$this->fs = new Filesystem();
	}
}