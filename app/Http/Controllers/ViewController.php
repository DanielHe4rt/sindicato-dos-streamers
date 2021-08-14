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
        $this->middleware('auth')->except(['viewLanding', 'viewTest', 'getLocale']);
    }

    public function viewLanding(): View
    {

        $streamers = User::where('role', 'streamer')->count();
        $viewers = User::where('role', 'viewer')->count();
        $signs = User::where('signed_at', '<>', null)
            ->orderBy('signed_at', 'desc')
            ->paginate(4);

        Uncaught ReflectionException: Class "view" does not exist in /var/www/html/sindicato-dos-streamers/vendor/laravel/framework/src/Illuminate/Container/Container.php:873\nStack trace:\n#0 /var/www/html/sindicato-dos-streamers/vendor/laravel/framework/src/Illuminate/Container/Container.php(873): ReflectionClass->__construct()\n#1 /var/www/html/sindicato-dos-streamers/vendor/laravel/framework/src/Illuminate/Container/Container.php(754): Illuminate\\Container\\Container->build()\n#2 /var/www/html/sindicato-dos-streamers/vendor/laravel/framework/src/Illuminate/Foundation/Application.php(841): Illuminate\\Container\\Container->resolve()\n#3 /var/www/html/sindicato-dos-streamers/vendor/laravel/framework/src/Illuminate/Container/Container.php(692): Illuminate\\Foundation\\Application->resolve()\n#4 /var/www/html/sindicato-dos-streamers/vendor/laravel/framework/src/Illuminate/Foundation/Application.php(826): Illuminate\\Container\\Container->make()\n#5 /var/www/html/sindicato-dos-streamers/vendor/laravel/framework/src/Illuminate/Container/Container.php(1420): Illuminate\\Foundation\\Application->make()\n#6 /var/www/html/sindicato-dos-streamers/vendor/laravel/framework/src/Illuminate/Support/Facades/Facade.php(198): Illuminate\\Container\\Container->offsetGet()\n#7 /var/www/html/sindicato-dos-streamers/vendor/laravel/framework/src/Illuminate/Support/Facades/Facade.php(166): Illuminate\\Support\\Facades\\Facade::resolveFacadeInstance()\n#8 /var/www/html/sindicato-dos-streamers/vendor/laravel/framework/src/Illuminate/Support/Facades/Facade.php(255): Illuminate\\Support\\Facades\\Facade::getFacadeRoot()\n#9 /var/www/html/sindicato-dos-streamers/vendor/laravel/framework/src/Illuminate/Foundation/Exceptions/RegisterErrorViewPaths.php(18): Illuminate\\Support\\Facades\\Facade::__callStatic()\n#10 /var/www/html/sindicato-dos-streamers/vendor/laravel/framework/src/Illuminate/Foundation/Exceptions/Handler.php(584): Illuminate\\Foundation\\Exceptions\\RegisterErrorViewPaths->__invoke()\n#11 /var/www/html/sindicato-dos-streamers/vendor/laravel/framework/src/Illuminate/Foundation/Exceptions/Handler.php(565): Illuminate\\Foundation\\Exceptions\\Handler->registerErrorViewPaths()\n#12 /var/www/html/sindicato-dos-streamers/vendor/laravel/framework/src/Illuminate/Foundation/Exceptions/Handler.php(476): Illuminate\\Foundation\\Exceptions\\Handler->renderHttpException()\n#13 /var/www/html/sindicato-dos-streamers/vendor/laravel/framework/src/Illuminate/Foundation/Exceptions/Handler.php(354): Illuminate\\Foundation\\Exceptions\\Handler->prepareResponse()\n#14 /var/www/html/sindicato-dos-streamers/vendor/laravel/framework/src/Illuminate/Foundation/Bootstrap/HandleExceptions.php(119): Illuminate\\Foundation\\Exceptions\\Handler->render()\n#15 /var/www/html/sindicato-dos-streamers/vendor/laravel/framework/src/Illuminate/Foundation/Bootstrap/HandleExceptions.php(96): Illuminate\\Foundation\\Bootstrap\\HandleExceptions->renderHttpResponse()\n#16 /var/www/html/sindicato-dos-streamers/vendor/laravel/framework/src/Illuminate/Foundation/Bootstrap/HandleExceptions.php(130): Illuminate\\Foundation\\Bootstrap\\HandleExceptions->handleException()\n#17 [internal function]: Illuminate\\Foundation\\Bootstrap\\HandleExceptions->handleShutdown()\n#18 {main}\n\nNext Illuminate\\Contracts\\Container\\BindingResolutionException: Target class [view] does not exist. in /var/www/html/sindicato-dos-streamers/vendor/laravel/framework/src/Illuminate/Container/Container.php:875\nStack trace:\n#0 /var/www/html/sindicato-dos-streamers/vendor/laravel/framework/src/Illuminate/Container/Container.php(754): Illuminate\\Container\\Container->build()\n#1 /var/www/html/sindicato-dos-streamers/vendor/laravel/framework/src/Illuminate/Foundation/Application.php(841): Illuminate\\Container\\Container->resolve()\n#2 /var/www/html/sindicato-dos-streamers/vendor/laravel/framework/src/Illuminate/Container/Container.php(692): Illuminate\\Foundation\\Application->resolve()\n#3 /var/www/html/sindicato-dos-streamers/vendor/laravel/framework/src/Illuminate/Foundation/Application.php(826): Illuminate\\Container\\Container->make()\n#4 /var/www/html/sindicato-dos-streamers/vendor/laravel/framework/src/Illuminate/Container/Container.php(1420): Illuminate\\Foundation\\Application->make()\n#5 /var/www/html/sindicato-dos-streamers/vendor/laravel/framework/src/Illuminate/Support/Facades/Facade.php(198): Illuminate\\Container\\Container->offsetGet()\n#6 /var/www/html/sindicato-dos-streamers/vendor/laravel/framework/src/Illuminate/Support/Facades/Facade.php(166): Illuminate\\Support\\Facades\\Facade::resolveFacadeInstance()\n#7 /var/www/html/sindicato-dos-streamers/vendor/laravel/framework/src/Illuminate/Support/Facades/Facade.php(255): Illuminate\\Support\\Facades\\Facade::getFacadeRoot()\n#8 /var/www/html/sindicato-dos-streamers/vendor/laravel/framework/src/Illuminate/Foundation/Exceptions/RegisterErrorViewPaths.php(18): Illuminate\\Support\\Facades\\Facade::__callStatic()\n#9 /var/www/html/sindicato-dos-streamers/vendor/laravel/framework/src/Illuminate/Foundation/Exceptions/Handler.php(584): Illuminate\\Foundation\\Exceptions\\RegisterErrorViewPaths->__invoke()\n#10 /var/www/html/sindicato-dos-streamers/vendor/laravel/framework/src/Illuminate/Foundation/Exceptions/Handler.php(565): Illuminate\\Foundation\\Exceptions\\Handler->registerErrorViewPaths()\n#11 /var/www/html/sindicato-dos-streamers/vendor/laravel/framework/src/Illuminate/Foundation/Exceptions/Handler.php(476): Illuminate\\Foundation\\Exceptions\\Handler->renderHttpException()\n#12 /var/www/html/sindicato-dos-streamers/vendor/laravel/framework/src/Illuminate/Foundation/

        $famousList = User::where([
            ['signed_at', '<>', null],
            ['sent_message', '=', true]
        ])->orderBy('views', 'desc')
            ->paginate(30);

        return view('welcome', compact(['streamers', 'viewers', 'signs', 'famousList']));
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
