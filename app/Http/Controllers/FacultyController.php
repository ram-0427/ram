<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request; 
use App\Models\Faculty;

class FacultyController extends Controller
{

    public function main()
    {
        return view('faculties.main');

    }

    public function index() 
    {
        $faculties = Faculty::paginate(10);
        $faculties = Faculty::all();
        return view('faculties.index', compact('faculties'));
    }


    public function create()
    {
        return view('faculties.create');
    }


    public function store(Request $request)
    {
        $faculty = $request->validate([
            'faculty_name' => 'required',
            'faculty_contactno' =>'required',

            'faculty_email' => 'required|email|unique:facultymst',
        ]);
    
        Faculty::create($faculty);
    
        return redirect()->route('faculties.index');
    }


    public function show($id)
    {
        //
    }

    public function edit($faculty_id)
    { 
        $faculty = Faculty::findOrFail($faculty_id);
        return view('faculties.edit', compact('faculty'));
    }


    public function update(Request $request, $faculty_id)
    {
        $faculty = Faculty::findOrFail($faculty_id);

        $data = $request->validate([
            'faculty_name' => 'required',
            'faculty_contactno' => 'required',
            'faculty_email' => 'required|email|unique:facultymst,faculty_email,' . $faculty->faculty_id . ',faculty_id',
        ]);
    
        $faculty->update($data);
    
        return redirect()->route('faculties.index');
    }
    

    public function destroy($id)
    {
        $faculty = Faculty::findOrFail($id);
        $faculty->delete();
    
        return redirect()->route('faculties.index');
    }
}
