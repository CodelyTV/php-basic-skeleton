# 🐘 PHP Bootstrap (base / project skeleton)

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]][link-license]
[![Build Status][ico-gh-actions]][link-gh-actions]
[![Total Downloads][ico-downloads]][link-downloads]

## Introduction

This is a repository intended to serve as a starting point if you want to bootstrap a project in PHP. This repository
has been explained in
the [CodelyTV video "Introducción a PHP: Cómo configurar tu entorno de desarrollo 🐘" (Spanish)](https://www.youtube.com/watch?v=v2IjMrpZog4).

It could be useful if you want to start from scratch a kata or a little exercise or project. The idea is that you don't
have to worry about the boilerplate, just run `composer create-project codelytv/php-bootstrap your-project-name` and
there you go:

* Latest versions of PHP and PHPUnit
* Best practices applied:
    * [`README.md`][link-readme]
    * [`LICENSE`][link-license]
    * [`composer.json`][link-composer-json]
    * [`ecs.php`](./ecs.php)
    * [`phpunit.xml`][link-phpunit]
    * [`psalm.xml`](./psalm.xml)
    * [`.gitignore`][link-gitignore]
    * [`.editorconfig`][link-editorconfig]
* Some useful resources to start coding

## How To Start

You have 2 different alternatives: Using our [Packagist project](https://packagist.org/packages/codelytv/php-bootstrap)
with Composer, or manually cloning [this repo](https://github.com/CodelyTV/php-bootstrap/):

### Using Composer

Start completely from scratch without having to delete this bootstrap project Git history:

1. If you don't have it already, [install Composer](https://getcomposer.org/download/).
2. Create your project based on the [Packagist project](https://packagist.org/packages/codelytv/php-bootstrap). This
   will also download the project dependencies: `composer create-project codelytv/php-bootstrap your-project-name`.
3. Move to the project directory: `cd your-project-name`
4. Run all the checks: `composer test`. This will do some checks that you can perform with isolated commands:
    1. [Codely Style](https://github.com/CodelyTV/php-coding_style-codely): `composer lint`.
    2. [Easy coding standard](https://github.com/easy-coding-standard/easy-coding-standard): `composer style`. If you
       want to fix style issues automatically: `composer lint:fix`.
    3. [Static Analysis](https://github.com/vimeo/psalm): `composer static-analysis`.
    4. [PHP Unit](https://phpunit.de/): `composer phpunit`.
5. Create your own repository:
    1. Initialize your own Git repository: `git init`
    2. Add the bootstrap files: `git add .`
    3. Commit: `git commit -m "Initial commit with project boilerplate based on https://github.com/CodelyTV/php-bootstrap"`
    4. Add your remote repository: `git remote add origin git@github.com:your-username/your-project-name`
    5. Upload your local commits to the new remote repo: `git push -u origin master`
6. Start coding!

### Cloning the repository

Just in case you prefer to avoid dealing with `composer create-project`, you can also clone this repository. We
recommend to follow the next step-by-step process in order to avoid adding the bootstrap project commits to your project
Git history:

1. [Use this repository template](https://github.com/CodelyTV/php-basic-skeleton/generate)
2. Clone your project
3. Move to the project directory: `cd your-project-name`
4. If you don't have it already, [install Composer](https://getcomposer.org/download/).
5. Install the project dependencies: `composer install`
6. Run the tests: `composer test`.
7. Start coding!

## Related skeleton templates

This very same basic skeleton philosophy implemented in other programming languages:

- [🔷🕸️ TypeScript Web Skeleton](https://github.com/CodelyTV/typescript-web-skeleton)
- [🔷🌍 TypeScript API Skeleton](https://github.com/CodelyTV/typescript-api-skeleton)
- [🔷✨ TypeScript DDD Skeleton](https://github.com/CodelyTV/typescript-ddd-skeleton)
- [✨ JavaScript Basic Skeleton](https://github.com/CodelyTV/javascript-basic-skeleton)
- [☕ Java Basic Skeleton](https://github.com/CodelyTV/java-basic-skeleton)
- [📍 Kotlin Basic Skeleton](https://github.com/CodelyTV/kotlin-basic-skeleton)
- [🧬 Scala Basic Skeleton](https://github.com/CodelyTV/scala-basic-skeleton)
- [🦈 C# Basic Skeleton](https://github.com/CodelyTV/csharp-basic-skeleton)

[ico-version]: https://img.shields.io/packagist/v/codelytv/php-bootstrap.svg?style=flat-square

[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square

[ico-gh-actions]: https://github.com/CodelyTV/php-basic-skeleton/actions/workflows/ci.yml/badge.svg

[ico-code-quality]: https://img.shields.io/scrutinizer/g/CodelyTV/php-bootstrap.svg?style=flat-square

[ico-downloads]: https://img.shields.io/packagist/dt/codelytv/php-bootstrap.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/codelytv/php-bootstrap

[link-license]: LICENSE

[link-gh-actions]: https://github.com/CodelyTV/php-basic-skeleton/actions

[link-downloads]: https://packagist.org/packages/codelytv/php-bootstrap

[link-readme]: README.md

[link-composer-json]: composer.json

[link-phpunit]: phpunit.xml

[link-gitignore]: .gitignore

[link-editorconfig]: .editorconfig
