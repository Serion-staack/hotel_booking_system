<?php

namespace App\Http\Controllers;

use App\Models\TermsAcceptance;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TermsController extends Controller
{
    private string $currentVersion = 'v1.0';

    public function show()
    {
        return view('terms.show', ['version' => $this->currentVersion]);
    }

    public function accept(Request $request)
    {
        TermsAcceptance::firstOrCreate(
            ['user_id' => Auth::id(), 'version' => $this->currentVersion],
            [
                'accepted_at' => Carbon::now(),
                'ip'          => $request->ip(),
                'user_agent'  => $request->userAgent()
            ]
        );
        return redirect()->intended(route('dashboard'));
    }
}
