<?php

namespace App\Http\Controllers;

use App\Theme;

class ThemesController extends Controller
{
    public function edit(Theme $theme)
    {
        return view('themes.edit', compact('theme'));
    }
}
