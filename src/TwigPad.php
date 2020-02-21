<?php

namespace Zhukmax\TwigPad;

use Twig\Extension\AbstractExtension;
use Twig\TwigFunction;
use Zhukmax\StringPad;

/**
 * Class TwigPad
 * @package Zhukmax\TwigPad
 */
class TwigPad extends AbstractExtension
{
    public function getFunctions()
    {
        return [
            new TwigFunction('leftpad', function ($str, int $len, string $ch = '0') : string
            {
                return StringPad::left($str, $len, $ch);
            }),
            new \Twig_Function('rightpad', function ($str, int $len, string $ch = '0') : string
            {
                return StringPad::right($str, $len, $ch);
            })
        ];
    }
}
