<?php declare(strict_types=1);

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
        self::compareFixtureEquals('differentFiles');
    }

    public function testThrowsIfDirectoryContentsAreDifferent(): void
    {
        $this->expectException(Framework\ExpectationFailedException::class);
        self::compareFixtureEquals('differentContents');
    }

    public function testThrowsIfSecondDirHasMore(): void
    {
        $this->expectException(Framework\ExpectationFailedException::class);
        self::compareFixtureEquals('secondDirHasMore');
    }

    public function testDirectoryContainsAllowsExtraFiles(): void
    {
        self::compareFixtureContains('secondDirHasMore');
    }

    public function testEquals(): void
    {
        self::compareFixtureEquals('equal');
        self::compareFixtureContains('equal');
    }

    protected static function compareFixtureEquals(string $name): void
    {
        $base = __DIR__ . '/../fixtures/' . $name;
        self::assertDirectoryEquals("{$base}/expected", "{$base}/actual");
    }

    protected static function compareFixtureContains(string $name): void
    {
        $base = __DIR__ . '/../fixtures/' . $name;
        self::assertDirectoryContains("{$base}/expected", "{$base}/actual");
    }
}
