<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response;

class EmailVerificationPromptController extends Controller
{
    /**
     * Display the email verification prompt.
     */
    public function __invoke(Request $request): RedirectResponse|Response
    {
        return $request->user('admin')->hasVerifiedEmail()
                    ? redirect()->intended(route('admin.dashboard', absolute: false))
                    : Inertia::render('Admin/Auth/VerifyEmail', ['status' => session('status')]);
    }
}
