<?php

namespace App\Http\Controllers;

use App\Http\Requests\Student\StoreRequest;
use App\Http\Requests\Student\UpdateRequest;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index(Request $request)
    {
        $title = "Sistem Sekolah - Daftar Siswa";
        $search = $request->query('search');
        $class = $request->query('class');
        $major = $request->query('major');

        $student = Student::select([
            'id',
            'nis',
            'name',
            'class',
            'major'
        ])
        ->when($search, function ($query, $search) {
            $query->where(function ($query) use ($search) {
                $query->where('name', 'like', "%{$search}%")
                    ->orWhere('nis', 'like', "%{$search}%");
            });
        })
        ->when($class, fn ($query, $class) => $query->where('class', '=', $class))
        ->when($major, fn ($query, $major) => $query->where('major', '=', $major))
        ->paginate(10)
        ->withQueryString();


        $schoolClasses = ['10 AKL', '10 BiD', '10 TKJ', '11 AKL', '11 BiD', '11 TKJ', '12 AKL', '12 BiD', '12 TKJ'];
        $majors = ['AKL', 'BiD', 'TKJ'];
        return view ('students.index', [
            'title' => $title,
            'students' => $student,
            'schoolClasses' => $schoolClasses,
            'majors' => $majors
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

    public function store(StoreRequest $request)
    {
        // Validasi

        $validatedRequest = $request->validated();

        // Tambahkan Data ke database (simulasi)
        Student::create($validatedRequest);

        // Handle if Success
        return redirect()->route('students.index');
    } 

    public function update(Student $student, UpdateRequest $request)
    {
         // Validasi

        $validatedRequest = $request->validated();

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