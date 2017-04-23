<?php

namespace App\Http\Controllers\Api;

use App\Color;
use App\Http\Controllers\ApiController;
use App\Mail\Preview;
use App\Theme;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;

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

    /**
     * @param Theme $theme
     * @return mixed
     * @throws \Throwable
     */
    public function css(Theme $theme)
    {
        $colors = $theme->generateColors()->pluck('color', 'id')->toArray();

        return view('emails.markdown.template', ['colors' => $colors])->render();
    }

    /**
     * Generate a collection of default colors.
     *
     * @return \Illuminate\Support\Collection
     */
    protected function generateDefaultColors()
    {
        return Color::all()->pluck('color', 'identifier');
    }
}
