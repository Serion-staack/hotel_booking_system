<?php

namespace App\Http\Middleware;

use App\Models\TermsAcceptance;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class EnsureTermsAccepted
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    private string $currentVersion = 'v1.0';

    public function handle(Request $request, Closure $next)
    {
        if (Auth::check()) {
            $accepted = TermsAcceptance::where('user_id', Auth::id())
                ->where('version', $this->currentVersion)
                ->exists();

            if (! $accepted && ! $request->routeIs('terms.show','terms.accept')) {
                return redirect()->route('terms.show');
            }
        }
        return $next($request);
    }
}
