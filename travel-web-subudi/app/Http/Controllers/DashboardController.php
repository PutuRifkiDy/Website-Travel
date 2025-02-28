<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\PackageBooking;
use App\Models\PackageTour;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
    public function index(){
        $category_count = Category::count();
        $package_booking_count = PackageTour::count();
        $user_count = User::count();

        $package_tours = PackageTour::get();
        return view('dashboard', compact('category_count', 'package_booking_count', 'user_count', 'package_tours'));
    }

    public function my_bookings(){
        return view('dashboard.my_bookings');
    }

    public function booking_details(PackageBooking $packageBooking){
        return view('dashboard.booking_details', compact('packageBooking'));
    }
}
