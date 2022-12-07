<?php

namespace App\Http\Controllers;

use App\Models\Announcement;
use App\Models\Student;
use App\Models\Teacher;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $Tadmin = User::count();
        $Tstudent = Student::count();
        $Tteachers = Teacher::count();
        $TAnnouncments = Announcement::count();

        return view('backend.index', compact('Tadmin', 'Tstudent', 'Tteachers', 'TAnnouncments'));
    }
}
