<?php

namespace Zhukmax\TwigPad;

use Zhukmax\StringPad;

/**
 * Class TwigPad
 * @package Zhukmax\TwigPad
 */
class TwigPad extends \Twig_Extension
{
    public function getFunctions()
    {
        return [
            new \Twig_Function('leftpad', function ($str, int $len, string $ch = '0') : string
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
