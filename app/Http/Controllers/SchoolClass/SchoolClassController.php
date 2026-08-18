<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SchoolClassController extends Controller
{
    public function index()
    {
        $classes = [
            [
                'id' => 1,
                'name' => 'XII AKL 1',
                'grade' => 'XII',
                'major' => 'AKL',
                'homeroom_teacher' => 'Budi Santoso',
            ],
            [
                'id' => 2,
                'name' => 'XII TKJ 1',
                'grade' => 'XII',
                'major' => 'TKJ',
                'homeroom_teacher' => 'Siti Aminah',
            ],
        ];

        $title = 'Sistem Sekolah - Daftar Kelas';

        return view('classes.index', compact('classes', 'title'));
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

        $title = 'Sistem Sekolah - Tambah Kelas';

        return view('classes.create', compact('majors', 'teachers', 'title'));
    }

    public function show($id)
    {
        $classes = [
            [
                'id' => 1,
                'name' => 'XII AKL 1',
                'grade' => 'XII',
                'major' => 'AKL',
                'homeroom_teacher' => 'Budi Santoso',
            ],
            [
                'id' => 2,
                'name' => 'XII TKJ 1',
                'grade' => 'XII',
                'major' => 'TKJ',
                'homeroom_teacher' => 'Siti Aminah',
            ],
        ];

        $class = collect($classes)->firstWhere('id', (int) $id);

        $title = 'Sistem Sekolah - Detail Kelas';

        return view('classes.show', compact('class', 'title'));
    }

    public function edit($id)
    {
        $classes = [
            [
                'id' => 1,
                'name' => 'XII AKL 1',
                'grade' => 'XII',
                'major' => 'AKL',
                'homeroom_teacher' => 'Budi Santoso',
            ],
            [
                'id' => 2,
                'name' => 'XII TKJ 1',
                'grade' => 'XII',
                'major' => 'TKJ',
                'homeroom_teacher' => 'Siti Aminah',
            ],
        ];

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

        $class = collect($classes)->firstWhere('id', (int) $id);

        $title = 'Sistem Sekolah - Edit Kelas';

        return view('classes.edit', compact(
            'id',
            'class',
            'majors',
            'teachers',
            'title'
        ));
    }

    public function store(Request $request)
    {
        return redirect()->route('classes.index');
    }

    public function update(Request $request, $id)
    {
        return redirect()->route('classes.show', ['id' => $id]);
    }

    public function destroy($id)
    {
        return redirect()->route('classes.index');
    }
}