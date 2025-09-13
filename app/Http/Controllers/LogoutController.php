<?php

namespace App\Http\Controllers;

use Illuminate\Container\Attributes\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth as FacadesAuth;

class LogoutController extends Controller
{
    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request)
    {
    }
}
