<?php

declare(strict_types = 1);

namespace FireBender\Robo;

use Robo\Tasks as RoboTasks;
use FireBender\Robo\Traits\FilesystemTrait;
use FireBender\Robo\Traits\ConfigTrait;
use FireBender\Robo\Traits\IOTrait;

class Tasks extends RoboTasks
{
	use FilesystemTrait;
	use ConfigTrait;
	use IOTrait;

	use Task\Mysql\Tasks;
	use Task\Zip\Tasks;
	use Task\TempDir\Tasks;

	/**
	 * 
	 */
	public function __construct()
	{
		$this->loadFilesystem();

		$this->loadConfig();
	}
}