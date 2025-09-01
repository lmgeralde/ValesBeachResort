<?php

namespace App\Http\Controllers;

use App\Models\User; // Import the User model
use Illuminate\Http\Request;
use Illuminate\View\View;

class AdminController extends Controller
{
    /**
     * Display a listing of the users for the admin dashboard.
     *
     * @return \Illuminate\View\View
     */
    public function index(): View
    {
        // Fetch all users from the database
        $users = User::all();

        // Pass the users data to the admin.dashboard view
        return view('admin.dashboard', compact('users'));
    }
}
