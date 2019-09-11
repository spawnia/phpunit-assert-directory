<?php

declare(strict_types=1);

namespace Spawnia\PHPUnitAssertFiles\Tests\Unit;

use PHPUnit\Framework;
use Spawnia\PHPUnitAssertFiles\AssertDirectory;

class AssertDirectoryTest extends Framework\TestCase
{
    use AssertDirectory;

    public function testThrowsIfDirectoryNotFound(): void
    {
        $this->expectException(Framework\ExpectationFailedException::class);
        self::assertDirectoryEquals('foo', 'bar');
    }

    public function testThrowsIfDirectoryFilesAreDifferent(): void
    {
        $this->expectException(Framework\ExpectationFailedException::class);
        self::compareFixture('differentFiles');
    }

    public function testThrowsIfDirectoryContentsAreDifferent(): void
    {
        $this->expectException(Framework\ExpectationFailedException::class);
        self::compareFixture('differentContents');
    }

    public function testEquals(): void
    {
        self::compareFixture('equal');
    }

    protected static function compareFixture(string $name): void
    {
        $base = __DIR__.'/../fixtures/' . $name;
        self::assertDirectoryEquals(
            $base . '/expected',
            $base . '/actual',
        );
    }
}
