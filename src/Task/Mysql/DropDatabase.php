<?php

declare(strict_types = 1);

namespace FireBender\Robo\Task\Mysql;

use Robo\Task\CommandStack;

class DropDatabase extends CommandStack
{
	/**
	 * 
	 */
	protected $name;

	/**
	 * 
	 */
	protected $username;

	/**
	 * 
	 */
	protected $password;

	/**
	 * 
	 */
	public function __construct($name, $username, $password)
	{
		$this->name = $name;
		$this->username = $username;
		$this->password = $password;
	}

	/**
	 * 
	 */
	public function run()
	{
		dd(__METHOD__);

		dd(func_get_args());
	}
}