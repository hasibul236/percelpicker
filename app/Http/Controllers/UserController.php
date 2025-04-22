<?php
namespace App\Http\Controllers;

use App\Models\Pickup;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $user       = auth()->user();
        $pickupData = Pickup::where('user_id', $user->id)->get();

        return view('user.dashboard', compact('pickupData'));
    }

    public function profile()
    {
        $user = auth()->user();

        return view('user.profile', compact('user'));
    }

    public function storeProfile(Request $request)
    {
        $validated = $request->validate([
            'name'     => 'required|string|max:255',
            'email'    => 'required|email',
            'phone'    => ['required', 'regex:/^\+?[0-9]{10,15}$/'],
            'password' => 'nullable|min:6',
            'photo'    => 'nullable|image|mimes:jpg,jpeg,png|max:2048', // 2MB max
        ]);

        // Handle file upload if photo exists
        if ($request->hasFile('photo')) {
            $photoPath          = $request->file('photo')->store('profile_picture', 'public'); // stores in storage/app/public/photos
            $validated['photo'] = $photoPath;
        }

        // Example: If registering a user
        $user = auth()->user();

        $user->update([
            'name'     => $validated['name'],
            'email'    => $validated['email'],
            'password' => isset($validated['password']) ? Hash::make($validated['password']) : $user->password,
            'photo'    => $validated['photo'] ?? $user->photo,
        ]);

        return redirect()->back()->with('success', 'Profile updated successfully.');
        // dd($request);
    }
    public function PickupForm()
    {
        return view('user.pickupform');
    }
    public function storePickup(Request $request)
    {
        $validated = $request->validate([
            'user_id'         => 'required|exists:users,id',
            'pickup_location' => 'required|string|max:255',
            'company_name'    => 'required|string|max:255',
            'reciever_name'   => 'required|string|max:255',
            'phone'           => 'required|digits:10',
            'pincode'         => 'required|integer',
            'rate'            => 'required|numeric',
            'weight'          => 'required|numeric',
            'barcode'         => 'required|string',
            'pickup_date'     => 'required|string',
        ]);

        // dd($request);
        Pickup::create($validated);
        return redirect()->route('user.PickupForm')->with('success', 'Pickup request created successfully!');
    }
}
