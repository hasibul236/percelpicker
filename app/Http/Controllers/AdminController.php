<?php
namespace App\Http\Controllers;

use App\Models\Pickup;
use App\Models\User;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function index()
    {
        $pickups     = Pickup::all();
        $totalUsers  = User::count();
        $totalPercel = Pickup::count();
        $totalCost   = Pickup::sum('rate');
        $totalWeight = Pickup::sum('weight');
        return view('admin.dashboard', compact('pickups', 'totalUsers', 'totalCost', 'totalPercel', 'totalWeight'));
    }

    public function manageUsers()
    {
        $users = User::all();
        return view('admin.users', compact('users'));
    }

    public function viewAddUser()
    {
        return view('admin.adduser');
    }
    public function storeUser(Request $request)
    {
        $validated = $request->validate([
            'name'     => 'required|string|max:255',
            'email'    => 'required|email',
            'phone'    => ['required', 'regex:/^\+?[0-9]{10,15}$/'],
            'password' => 'required|min:6',
        ]);
        $validated['password'] = Hash::make($validated['password']);
        User::create($validated);
        return redirect()->route('admin.users')->with('success', 'User created successfully!');
    }

    public function viewPickups()
    {
        $pickups = Pickup::all();
        return view('admin.pickups', compact('pickups'));
    }
    public function downloadPDF($id)
    {
        $pickups = $pickup = Pickup::where('id', $id)->firstOrFail();
        // dd($pickups);
        $pdf = Pdf::loadView('admin.invoice', compact('pickups'));
        return $pdf->download('pickup-report.pdf');
    }
}
