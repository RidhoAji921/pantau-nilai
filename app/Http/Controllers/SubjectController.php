<?php

namespace App\Http\Controllers;

use App\Models\Subject;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SubjectController extends Controller
{
    public function createIndex(){
        return view('create_subject.index');
    }

    public function store(Request $request){
        $validatedRequest = $request->validate([
            'name' => 'required|max:255|unique:subjects',
            'description' => 'max:255',
        ]);

        $joinCode = Str::upper(Str::random(6));

        $userId = Auth::id();
        $validatedRequest['lecturer_id'] = $userId;
        $validatedRequest['join_code'] = $joinCode;

        Subject::create($validatedRequest);
        return redirect('/dashboard');
    }
}
