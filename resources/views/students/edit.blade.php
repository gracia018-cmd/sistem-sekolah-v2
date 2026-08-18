@extends('layouts.app')

@section('title', $title)

@section('content')

<div class="mb-8 border-b border-[#E5E3DB] pb-5">
    <p class="mb-1 text-[11px] uppercase tracking-[0.2em] text-[#A16207]">
        Tahun Ajaran 2025/2026
    </p>

    <h1 class="font-display text-3xl font-semibold text-[#16213A]">
        Ubah Siswa
    </h1>
</div>

<div class="border border-[#E5E3DB] bg-white p-6">

    <form action="{{ route('students.update', ['id' => $id]) }}" method="POST">

        @csrf
        @method('PUT')

        <div class="mb-5">
            <label for="nis"
                class="mb-2 block text-sm font-medium text-[#16213A]">
                NIS
            </label>

            <input
                type="text"
                id="nis"
                name="nis"
                value="{{ $class['nis'] }}"
                class="w-full border border-[#E5E3DB] px-4 py-2.5 text-sm"
            >
        </div>

        <div class="mb-5">
            <label for="name"
                class="mb-2 block text-sm font-medium text-[#16213A]">
                Nama Siswa
            </label>

            <input
                type="text"
                id="name"
                name="name"
                value="{{ $class['name'] }}"
                class="w-full border border-[#E5E3DB] px-4 py-2.5 text-sm"
            >
        </div>

        <div class="mb-5">
            <label for="class"
                class="mb-2 block text-sm font-medium text-[#16213A]">
                Kelas
            </label>

            <input
                type="text"
                id="class"
                name="class"
                value="{{ $class['class'] }}"
                class="w-full border border-[#E5E3DB] px-4 py-2.5 text-sm"
            >
        </div>

        <div class="mb-6">
            <label for="major"
                class="mb-2 block text-sm font-medium text-[#16213A]">
                Jurusan
            </label>

            <input
                type="text"
                id="major"
                name="major"
                value="{{ $class['major'] }}"
                class="w-full border border-[#E5E3DB] px-4 py-2.5 text-sm"
            >
        </div>

        <div class="flex gap-3">

            <a href="{{ route('students.index') }}"
                class="border border-[#E5E3DB] px-5 py-2.5 text-sm font-medium text-[#16213A]">
                Batal
            </a>

            <button
                type="submit"
                class="bg-[#16213A] px-5 py-2.5 text-sm font-medium text-white">
                Simpan Perubahan
            </button>

        </div>

    </form>

</div>

@endsection