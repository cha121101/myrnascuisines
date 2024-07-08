<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Models\AuditTrails;
use App\Models\HistoryTables;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     */

    public function store(LoginRequest $request): RedirectResponse
    {
        
        $request->authenticate();

        $request->session()->regenerate();
        
        date_default_timezone_set('Asia/Manila');

        $getusername = User::where('email', 'like', '%' . $request->email . '%')->get();

        foreach ($getusername as $key => $value) {
            AuditTrails::create([
                "customer_id" => 00000,
                "admin_name" => strtoupper($value->name),
                "action" =>strtoupper('login'),
                "customer_name" => "------",
                "reservation_type" =>  "------",
                "time_of_action" =>  date("Y-m-d H:i:s")
            ]);
        };
        return redirect()->intended(RouteServiceProvider::HOME);
    }

    /**
     * Destroy an authenticated session.
     */
    //: RedirectResponse
    public function destroy(Request $request)
    {   
        
        date_default_timezone_set('Asia/Manila');
        AuditTrails::create([
            "customer_id" => 00000,
            "admin_name" => strtoupper(Auth::user()->name),
            "action" =>strtoupper('logout'),
            "customer_name" => "------",
            "reservation_type" =>  "------",
            "time_of_action" =>  date("Y-m-d H:i:s")
        ]);
        Auth::guard('web')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/admin/login');
    }
}

