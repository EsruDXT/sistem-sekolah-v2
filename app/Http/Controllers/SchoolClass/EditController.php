<?php

namespace App\Http\Controllers\SchoolClass;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EditController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request, string $id)
    {
        // Data dummy majors untuk dropdown pilihan jurusan
        $majors = [
            ['id' => 1, 'code' => 'AKL', 'name' => 'Akuntansi dan Keuangan Lembaga'],
            ['id' => 2, 'code' => 'TKJ', 'name' => 'Teknik Komputer dan Jaringan'],
            ['id' => 3, 'code' => 'BD',  'name' => 'Bisnis Digital'],
        ];

        // Data dummy teachers untuk dropdown pilihan wali kelas
        $teachers = [
            ['id' => 1, 'name' => 'Budi Santoso'],
            ['id' => 2, 'name' => 'Siti Nurhaliza'],
            ['id' => 3, 'name' => 'Ahmad Dahlan'],
        ];

        return view('classes.edit', [
            'title' => 'Sistem Sekolah - Edit Kelas',
            'description' => 'Menampilkan form untuk mengedit data kelas yang terdaftar',
            'class' => [
                'id' => $id,
                'name' => 'XII AKL 1',
                'grade' => 'XII',
                'major_id' => 1,
                'major' => 'AKL',
                'teacher_id' => 1,
                'homeroom_teacher' => 'Budi Santoso'
            ],
            'majors' => $majors,     // <-- Dikirim ke view
            'teachers' => $teachers, // <-- Dikirim ke view
        ]);
    }
}