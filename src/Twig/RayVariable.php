<?php

namespace App\Twig;

class RayVariable
{
    public function __call($name, $arguments): void
    {
        if (! count($arguments)) {
            ray()->$name();
        }

        ray()->$name($arguments);
    }
}
