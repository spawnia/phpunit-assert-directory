<?php

namespace Spawnia\PHPUnitAssertFiles;

use PHPUnit\Framework\Assert;
use PHPUnit\Util\InvalidArgumentHelper;

trait AssertDirectory
{
    public static function assertDirectoryEquals(string $expected, string $actual, string $message = '')
    {
        Assert::assertDirectoryExists($expected, $message);
        Assert::assertDirectoryExists($actual, $message);

        $directory = new \RecursiveDirectoryIterator($expected);
        $iterator = new \RecursiveIteratorIterator($directory);
        /** @var \SplFileInfo $info */
        foreach ($iterator as $info) {
            $pathname = $info->getPathname();
            self::assertFileEquals(
                $pathname,
                $actual . explode($expected, $pathname, 2)[1]
            );
        }
    }
}
