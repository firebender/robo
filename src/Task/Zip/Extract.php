<?php

declare(strict_types = 1);

namespace FireBender\Robo\Task\Zip;

use Robo\Task\BaseTask;
use Robo\Contract\BuilderAwareInterface;
use Robo\Common\BuilderAwareTrait;
use PhpZip\ZipFile;
use PhpZip\Exception\ZipException;
use Exception;

/**
 * Extracts a zip file
 */
class Extract extends BaseTask implements BuilderAwareInterface
{
	use BuilderAwareTrait;

	public function __construct($archive, $outputDir)
	{
		$zipFile = new ZipFile();

		try {
			$zipFile->openFile($archive)->extractTo($outputDir);
		} catch (ZipException $e) {
			dd($e);
		} finally {
			$zipFile->close();
		}
	}

	/**
     *
     */
    public function run()
    {
        $this->printTaskInfo("Running ZipExtract command...");
        return parent::run();
    }
}