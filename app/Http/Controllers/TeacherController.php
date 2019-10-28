<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Teacher;

class TeacherController extends Controller
{
    public function index(Request $request)
    {
        $teachers = Teacher::all();

        if($request->query('expand')) {
            foreach ($teachers as $t) {
                $t->grades = $t->grade()->get();
            }
        }

        return $teachers;
    }

    public function show(Request $request){


        $teacher = Teacher::findOrFail($request->id);

        if($request->query('expand')){
            $teacher->grades = $teacher->grade()->get();
        }

        return $teacher;

    }
}
