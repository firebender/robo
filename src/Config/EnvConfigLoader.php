<?php

declare(strict_types = 1);

namespace FireBender\Robo\Config;

use Consolidation\Config\Loader\ConfigLoader;
use Dotenv\Dotenv;

class EnvConfigLoader extends ConfigLoader
{
	/**
	 * 
	 */
	public function load($path)
	{
        Dotenv::createImmutable($path)->load();

        foreach(require $path . '/config/project.php' as $key => $value) {
            $this->config[$key] = $value;
        }
		
		return $this;
	}
}