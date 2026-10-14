<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view('pages.home');
    }

    public function about()
    {
        return view('pages.about');
    }

    public function ministries()
    {
        return view('pages.ministries');
    }

    public function sermons()
    {
        return view('pages.sermons');
    }

    public function events()
    {
        return view('pages.events');
    }

    public function donations()
    {
        return view('pages.donations');
    }

    public function contact()
    {
        return view('pages.contact');
    }

    public function submitContact(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'type' => 'nullable|string',
            'message' => 'required|string',
        ]);

        $type = $request->input('type') === 'prayer' ? 'Prayer request' : 'Message';

        return back()->with('success', "Thank you, {$validated['name']}! Your {$type} has been received. Our team will be praying with you and will reach out shortly.");
    }

    public function subscribeNewsletter(Request $request)
    {
        $validated = $request->validate([
            'email' => 'required|email|max:255',
        ]);

        return back()->with('success', "Thank you! {$validated['email']} has been subscribed to Faith Connect updates & weekly devotionals.");
    }

    public function rsvpEvent(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'event_title' => 'required|string',
            'guests' => 'nullable|integer|min:1|max:10',
        ]);

        $guests = $request->input('guests', 1);

        return back()->with('success', "RSVP confirmed! We've saved {$guests} spot(s) for {$validated['name']} at \"{$validated['event_title']}\". Check your inbox for calendar invites!");
    }

    public function processDonation(Request $request)
    {
        $validated = $request->validate([
            'amount' => 'required|numeric|min:1',
            'frequency' => 'required|string',
            'fund' => 'required|string',
            'donor_name' => 'nullable|string|max:255',
        ]);

        $amountFormatted = number_format($validated['amount'], 2);
        $freqText = $validated['frequency'] === 'monthly' ? 'monthly recurring' : 'one-time';

        return back()->with('success', "God bless you! Your {$freqText} gift of \${$amountFormatted} to the {$validated['fund']} was received with gratitude.");
    }
}
