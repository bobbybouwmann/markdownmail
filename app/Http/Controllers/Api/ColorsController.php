<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\ApiController;
use App\Theme;
use Illuminate\Http\Request;

class ColorsController extends ApiController
{
    /**
     * @param Theme $theme
     * @return mixed
     */
    public function index(Theme $theme)
    {
        return $theme->generateColors();
    }

    /**
     * @param Request $request
     * @param Theme $theme
     * @param $identifier
     * @return mixed
     */
    public function patch(Request $request, Theme $theme, $identifier)
    {
        $theme->update([
            'colors->' . $identifier => $request->color,
        ]);

        return $theme->colors;
    }
}
