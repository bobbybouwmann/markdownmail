<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class AuthController extends Controller
{
    /**
     * Redirect the user to the GitHub authentication page.
     *
     * @return Response
     */
    public function redirectToProvider($provider)
    {
        return Socialite::driver($provider)->redirect();
    }

    /**
     * Obtain the user information from GitHub.
     *
     * @return Response
     */
    public function handleProviderCallback($provider)
    {
        $socialUser = Socialite::driver('github')->user();

        $user = User::where('github_id', $socialUser->getId())
            ->orWhere('email', $socialUser->getEmail())
            ->first();

        if (! $user instanceof User) {
            $user = User::create([
                'email' => $socialUser->getEmail(),
                'name' => ! empty($socialUser->getName()) ? $socialUser->getName() : $socialUser->getNickname(),
                'github_id' => $socialUser->getId(),
                'auth_type' => 'github',
            ]);
        }

        Auth::login($user);

        return redirect(route('themes.index'));
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     * @throws \RuntimeException
     */
    public function logout(Request $request)
    {
        auth()->logout();

        $request->session()->flush();

        $request->session()->regenerate();

        return redirect('/');
    }
}
