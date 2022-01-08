<?php

declare(strict_types = 1);

namespace FireBender\Robo\Task\Mysql;

use Robo\Task\CommandStack;

class MysqlStack extends CommandStack
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
	public function name($name)
	{
		$this->name = $name;
	}

	/**
	 * 
	 */
	public function username($username)
	{
		$this->username = $username;
	}

	/**
	 * 
	 */
	public function password($password)
	{
		$this->password = $password;
	}

	/**
	 * 
	 */
	public function dropDatabase()
	{
        $format = 'mysql -u %s -p%s -e "DROP DATABASE IF EXISTS %s"';
        $cmd = sprintf($format, $this->username, $this->password, $this->name);
        $this->exec($cmd);
	}

	/**
	 * 
	 */
	public function createDatabase()
	{
        $format = 'mysql -u %s -p%s -e "CREATE DATABASE %s CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci"';
        $cmd = sprintf($format, $this->username, $this->password, $this->name);
        $this->exec($cmd);
	}

	/**
	 * 
	 */
	public function recreateDatabase()
	{
		$this->dropDatabase();
		$this->createDatabase();
	}

	/**
	 * 
	 */
	public function loadSqlFile($sqlFile)
	{
        $format = 'mysql -u %s -p%s %s < %s';
        $cmd = sprintf($format, $this->username, $this->password, $this->name, $sqlFile);
        $this->exec($cmd);
	}

	/**
     *
     */
    public function run()
    {
        $this->printTaskInfo("Running mysql commands...");
        return parent::run();
    }
}