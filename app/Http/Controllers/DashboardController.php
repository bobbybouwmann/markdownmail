<?php

namespace App\Http\Controllers;

class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        auth()->user()->load(['themes' => function ($query) {
            $query->orderBy('updated_at', 'desc');
        }]);

        $themes = auth()->user()->themes;

        return view('dashboard', compact('themes'));
    }
}
