<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserFeedbackController extends Controller
{
    public function store(Request $request)
{
    $user = Auth::user();

    $this->validate($request, [
        'message' => 'required|min:10',
    ]);

    Feedback::create([
        'user_id' => $user->id,
        'message' => $request->message,
    ]);

    return redirect()->back()->with('success', 'Feedback submitted successfully.');
}

}
