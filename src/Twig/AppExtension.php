<?php

namespace App\Twig;

use Twig\TwigFilter;
use Twig\TwigFunction;
use Twig\Extension\GlobalsInterface;
use Twig\Extension\AbstractExtension;

class AppExtension extends AbstractExtension implements GlobalsInterface
{
    public function getFilters(): array
    {
        return [
            new TwigFilter('ray', function (mixed $params) {
                ray($params);

                return $params;
            }),
        ];
    }

    public function getTokenParsers(): array
    {
        return [
            new RayTokenParser(),
        ];
    }

    public function getFunctions(): array
    {
        return [
            new TwigFunction('ray', function (mixed ...$params) {
                ray(...$params);

                return null;
            }),
        ];
    }

    public function getGlobals(): array
    {
        return [
            'ray' => new RayVariable(),
        ];
    }
}
