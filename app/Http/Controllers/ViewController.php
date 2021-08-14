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
        $this->middleware('auth')->except(['viewLanding',  'getLocale']);
    }

    public function viewLanding(): View
    {

        $streamers = User::where([
            ['role', '=' ,'streamer'],
            ['terms', '=' ,true],
        ])->count();
        $viewers = User::where([
            ['role', '=' ,'viewers'],
            ['terms', '=' ,true],
        ])->count();
        $communityViews = User::where([
            ['role', '=' ,'streamer'],
            ['terms', '=' ,true],
        ])->sum('views');

        $signs = User::where('signed_at', '<>', null)
            ->orderBy('signed_at', 'desc')
            ->paginate(4);

        $famousList = User::where([
            ['terms', '=', true],
            ['sent_message', '=', true]
        ])->orderBy('views', 'desc')
            ->paginate(30);

        return view('welcome', compact(['streamers', 'viewers', 'signs', 'famousList', 'communityViews']));
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
