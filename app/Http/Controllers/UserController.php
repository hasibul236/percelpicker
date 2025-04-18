<?php
namespace App\Http\Controllers;

use App\Models\Pickup;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view('user.dashboard');
    }

    public function storePickup(Request $request)
    {
        $validated = $request->validate([
            'pickup_location'       => 'required|string|max:255',
            'reciever_company_name' => 'required|string|max:255',
            'pincode'               => 'required|integer',
            'phone'                 => 'required|digits:10',
            'rate'                  => 'required|numeric',
            'weight'                => 'required|numeric',
            'barcode'               => 'required|string',
            'percel_type'           => 'required|string',
        ]);

        Pickup::create($validated);

        return redirect()->route('user.dashboard')->with('success', 'Pickup request created successfully!');
    }
}
