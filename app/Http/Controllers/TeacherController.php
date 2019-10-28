<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Teacher;

class TeacherController extends Controller
{
    public function index()
    {
        return Teacher::all();
    }

    public function show(Request $request){


        $teacher = Teacher::findOrFail($request->id);

        if($request->query('expand')){
            $teacher->grades = $teacher->grade()->get();
        }

        return $teacher;

    }
}
