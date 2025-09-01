<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaffController extends Controller
{
    /**
     * Display the staff dashboard.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        // For now, we'll use dummy data since the database tables don't exist yet.
        $recentBookings = [
            ['id' => 1, 'guest_name' => 'John Doe', 'check_in' => '2025-10-01'],
            ['id' => 2, 'guest_name' => 'Jane Smith', 'check_in' => '2025-10-02'],
            ['id' => 3, 'guest_name' => 'Peter Jones', 'check_in' => '2025-10-03'],
        ];

        $totalServices = 15;
        $totalPayments = 1250.50;

        // Pass the data to the dashboard view.
        return view('staff.dashboard', [
            'recentBookings' => $recentBookings,
            'totalServices' => $totalServices,
            'totalPayments' => $totalPayments,
        ]);
    }
}

