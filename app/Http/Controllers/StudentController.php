<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $students = [
            [
                'id' => 1,
                'nis' => '1001',
                'name' => 'Andi',
                'class' => 'XII TKJ 1',
                'major' => 'TKJ',
            ],
            [
                'id' => 2,
                'nis' => '1002',
                'name' => 'Budi',
                'class' => 'XII TKJ 2',
                'major' => 'TKJ',
            ],
            [
                'id' => 3,
                'nis' => '1003',
                'name' => 'Nina',
                'class' => 'XII TKJ 3',
                'major' => 'TKJ',
            ],
        ];

        $title = 'Daftar Siswa';

        return view('students.index', compact('students', 'title'));
    }

    public function create()
    {
        $majors = [
            [
                'id' => 1,
                'code' => 'AKL',
                'name' => 'Akuntansi dan Keuangan Lembaga',
            ],
            [
                'id' => 2,
                'code' => 'TKJ',
                'name' => 'Teknik Komputer dan Jaringan',
            ],
            [
                'id' => 3,
                'code' => 'BD',
                'name' => 'Bisnis Digital',
            ],
        ];

        $teachers = [
            [
                'id' => 1,
                'name' => 'Budi Santoso',
            ],
            [
                'id' => 2,
                'name' => 'Siti Aminah',
            ],
        ];

        $title = 'Catat Siswa Baru';

        return view('students.create', compact('majors', 'teachers', 'title'));
    }

    public function show($id)
    {
        $students = [
            [
                'id' => 1,
                'nis' => '1001',
                'name' => 'Andi',
                'class' => 'XII TKJ 1',
                'major' => 'TKJ',
            ],
            [
                'id' => 2,
                'nis' => '1002',
                'name' => 'Budi',
                'class' => 'XII TKJ 2',
                'major' => 'TKJ',
            ],
            [
                'id' => 3,
                'nis' => '1003',
                'name' => 'Nina',
                'class' => 'XII TKJ 3',
                'major' => 'TKJ',
            ],
        ];

        $student = collect($students)->firstWhere('id', (int) $id);

        $title = 'Detail Siswa';

        return view('students.show', compact('student', 'title'));
    }

    public function edit($id)
    {
        $students = [
            [
                'id' => 1,
                'nis' => '1001',
                'name' => 'Andi',
                'class' => 'XII TKJ 1',
                'major' => 'TKJ',
            ],
            [
                'id' => 2,
                'nis' => '1002',
                'name' => 'Budi',
                'class' => 'XII TKJ 2',
                'major' => 'TKJ',
            ],
            [
                'id' => 3,
                'nis' => '1003',
                'name' => 'Nina',
                'class' => 'XII TKJ 3',
                'major' => 'TKJ',
            ],
        ];

        $student = collect($students)->firstWhere('id', (int) $id);

        $title = 'Ubah Siswa';

        return view('students.edit', compact('student', 'id', 'title'));
    }

    public function store(Request $request)
    {
        return redirect()->route('students.index');
    }

    public function update(Request $request, $id)
    {
        return redirect()->route('students.show', ['student' => $id]);
    }

    public function destroy($id)
    {
        return redirect()->route('students.index');
    }
}