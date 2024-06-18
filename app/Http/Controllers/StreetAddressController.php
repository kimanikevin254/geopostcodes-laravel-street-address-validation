<?php

namespace App\Http\Controllers;

use App\Models\StreetAddress;
use Illuminate\Http\Request;

class StreetAddressController extends Controller
{
    public function create()
    {
        return view('street_address.create');
    }

    public function validate(Request $request)
    {
        // Validate the incoming data
        $request->validate([
            'street' => 'required|string',
            'city' => 'required|string',
            'state' => 'required|string',
            'zip_code' => 'required|string',
        ], [
            'street.required' => 'Street field is required.',
            'city.required' => 'City field is required.',
            'state.required' => 'State field is required.',
            'zip_code.required' => 'Zip Code field is required.',
        ]);

        // Retrieve inputs
        $street = $request->input('street');
        $city = $request->input('city');
        $state = $request->input('state');
        $zipCode = $request->input('zip_code');

        // Check if provided address exists in DB
        $addressExists = StreetAddress::where('street', $street)
            ->where('city', $city)
            ->where('state', $state)
            ->where('zip_code', $zipCode)
            ->exists();

        // Return the appropriate response
        if ($addressExists) {
            return back()->with('success', 'Address is valid.');
        } else {
            return back()->withErrors(['message' => 'Address does not exist. Please check your input.'])->withInput();
        }
    }
}
