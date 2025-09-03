<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Mail\SubscriberMail;
use App\Models\Subscriber;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class SubscriberController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $subscribers = Subscriber::where('status', 1)->get();
        return view('admin.subscriber.index', compact('subscribers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.subscriber.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'email' => ['required', 'email', 'max:255', 'unique:subscribers,email']
        ]);

        $subscriber = new Subscriber();
        $subscriber->email = $request->email;
        $subscriber->status = $request->status;
        $subscriber->save();

        return redirect()->route('admin.subscriber.index')->with('toast', [
            'type' => 'success',
            'message' => 'Created Successfully!'
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $subscriber = Subscriber::findOrFail($id);
        return view('admin.subscriber.edit', compact('subscriber'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'email' => ['required', 'email', 'max:255', 'unique:subscribers,email,' . $id]
        ]);

        $subscriber = Subscriber::findOrFail($id);
        $subscriber->email = $request->email;
        $subscriber->status = $request->status;
        $subscriber->save();

        return redirect()->route('admin.subscriber.index')->with('toast', [
            'type' => 'success',
            'message' => 'Updated Successfully!'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Subscriber::findOrFail($id)->delete();

        return response(['status' => 'success', 'message' => 'Deleted Successfully!']);
    }

    public function subscriberBlock()
    {
        $subscribers = Subscriber::where('status', 0)->get();
        return view('admin.subscriber.block', compact('subscribers'));
    }

    public function subscriberSent(Request $request)
    {
        $request->validate([
            'subject' => ['required', 'max:255'],
            'message' => ['required']
        ]);

        $subscribers = Subscriber::where('status', 1)->pluck('email')->toArray();

        Mail::to($subscribers)->send(new SubscriberMail($request->subject, $request->message));

        return redirect()->back()->with('toast', [
            'type' => 'success',
            'message' => 'News letter Sent Successfully!'
        ]);
    }
}
