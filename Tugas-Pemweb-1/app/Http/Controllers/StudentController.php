<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    // menampilkan table
    public function index()
    {
        $students = Student::all();
        return view('students.index', compact('students'));
    }

    // menampilkan form
    public function create()
    {
        return view('students.create');
    }

    // menyimpan data
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'email'  => 'required',
            'jurusan' => 'required'
        ]);

        Student::create($request->all());

        return redirect()->route('students.index')
                         ->with('success','Data berhasil ditambahkan!');
    }
}