<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index(){
        $user = Auth::user();
        if ($user->is_lecturer){
            $subjects = $user->lecturer_of_subjects;
        }
        else{
            $subjects = $user->student_of_subjects;
        }
        return view('dashboard.index', compact('user', 'subjects'));
    }
}
