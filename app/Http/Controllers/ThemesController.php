<?php

namespace App\Http\Controllers;

use App\Theme;
use Illuminate\Http\Request;

class ThemesController extends Controller
{
    public function create()
    {
        return view('themes.create');
    }

    public function store(Request $request)
    {
        $theme = auth()->user()->themes()->create([
            'name' => $request->get('name'),
            'description' => $request->get('description'),
            'colors' => '{}',
        ]);

        return redirect()->route('themes.edit', $theme->id);
    }

    public function edit(Theme $theme)
    {
        return view('themes.edit', compact('theme'));
    }
}
