<?php

namespace App\Services;

use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManagerStatic as Image;

class InterventionImage implements WatermarkInterface
{
    public function make(string $path): void
    {
        $fullPath = Storage::path($path);

        $img = Image::make($fullPath);
        $img->insert(public_path('default.png'), 'bottom-right');
        $img->save($fullPath);
    }
}
