<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $title = "Sistem Sekolah - Daftar Siswa";
        $student = Student::select([
            'id',
            'nis',
            'name',
            'class',
            'major'
        ])
        ->get();

        return view ('students.index', [
            'title' => $title,
            'students' => $student
        ]);
    }

       
    

    public function show(Student $student)
    {
        $title = "Sistem Sekolah - Detail Siswa";
        $description = "Menampilkan daftar siswa yang terdaftar";
        

        return view('students.show', [
            'title' => $title,
            'description' => $description,
            'student' => $student
        ]);
    }

    public function create()
    {
        $title = "Sistem Sekolah - Menambahkan Siswa";
        $description = "Menampilkan daftar siswa yang terdaftar";

        return view('students.create', [
            'title' => $title,
            'description' => $description,
        ]);
    } 

    public function edit(Student $student)
    {
        $title = "Sistem Sekolah - Edit Siswa";
        $description = "Menampilkan daftar siswa yang terdaftar";

        return view('students.edit', [
            'title' => $title,
            'description' => $description,
            'student' => $student
        ]);
    } 

    public function store(Request $request)
    {
        // Validasi

        $validatedRequest = $request->validate([
            'nis' => ['required', 'string', 'size:4', 'unique:students,nis'],
            'name' => 'required|string',
            'class' => 'required|string',
            'major' => 'required|string|in:AKL,TKJ,BiD',
            'gender' => 'required|in:Laki-laki,Perempuan',
        ]);

        // Tambahkan Data ke database (simulasi)
        Student::create($validatedRequest);

        // Handle if Success
        return redirect()->route('students.index');
    } 

    public function update(Student $student, Request $request)
    {
         // Validasi

        $validatedRequest = $request->validate([
            'nis' => ['required', 'string', 'size:4', 'unique:students,nis,' . $student->id],
            'name' => 'required|string',
            'class' => 'required|string',
            'major' => 'required|string|in:AKL,TKJ,BiD',
            'gender' => 'required|in:Laki-laki,Perempuan',
        ]);

        // Update Data
        $student->update($validatedRequest);

        // Handle if Success
        return redirect()->route('students.index');
    }
    

    public function destroy(Student $student)
    {   
        // Delete Data

        $student->delete();

        // Handle if Success
        return redirect()->route('students.index');
    }

}