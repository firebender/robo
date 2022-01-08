<?php

declare(strict_types = 1);

namespace FireBender\Robo\Traits;

use Robo\Config\Config;
use FireBender\Robo\Config\EnvConfigLoader;
use Consolidation\Config\Loader\ConfigProcessor;

trait ConfigTrait
{
	/**
	 * 
	 */
	protected $config;

	/**
	 * 
	 */
	public function loadConfig()
	{
		$this->config = new Config();
		$loader = new EnvConfigLoader();
		$processor = new ConfigProcessor();

		$path = realpath('.');
		$processor->extend($loader->load($path));
		$this->config->import($processor->export());
	}
}