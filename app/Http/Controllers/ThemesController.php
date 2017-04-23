<?php

namespace App\Http\Controllers;

use App\Http\Requests\ThemeRequest;
use App\Theme;

class ThemesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        auth()->user()->load(['themes' => function ($query) {
            $query->orderBy('updated_at', 'desc');
        }]);

        $themes = auth()->user()->themes;

        return view('dashboard', compact('themes'));
    }

    public function create()
    {
        return view('themes.create');
    }

    public function store(ThemeRequest $request)
    {
        $theme = auth()->user()->themes()->create([
            'name' => $request->get('name'),
            'description' => $request->get('description'),
            'colors' => [],
        ]);

        return redirect()->route('themes.editor', $theme->id);
    }

    public function edit(Theme $theme)
    {
        return view('themes.edit', compact('theme'));
    }

    public function update(ThemeRequest $request, Theme $theme)
    {
        $theme->update([
            'name' => $request->get('name'),
            'description' => $request->get('description'),
        ]);

        return redirect()->route('themes.index');
    }

    public function destroy(Theme $theme)
    {
        $theme->delete();

        return redirect()->route('themes.index');
    }

    public function editor(Theme $theme)
    {
        $this->authorize('update', $theme);

        return view('themes.editor', compact('theme'));
    }
}
