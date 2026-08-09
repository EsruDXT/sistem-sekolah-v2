<?php

namespace App\Http\Controllers\SchoolClass;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ShowController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request, string $id)
    {
        return view('classes.show', [
            'title' => 'Sistem Sekolah - Detail Kelas',
            'description' => 'Menampilkan detail data kelas yang terdaftar',
            'class' => [
                'id' => $id,
                'name' => 'XII AKL 1',
                'grade' => 'XII',
                'major' => 'AKL',
                'homeroom_teacher' => 'Budi Santoso'
            ]
        ]);
    }
}
