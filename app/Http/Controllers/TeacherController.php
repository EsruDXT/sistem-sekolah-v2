<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function index()
    {
        return "Ini adalah halaman daftar guru";
    }

    public function show(string $id)
    {
        return "Ini adalah halaman detail guru dengan ID: " . $id;
    }

    public function create()
    {
        return "Ini adalah halaman untuk menambahkan guru baru";
    }

    public function store(Request $request, string $id)
    {
        return "Menyimpan data guru baru";
    }

    public function edit(string $id)
    {
        return "Ini adalah halaman untuk mengedit guru dengan ID: " . $id;
    }

    public function update(Request $request, string $id)
    {
        return "Memperbarui data guru dengan ID: " . $id;
    }

    public function destroy(string $id)
    {
        return "Menghapus guru dengan ID: " . $id;
    }
}