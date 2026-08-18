```blade
@extends('layouts.app')

@section('title', $title)

@section('content')

<div class="mb-8 border-b border-[#E5E3DB] pb-5">
    <p class="mb-1 text-[11px] uppercase tracking-[0.2em] text-[#A16207]">
        Tahun Ajaran 2025/2026
    </p>

    <h1 class="font-display text-3xl font-semibold text-[#16213A]">
        Tambah Guru
    </h1>
</div>

<div class="border border-[#E5E3DB] bg-white p-6">

    <form action="{{ route('teachers.store') }}" method="POST">
        @csrf

        <div class="mb-5">
            <label for="nip" class="mb-2 block text-sm font-medium text-[#16213A]">
                NIP
            </label>

            <input
                type="text"
                id="nip"
                name="nip"
                class="w-full border border-[#E5E3DB] px-4 py-2.5 text-sm focus:border-[#16213A] focus:outline-none"
                placeholder="Masukkan NIP"
            >
        </div>

        <div class="mb-5">
            <label for="name" class="mb-2 block text-sm font-medium text-[#16213A]">
                Nama Guru
            </label>

            <input
                type="text"
                id="name"
                name="name"
                class="w-full border border-[#E5E3DB] px-4 py-2.5 text-sm focus:border-[#16213A] focus:outline-none"
                placeholder="Masukkan nama guru"
            >
        </div>

        <div class="mb-5">
            <label for="gender" class="mb-2 block text-sm font-medium text-[#16213A]">
                Jenis Kelamin
            </label>

            <select
                id="gender"
                name="gender"
                class="w-full border border-[#E5E3DB] px-4 py-2.5 text-sm focus:border-[#16213A] focus:outline-none"
            >
                <option value="">Pilih Jenis Kelamin</option>
                <option value="Laki-Laki">Laki-Laki</option>
                <option value="Perempuan">Perempuan</option>
            </select>
        </div>

        <div class="mb-5">
            <label for="subject" class="mb-2 block text-sm font-medium text-[#16213A]">
                Mata Pelajaran
            </label>

            <input
                type="text"
                id="subject"
                name="subject"
                class="w-full border border-[#E5E3DB] px-4 py-2.5 text-sm focus:border-[#16213A] focus:outline-none"
                placeholder="Masukkan mata pelajaran"
            >
        </div>

        <div class="mb-5">
            <label for="phone_number" class="mb-2 block text-sm font-medium text-[#16213A]">
                No. Telepon
            </label>

            <input
                type="text"
                id="phone_number"
                name="phone_number"
                class="w-full border border-[#E5E3DB] px-4 py-2.5 text-sm focus:border-[#16213A] focus:outline-none"
                placeholder="Masukkan nomor telepon"
            >
        </div>

        <div class="mb-6">
            <label for="status" class="mb-2 block text-sm font-medium text-[#16213A]">
                Status
            </label>

            <select
                id="status"
                name="status"
                class="w-full border border-[#E5E3DB] px-4 py-2.5 text-sm focus:border-[#16213A] focus:outline-none"
            >
                <option value="">Pilih Status</option>
                <option value="Aktif">Aktif</option>
                <option value="Tidak Aktif">Tidak Aktif</option>
            </select>
        </div>

        <div class="flex gap-3">

            <a
                href="{{ route('teachers.index') }}"
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
```
