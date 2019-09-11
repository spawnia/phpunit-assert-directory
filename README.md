# phpunit-assert-directory

[![CI Status](https://github.com/spawnia/phpunit-assert-directory/workflows/Continuous%20Integration/badge.svg)](https://github.com/spawnia/phpunit-assert-directory/actions)
[![codecov](https://codecov.io/gh/spawnia/phpunit-assert-directory/branch/master/graph/badge.svg)](https://codecov.io/gh/spawnia/phpunit-assert-directory)
[![Latest Stable Version](https://poser.pugx.org/spawnia/phpunit-assert-directory/v/stable)](https://packagist.org/packages/spawnia/phpunit-assert-directory)
[![Total Downloads](https://poser.pugx.org/spawnia/phpunit-assert-directory/downloads)](https://packagist.org/packages/spawnia/phpunit-assert-directory)

PHPUnit extension with assert methods for directories

## Installation

Install through composer

```bash
composer require spawnia/phpunit-assert-directory
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

## Changelog

Please have a look at [`CHANGELOG.md`](CHANGELOG.md).

## Contributing

Please have a look at [`CONTRIBUTING.md`](.github/CONTRIBUTING.md).

## License

This package is licensed using the MIT License.