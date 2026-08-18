@extends('layouts.app')

@section('title', $title)

@section('content')

<div class="mb-8 border-b border-[#E5E3DB] pb-5">
    <p class="mb-1 text-[11px] uppercase tracking-[0.2em] text-[#A16207]">
        Tahun Ajaran 2025/2026
    </p>

    <h1 class="font-display text-3xl font-semibold text-[#16213A]">
        Detail Kelas
    </h1>
</div>

<div class="border border-[#E5E3DB] bg-white p-6">

    <div class="mb-5">
        <p class="text-xs text-slate-500">
            Nama Kelas
        </p>

        <p class="font-medium text-[#16213A]">
            {{ $class['name'] }}
        </p>
    </div>

    <div class="mb-5">
        <p class="text-xs text-slate-500">
            Tingkat
        </p>

        <p class="font-medium text-[#16213A]">
            {{ $class['grade'] }}
        </p>
    </div>

    <div class="mb-5">
        <p class="text-xs text-slate-500">
            Jurusan
        </p>

        <p class="font-medium text-[#16213A]">
            {{ $class['major'] }}
        </p>
    </div>

    <div class="mb-6">
        <p class="text-xs text-slate-500">
            Wali Kelas
        </p>

        <p class="font-medium text-[#16213A]">
            {{ $class['homeroom_teacher'] }}
        </p>
    </div>

    <a
        href="{{ route('classes.index') }}"
        class="border border-[#E5E3DB] px-5 py-2.5 text-sm font-medium text-[#16213A]"
    >
        Kembali
    </a>

</div>

@endsection