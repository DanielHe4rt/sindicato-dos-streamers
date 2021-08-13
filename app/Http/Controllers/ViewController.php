<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Services\TwitchService;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

class ViewController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except(['viewLanding', 'viewTest']);
    }

    public function viewLanding(): View
    {

        $streamers = User::where('role', 'streamer')->count();
        $viewers = User::where('role', 'viewer')->count();
        $signs = User::where('signed_at', '<>', null)
            ->orderBy('signed_at', 'desc')
            ->paginate(6);

        $famousList = User::where('signed_at', '<>', null)
            ->orderBy('views', 'desc')
            ->paginate(6);

        return view('welcome', compact(['streamers', 'viewers', 'signs', 'famousList']));
    }

    public function viewTest(): View
    {

        $streamers = User::where('role', 'streamer')->count();
        $viewers = User::where('role', 'viewer')->count();
        $signs = User::where('signed_at', '<>', null)
            ->orderBy('signed_at', 'desc')
            ->paginate(6);

        $famousList = User::where('signed_at', '<>', null)
            ->orderBy('views', 'desc')
            ->paginate(6);

        return view('welcome1', compact(['streamers', 'viewers', 'signs', 'famousList']));
    }

    public function viewProfile(): View
    {
        return view('profile');
    }

    public function getLocale(string $locale)
    {
        $locales = ['pt_BR', 'en'];
        if (!in_array($locale, $locales)) {
            abort(404);
        }

        session(['locale' => $locale]);

        return back();
    }
}
