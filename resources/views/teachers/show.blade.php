@extends('layouts.app')

@section('title', $title)

@section('content')

<div class="mb-8 border-b border-[#E5E3DB] pb-5">
    <p class="mb-1 text-[11px] uppercase tracking-[0.2em] text-[#A16207]">
        Tahun Ajaran 2025/2026
    </p>

    <h1 class="font-display text-3xl font-semibold text-[#16213A]">
        Detail Guru
    </h1>
</div>

<div class="border border-[#E5E3DB] bg-white p-6">

    <div class="mb-5">
        <p class="text-xs text-slate-500">NIP</p>
        <p class="font-medium text-[#16213A]">
            {{ $teacher['nip'] }}
        </p>
    </div>

    <div class="mb-5">
        <p class="text-xs text-slate-500">Nama Guru</p>
        <p class="font-medium text-[#16213A]">
            {{ $teacher['name'] }}
        </p>
    </div>

    <div class="mb-5">
        <p class="text-xs text-slate-500">Jenis Kelamin</p>
        <p class="font-medium text-[#16213A]">
            {{ $teacher['gender'] }}
        </p>
    </div>

    <div class="mb-5">
        <p class="text-xs text-slate-500">Mata Pelajaran</p>
        <p class="font-medium text-[#16213A]">
            {{ $teacher['subject'] }}
        </p>
    </div>

    <div class="mb-5">
        <p class="text-xs text-slate-500">No. Telepon</p>
        <p class="font-medium text-[#16213A]">
            {{ $teacher['phone_number'] }}
        </p>
    </div>

    <div class="mb-6">
        <p class="mb-2 text-xs text-slate-500">Status</p>

        <x-status-badge :status="$teacher['status']" />
    </div>

    <a
        href="{{ route('teachers.index') }}"
        class="border border-[#E5E3DB] px-5 py-2.5 text-sm font-medium text-[#16213A]"
    >
        Kembali
    </a>

</div>

@endsection