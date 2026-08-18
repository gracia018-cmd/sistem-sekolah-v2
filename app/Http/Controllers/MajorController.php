<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MajorController extends Controller
{
    public function index()
    {
        $majors = [
            [
                'id' => 1,
                'code' => 'AKL',
                'name' => 'Akuntansi dan Keuangan Lembaga',
                'description' => 'Program keahlian akuntansi dan keuangan.',
            ],
            [
                'id' => 2,
                'code' => 'TKJ',
                'name' => 'Teknik Komputer dan Jaringan',
                'description' => 'Program keahlian komputer dan jaringan.',
            ],
            [
                'id' => 3,
                'code' => 'BD',
                'name' => 'Bisnis Digital',
                'description' => 'Program keahlian bisnis dan teknologi digital.',
            ],
        ];

        $title = 'Daftar Jurusan';

        return view('majors.index', compact('majors', 'title'));
    }

    public function create()
    {
        $title = 'Tambah Jurusan';

        return view('majors.create', compact('title'));
    }

    public function edit($id)
    {
        $majors = [
            [
                'id' => 1,
                'code' => 'AKL',
                'name' => 'Akuntansi dan Keuangan Lembaga',
                'description' => 'Program keahlian akuntansi dan keuangan.',
            ],
            [
                'id' => 2,
                'code' => 'TKJ',
                'name' => 'Teknik Komputer dan Jaringan',
                'description' => 'Program keahlian komputer dan jaringan.',
            ],
            [
                'id' => 3,
                'code' => 'BD',
                'name' => 'Bisnis Digital',
                'description' => 'Program keahlian bisnis dan teknologi digital.',
            ],
        ];

        $major = collect($majors)->firstWhere('id', (int) $id);

        $title = 'Ubah Jurusan';

        return view('majors.edit', compact('major', 'id', 'title'));
    }

    public function show($id)
    {
        $majors = [
            [
                'id' => 1,
                'code' => 'AKL',
                'name' => 'Akuntansi dan Keuangan Lembaga',
                'description' => 'Program keahlian akuntansi dan keuangan.',
            ],
            [
                'id' => 2,
                'code' => 'TKJ',
                'name' => 'Teknik Komputer dan Jaringan',
                'description' => 'Program keahlian komputer dan jaringan.',
            ],
            [
                'id' => 3,
                'code' => 'BD',
                'name' => 'Bisnis Digital',
                'description' => 'Program keahlian bisnis dan teknologi digital.',
            ],
        ];

        $major = collect($majors)->firstWhere('id', (int) $id);

        $title = 'Detail Jurusan';

        return view('majors.show', compact('major', 'title'));
    }

    public function store(Request $request)
    {
        return redirect()->route('majors.index');
    }

    public function update(Request $request, $id)
    {
        return redirect()->route('majors.show', ['major' => $id]);
    }

    public function destroy($id)
    {
        return redirect()->route('majors.index');
    }
}