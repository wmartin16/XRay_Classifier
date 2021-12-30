<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ThemeController extends Controller
{
    function changeTheme(Request $request)
    {
        $request->validate([
            'theme' => ['required', Rule::in(['light', 'dark'])]
        ]);

        session(['theme' => $request->theme === 'light' ? 'bootstrap' : 'darkly']);
        return redirect()->back();
    }
}
