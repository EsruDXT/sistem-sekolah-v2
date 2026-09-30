<?php

namespace App\Http\Requests\Student;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'nis' => ['required', 'string', 'max:10'],
            'name' => ['required', 'string', 'max:255'],
            'gender' => ['required', 'string', 'in:Laki-laki,Perempuan'],
            'major' => ['required', 'string', 'in:AKL,TKJ,BiD'],
            'class' => ['required', 'string', 'max:10'],
        ];
    }

    // public function attributes()
    // {
    //     return[
    //         'nis' => 'Nomor Induk Siswa',
    //         'name' => 'Nama Lengkap',
    //         'gender' => 'Jenis Kelamin',
    //         'major' => 'Jurusan',
    //         'class' => 'Kelas',
    //     ];
    // }

    public function messages()
    {
        return [
            'nis.required' => 'Nomor Induk Siswa harus diisi.',
            'nis.string' => 'Nomor Induk Siswa harus berupa string.',
            'nis.max' => 'Nomor Induk Siswa tidak boleh lebih dari :max karakter.',
            'name.required' => 'Nama Lengkap harus diisi.',
            'name.string' => 'Nama Lengkap harus berupa string.',
            'name.max' => 'Nama Lengkap tidak boleh lebih dari :max karakter.',
            'gender.required' => 'Jenis Kelamin harus diisi.',
            'gender.string' => 'Jenis Kelamin harus berupa string.',
            'gender.in' => 'Jenis Kelamin harus salah satu dari: Laki-laki, Perempuan.',
            'major.required' => 'Jurusan harus diisi.',
            'major.string' => 'Jurusan harus berupa string.',
            'major.in' => 'Jurusan harus salah satu dari: AKL, TKJ, BiD.',
            'class.required' => 'Kelas harus diisi.',
            'class.string' => 'Kelas harus berupa string.',
            'class.max' => 'Kelas tidak boleh lebih dari :max karakter.',
        ];
    }
}
