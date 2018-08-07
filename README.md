# TwigPad
[![Software License][ico-license]](license.md)
[![Total Downloads][ico-downloads]][link-downloads]

Lib for add symbols to start or end of string in Twig templates.

## Install
```console
composer require zhukmax/twigpad
```

## Usage
Basic example:
```php
<?php

require_once 'vendor/autoload.php';

$loader = new Twig_Loader_Array(array(
    'index' => 'Hello {{ rightpad(name, 9, "#") }}',
));

$twig = new Twig_Environment($loader);
$twig->addExtension(new Zhukmax\TwigPad\TwigPad());

echo $twig->render('index', array('name' => 'Max'));
// => Hello Max######
```

[ico-license]: https://img.shields.io/badge/license-Apache%202-brightgreen.svg
[ico-downloads]: https://img.shields.io/packagist/dt/zhukmax/twigpad.svg
[link-downloads]: https://packagist.org/packages/zhukmax/twigpad
