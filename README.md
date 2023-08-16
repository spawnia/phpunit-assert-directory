# phpunit-assert-directory

PHPUnit extension with assert methods for directories

## Installation

Install through composer

```bash
composer require --dev spawnia/phpunit-assert-directory
```

## Usage

Use the trait `AssertDirectory` in your test method.

```diff
<?php

declare(strict_types=1);

namespace Foo\Tests;

use PHPUnit\Framework;
+use Spawnia\PHPUnitAssertFiles\AssertDirectory;

class FooTest extends Framework\TestCase
{
+   use AssertDirectory;
}
```

You can then proceed the use the additional assertions just like you would
use PHPUnit's built-in methods, such as `assertSame`.

### assertDirectoryEquals

```php
/**
 * Assert that two directories contain the same files with the same contents.
 *
 * @param  string  $expected Path to the expected directory
 * @param  string  $actual Path to the actual directory
 * @param  string  $message Optional error message in case of failure
 *
 * @throws ExpectationFailedException
 */
public static function assertDirectoryEquals(string $expected, string $actual, string $message = ''): void
```

### assertDirectoryContains

```php
/**
 * Assert a directory contains at least the same files as another directory.
 *
 * @param  string  $expected Path to the expected directory
 * @param  string  $actual Path to the actual directory
 * @param  string  $message Optional error message in case of failure
 * @return void
 *
 * @throws ExpectationFailedException
 */
public static function assertDirectoryContains(string $expected, string $actual, string $message = ''): void
```

## Changelog

Please have a look at [`CHANGELOG.md`](CHANGELOG.md).

## Contributing

Please have a look at [`CONTRIBUTING.md`](.github/CONTRIBUTING.md).

## License

This package is licensed using the MIT License.
