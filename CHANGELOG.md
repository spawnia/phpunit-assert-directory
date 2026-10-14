# Changelog

## v2.2.1

### Changed

- Strip the expected directory prefix with `substr()` instead of `explode()` https://github.com/spawnia/phpunit-assert-directory/pull/6

## v2.2.0

### Added

- Support PHPUnit 11

## v2.1.0

### Added

- Support PHP 8
- Support `thecodingmachine/safe` version `^2`

## v2.0.0

### Changed

- Require `thecodingmachine/safe` version `^1.0.0`

## v1.0.0

### Added

- Add `assertDirectoryContains` method

### Changed

- Compare both ways when using `assertDirectoryEquals` method

### Fixed

- Compatibility with PHP 7.4

## v0.1.0

### Added

- Add `assertDirectoryEquals` method
