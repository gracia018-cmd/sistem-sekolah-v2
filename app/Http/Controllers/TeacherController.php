<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function index()
    {
        $teachers = [
            [
                'id' => 1,
                'nip' => '198501012024',
                'name' => 'Budi Santoso',
                'gender' => 'Laki-Laki',
                'subject' => 'Akuntansi Dasar',
                'phone_number' => '081234560001',
                'status' => 'Aktif',
            ],
            [
                'id' => 2,
                'nip' => '198703152024',
                'name' => 'Siti Aminah',
                'gender' => 'Perempuan',
                'subject' => 'Jaringan Komputer',
                'phone_number' => '081234560002',
                'status' => 'Aktif',
            ],
        ];

        $title = 'Sistem Sekolah - Daftar Guru';

        return view('teachers.index', compact('teachers', 'title'));
    }

    public function create()
    {
        $title = 'Sistem Sekolah - Tambah Guru';

        return view('teachers.create', compact('title'));
    }

    public function show($id)
    {
        $teachers = [
            [
                'id' => 1,
                'nip' => '198501012024',
                'name' => 'Budi Santoso',
                'gender' => 'Laki-Laki',
                'subject' => 'Akuntansi Dasar',
                'phone_number' => '081234560001',
                'status' => 'Aktif',
            ],
            [
                'id' => 2,
                'nip' => '198703152024',
                'name' => 'Siti Aminah',
                'gender' => 'Perempuan',
                'subject' => 'Jaringan Komputer',
                'phone_number' => '081234560002',
                'status' => 'Aktif',
            ],
        ];

        $teacher = collect($teachers)->firstWhere('id', (int) $id);

        $title = 'Sistem Sekolah - Detail Guru';

        return view('teachers.show', compact('teacher', 'title'));
    }

    public function edit($id)
    {
        $teachers = [
            [
                'id' => 1,
                'nip' => '198501012024',
                'name' => 'Budi Santoso',
                'gender' => 'Laki-Laki',
                'subject' => 'Akuntansi Dasar',
                'phone_number' => '081234560001',
                'status' => 'Aktif',
            ],
            [
                'id' => 2,
                'nip' => '198703152024',
                'name' => 'Siti Aminah',
                'gender' => 'Perempuan',
                'subject' => 'Jaringan Komputer',
                'phone_number' => '081234560002',
                'status' => 'Aktif',
            ],
        ];

        $teacher = collect($teachers)->firstWhere('id', (int) $id);

        $title = 'Sistem Sekolah - Edit Guru';

        return view('teachers.edit', compact('teacher', 'id', 'title'));
    }

    public function store(Request $request)
    {
        return redirect()->route('teachers.index');
    }

    public function update(Request $request, $id)
    {
        return redirect()->route('teachers.show', ['teacher' => $id]);
    }

    public function destroy($id)
    {
        return redirect()->route('teachers.index');
    }
}