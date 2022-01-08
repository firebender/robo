<?php

declare(strict_types = 1);

namespace FireBender\Robo\Task\Mysql;

trait Tasks
{
	/**
	 * 
	 */
	protected function taskMysqlStack()
	{
		return $this->task(MysqlStack::class);
	}
}