<?php

namespace App\Http\Controllers;

use App\Models\Tamu;
use Illuminate\Http\Request;

class RsvpController extends Controller
{
    public function index(Request $request)
    {
        // Check if THIS browser session has already submitted RSVP
        $userRsvp = $request->session()->get('my_rsvp');

        return view('welcome', compact('userRsvp'));
    }

    public function store(Request $request)
    {
        // If this session already submitted, redirect back
        if ($request->session()->has('my_rsvp')) {
            return redirect('/')->with('info', 'You have already submitted your RSVP! 🎀');
        }

        $validated = $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $rsvpData = [
            'name'       => $validated['name'],
            'created_at' => now()->toFormattedDateString(),
        ];

        Tamu::create([
            'name' => $rsvpData['name'],
        ]);

        // Store in THIS user's session — other browsers are not affected
        $request->session()->put('my_rsvp', $rsvpData);

        $message = "Yay! Can't wait to see you at the party, {$rsvpData['name']}! 🎉";

        return redirect('/')->with('success', $message);
    }

    public function gateEntry(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $name = trim($validated['name']);

        // Save to tamu table
        Tamu::create([
            'name' => $name,
        ]);

        // Store in session so the homepage can greet them by name
        $request->session()->put('my_rsvp', [
            'name'       => $name,
            'created_at' => now()->toFormattedDateString(),
        ]);

        return response()->json([
            'success' => true,
            'name'    => $name,
            'message' => "Yay! Can't wait to see you, {$name}! 🎉",
        ]);
    }

    public function guests()
    {
        $guests     = Tamu::orderBy('created_at', 'desc')->get();
        $todayCount = Tamu::whereDate('created_at', today())->count();
        $firstGuest = Tamu::orderBy('created_at', 'asc')->first();
        return view('guests', compact('guests', 'todayCount', 'firstGuest'));
    }
}
