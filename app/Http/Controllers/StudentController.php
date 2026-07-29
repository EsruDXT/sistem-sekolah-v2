<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        return view('students.index',);
    }

    public function create()
    {
        return view('students.create',);
    }

    public function show(string $id)
    {
        return view('students.show',);
    }

    public function store(Request $request)
    {
        return "Menyimpan data siswa baru";
    }

    public function edit(string $id)
    {
        return view('students.edit',);
    }

    public function update(Request $request, string $id)
    {
        return "Memperbarui data siswa dengan ID: " . $id;
    }

    public function destroy(string $id)
    {
        return "Menghapus siswa dengan ID: " . $id;
    }
}
