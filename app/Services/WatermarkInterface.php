<?php

namespace App\Services;

interface WatermarkInterface
{
    function make(string $path): void;
}
