@extends('layouts.app')

@section('title', $title)

@section('content')

<div class="mb-8 border-b border-[#E5E3DB] pb-5">
    <p class="mb-1 text-[11px] uppercase tracking-[0.2em] text-[#A16207]">
        Tahun Ajaran 2025/2026
    </p>

    <h1 class="font-display text-3xl font-semibold text-[#16213A]">
        Ubah Guru
    </h1>
</div>

<div class="border border-[#E5E3DB] bg-white p-6">

    <form action="{{ route('teachers.update', ['id' => $id]) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-5">
            <label for="nip" class="mb-2 block text-sm font-medium text-[#16213A]">
                NIP
            </label>

            <input
                type="text"
                id="nip"
                name="nip"
                value="{{ $teacher['nip'] }}"
                class="w-full border border-[#E5E3DB] px-4 py-2.5 text-sm"
            >
        </div>

        <div class="mb-5">
            <label for="name" class="mb-2 block text-sm font-medium text-[#16213A]">
                Nama Lengkap
            </label>

            <input
                type="text"
                id="name"
                name="name"
                value="{{ $teacher['name'] }}"
                class="w-full border border-[#E5E3DB] px-4 py-2.5 text-sm"
            >
        </div>

        <div class="mb-5">
            <label for="gender" class="mb-2 block text-sm font-medium text-[#16213A]">
                Jenis Kelamin
            </label>

            <select
                id="gender"
                name="gender"
                class="w-full border border-[#E5E3DB] px-4 py-2.5 text-sm"
            >
                <option value="Laki-Laki" {{ $teacher['gender'] === 'Laki-Laki' ? 'selected' : '' }}>
                    Laki-Laki
                </option>

                <option value="Perempuan" {{ $teacher['gender'] === 'Perempuan' ? 'selected' : '' }}>
                    Perempuan
                </option>
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
                value="{{ $teacher['subject'] }}"
                class="w-full border border-[#E5E3DB] px-4 py-2.5 text-sm"
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
                value="{{ $teacher['phone_number'] }}"
                class="w-full border border-[#E5E3DB] px-4 py-2.5 text-sm"
            >
        </div>

        <div class="mb-6">
            <label for="status" class="mb-2 block text-sm font-medium text-[#16213A]">
                Status
            </label>

            <select
                id="status"
                name="status"
                class="w-full border border-[#E5E3DB] px-4 py-2.5 text-sm"
            >
                <option value="Aktif" {{ $teacher['status'] === 'Aktif' ? 'selected' : '' }}>
                    Aktif
                </option>

                <option value="Tidak Aktif" {{ $teacher['status'] === 'Tidak Aktif' ? 'selected' : '' }}>
                    Tidak Aktif
                </option>
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
                Simpan Perubahan
            </button>

        </div>

    </form>

</div>

@endsection