<?php
namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
        $this->middleware('auth')->only('logout');
    }

    /**
     * Get the post login redirect path based on user's role.
     *
     * @param  Request  $request
     * @return string
     */
    protected function redirectTo()
    {
        // Check if the authenticated user is an admin or a regular user
        if (auth()->user()->role === 'admin') {
            return route('admin.dashboard'); // Redirect to admin dashboard
        }

        return route('user.dashboard'); // Redirect to user dashboard
    }
}
