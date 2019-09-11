<?php

declare(strict_types=1);

namespace Spawnia\PHPUnitAssertFiles;

use PHPUnit\Framework\Assert;
use PHPUnit\Framework\ExpectationFailedException;

trait AssertDirectory
{
    /**
     * Assert that two directories contain the same files with the same contents.
     *
     * @param  string  $expected Path to the expected directory
     * @param  string  $actual Path to the actual directory
     * @param  string  $message Optional error message in case of failure
     * @return void
     *
     * @throws ExpectationFailedException
     */
    public static function assertDirectoryEquals(string $expected, string $actual, string $message = ''): void
    {
        Assert::assertDirectoryExists($expected, $message);
        Assert::assertDirectoryExists($actual, $message);

        $directory = new \RecursiveDirectoryIterator($expected);
        $iterator = new \RecursiveIteratorIterator($directory);
        /** @var \SplFileInfo $fileInfo */
        foreach ($iterator as $fileInfo) {
            $pathname = $fileInfo->getPathname();
            Assert::assertFileEquals(
                $pathname,
                $actual.explode($expected, $pathname, 2)[1]
            );
        }
    }
}
