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

    public function join(Request $request){
        $validatedRequest = $request->validate([
            'code' => 'required|string|exists:subjects,join_code',
        ]);

        if($validatedRequest){
            // dd("Berhasil Join");
            $subject = Subject::where('join_code', $request->code)->first();
            
            if ($subject->students()->where('user_id', Auth::id())->exists()) {
                return redirect()->back()->with('join_error', 'Anda Sudah Berada Di Kelas Ini');
            }
            $subject->students()->attach(Auth::id());
            return redirect()->route('dashboard')->with('join_success', "Anda Berhasil Bergabung Ke Kelas {$subject->name}");
        }
    }
}
