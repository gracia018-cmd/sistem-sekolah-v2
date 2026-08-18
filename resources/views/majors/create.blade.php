@extends('layouts.app')

@section('title', $title)

@section('content')

<div class="mb-8 border-b border-[#E5E3DB] pb-5">
    <p class="mb-1 text-[11px] uppercase tracking-[0.2em] text-[#A16207]">
        Tahun Ajaran 2025/2026
    </p>

    <h1 class="font-display text-3xl font-semibold text-[#16213A]">
        Tambah Jurusan
    </h1>
</div>

<div class="border border-[#E5E3DB] bg-white p-6">

    <form action="{{ route('majors.store') }}" method="POST">
        @csrf

        <div class="mb-5">
            <label
                for="code"
                class="mb-2 block text-sm font-medium text-[#16213A]"
            >
                Kode Jurusan
            </label>

            <input
                type="text"
                id="code"
                name="code"
                placeholder="Contoh: AKL, TKJ, BD"
                class="w-full border border-[#E5E3DB] px-4 py-2.5 text-sm"
            >
        </div>

        <div class="mb-5">
            <label
                for="name"
                class="mb-2 block text-sm font-medium text-[#16213A]"
            >
                Nama Jurusan
            </label>

            <input
                type="text"
                id="name"
                name="name"
                placeholder="Contoh: Teknik Komputer dan Jaringan"
                class="w-full border border-[#E5E3DB] px-4 py-2.5 text-sm"
            >
        </div>

        <div class="mb-6">
            <label
                for="description"
                class="mb-2 block text-sm font-medium text-[#16213A]"
            >
                Deskripsi
            </label>

            <textarea
                id="description"
                name="description"
                rows="4"
                placeholder="Masukkan deskripsi singkat mengenai jurusan"
                class="w-full border border-[#E5E3DB] px-4 py-2.5 text-sm"
            ></textarea>
        </div>

        <div class="flex gap-3">

            <a
                href="{{ route('majors.index') }}"
                class="border border-[#E5E3DB] px-5 py-2.5 text-sm font-medium text-[#16213A]"
            >
                Batal
            </a>

            <button
                type="submit"
                class="bg-[#16213A] px-5 py-2.5 text-sm font-medium text-white"
            >
                Simpan
            </button>

        </div>

    </form>

</div>

@endsection