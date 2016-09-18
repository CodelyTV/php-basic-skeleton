# PHP Bootstrap (base / project skeleton)
 
[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE.md)
[![Build Status][ico-travis]][link-travis]
[![Coverage Status][ico-scrutinizer]][link-scrutinizer]
[![Quality Score][ico-code-quality]][link-code-quality]
[![Total Downloads][ico-downloads]][link-downloads]
 
## Introduction 

This is a repository intended to serve as a starting point if you want to bootstrap a project in PHP.
 
It could be useful if you want to start from scratch a kata or a little exercise or project.

## How To Start

0. If you don't have it already, [install Composer](https://getcomposer.org/download/).
1. Create your project based on this bootstrap repo: `composer create-project codelytv/php-bootstrap your-kata-name`.
2. Run all the checks: `composer test`. This will do some checks that you can perform with isolated commands: 
    1. [PHP Parallel Lint](https://github.com/JakubOnderka/PHP-Parallel-Lint): `composer lint`.
    2. [PHP Style Check](https://github.com/squizlabs/PHP_CodeSniffer): `composer style`. If you want to fix style issues automatically: `composer fix-style`.
    3. [PHP Unit](https://phpunit.de/): `composer phpunit`.
3. Start coding! 

## Helpful resources

### PHP 7

* [PHP 7 new features](http://php.net/manual/en/migration70.new-features.php)
* [Scalar type declarations example](https://github.com/tpunt/PHP7-Reference#scalar-type-declarations)
* [Return type declarations example](https://github.com/tpunt/PHP7-Reference#return-type-declarations)

### PHPUnit 5.5

* [Introduction to writing tests for PHPUnit](https://phpunit.de/manual/current/en/writing-tests-for-phpunit.html)
* [Testing exceptions with PHPUnit](https://phpunit.de/manual/current/en/writing-tests-for-phpunit.html#writing-tests-for-phpunit.exceptions)
* [PHPUnit assertions](https://phpunit.de/manual/current/en/appendixes.assertions.html)

### Refactoring

* [Refactoring.guru Code Smells catalog](https://refactoring.guru/smells/smells)
* [Refactoring.guru Refactorings catalog](https://refactoring.guru/catalog)
* [SourceMaking Refactorings catalog](https://sourcemaking.com/refactoring)
* [Martin Fowler Refactorings catalog](http://refactoring.com/catalog/)
* [CodelyTV Refactoring videos (Spanish)](http://codely.tv/tag/refactoring/)

# Other programming languages

* [PHP](https://github.com/CodelyTV/php-bootstrap)
* [Scala](https://github.com/CodelyTV/scala_bootstrap)

## About

This hopefully helpful utility has been developed by [CodelyTV][link-author] and [Contributors][link-contributors].

We'll try to maintain this project as simple as possible, but Pull Requests are welcomed!

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/codelytv/php-bootstrap.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[ico-travis]: https://img.shields.io/travis/CodelyTV/php-bootstrap/master.svg?style=flat-square
[ico-scrutinizer]: https://img.shields.io/scrutinizer/coverage/g/CodelyTV/php-bootstrap.svg?style=flat-square
[ico-code-quality]: https://img.shields.io/scrutinizer/g/CodelyTV/php-bootstrap.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/codelytv/php-bootstrap.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/codelytv/php-bootstrap
[link-travis]: https://travis-ci.org/CodelyTV/php-bootstrap
[link-scrutinizer]: https://scrutinizer-ci.com/g/CodelyTV/php-bootstrap/code-structure
[link-code-quality]: https://scrutinizer-ci.com/g/CodelyTV/php-bootstrap
[link-downloads]: https://packagist.org/packages/codelytv/php-bootstrap
[link-author]: https://github.com/CodelyTV
[link-contributors]: ../../contributors
