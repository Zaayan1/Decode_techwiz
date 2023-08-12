<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;
use App\Notifications\NewContactFormSubmission;

class AdminHomeController extends Controller
{
    public function newContactFormSubmission(Request $request)
{
    $admin = User::where('is_admin', true)->first(); // Assuming you have an 'is_admin' field
    Notification::send($admin, new NewContactFormSubmission($request->all()));
}
}
