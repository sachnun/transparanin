<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use Illuminate\Http\Request;

class DashboardActivityController extends Controller
{
    public function index()
    {
        $activities = Activity::latest()->paginate(15);

        return view('dashboard.activity.index', compact('activities'));
    }
}
