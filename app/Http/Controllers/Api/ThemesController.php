<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\ApiController;
use App\Mail\Preview;
use App\Theme;

class ThemesController extends ApiController
{
    /**
     * @param Theme $theme
     * @return \Illuminate\View\View
     */
    public function show(Theme $theme)
    {
        $colors = $theme->generateColors()->pluck('color', 'id')->toArray();

        return (new Preview($colors))->render();
    }
}
