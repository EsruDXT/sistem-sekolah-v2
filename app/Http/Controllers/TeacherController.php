<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function index()
    {
        $title = "Sistem Sekolah - Daftar Guru";
        $teacher = [
            [
                'id' => 1,

                'nip' => '198501012024',

                'name' => 'Budi Santoso',

                'gender' => 'Laki-Laki',

                'subject' => 'Akuntansi Dasar',

                'phone' => '081234560001',

                'status' => 'Tidak Aktif',

            ],

            [

                'id' => 2,

                'nip' => '198703152024',

                'name' => 'Siti Aminah',

                'gender' => 'Perempuan',

                'subject' => 'Jaringan Komputer',

                'phone' => '081234560002',

                'status' => 'Aktif',

            ]

        ];

        return view('teachers.index', [
            'title' => $title,
            'teachers' => $teacher
        ]);
    }




    public function show(string $id)
    {
    $teacher = [
        'id' => $id,
        'nip' => '198501012024',
        'name' => 'Budi Ariyanto',
        'gender' => 'L',
        'subject' => 'Pemrograman Web',
        'phone_number' => '08123456789',
        'status' => 'Aktif',
    ];

    $title = "Detail Data Guru";

    return view('teachers.show', compact('teacher', 'title'));
    }

    public function create()
    {
        $title = "Sistem Sekolah - Menambahkan Guru";
        $description = "Menampilkan daftar guru yang terdaftar";

        return view('teachers.create', [
            'title' => $title,
            'description' => $description,
        ]);
    }

    public function edit($id)
{
    $teacher = [
        'id' => $id,
        'nip' => '198501012024',
        'name' => 'Budi Ariyanto',
        'gender' => 'L',
        'subject' => 'Pemrograman Web',
        'phone_number' => '08123456789',
        'status' => 'Aktif',
    ];

    $title = "Ubah Data Guru";

    return view('teachers.edit', compact('teacher', 'title'));
}

    public function store()
    {
        return "Menambah data guru baru";
    }

    public function update(string $id)
    {
        return "Mengubah data guru dengan ID: {$id}";
    }

    public function destroy(string $id)
    {
        return "Menghapus data guru dengan ID: {$id}";
    }
}
