<?php
namespace App\Http\Controllers;

use App\Models\Pickup;
use App\Models\User;

class AdminController extends Controller
{
    public function index()
    {
        $pickups = Pickup::all();

        return view('admin.dashboard', compact('pickups'));
    }

    public function manageUsers()
    {
        $users = User::all();
        return view('admin.users', compact('users'));
    }

    public function viewPickups()
    {
        $pickups = Pickup::all();
        return view('admin.pickups', compact('pickups'));
    }
}
