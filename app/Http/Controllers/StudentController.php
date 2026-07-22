<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        return "Ini adalah halaman daftar siswa";
    }

    public function show(string $id)
    {
        return "Ini adalah halaman detail siswa dengan ID: " . $id;
    }

    public function create()
    {
        return "Ini adalah halaman untuk menambahkan siswa baru";
    }

    public function store(Request $request, string $id)
    {
        return "Menyimpan data siswa baru";
    }

    public function edit(string $id)
    {
        return "Ini adalah halaman untuk mengedit siswa dengan ID: " . $id;
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

