<?php

namespace App\Http\Controllers;

use App\Theme;
use Illuminate\Http\Request;

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

    public function store(Request $request)
    {
        $theme = auth()->user()->themes()->create([
            'name' => $request->get('name'),
            'description' => $request->get('description'),
            'colors' => [],
        ]);

        return redirect()->route('themes.edit', $theme->id);
    }

    public function edit(Theme $theme)
    {
        $this->authorize('update', $theme);

        return view('themes.edit', compact('theme'));
    }
}
