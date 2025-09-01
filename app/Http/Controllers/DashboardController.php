<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class DashboardController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        // Fetch all users from the database
        $users = User::all();

        // Pass the users variable to the dashboard view
        return view('dashboard', ['users' => $users]);
    }
}