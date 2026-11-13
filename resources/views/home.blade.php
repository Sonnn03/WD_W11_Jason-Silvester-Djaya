@extends('layouts.app')

@section('title', 'Halaman Home')

@section('content')
    <section class="max-w-7xl mx-auto px-4 md:px-8 py-12">
        <p class="text-sm font-semibold text-blue-700 dark:text-blue-400 uppercase tracking-wide">{{ $home->label }}</p>
        <h2 class="mt-2 text-4xl md:text-4xl font-bold text-slate-900 dark:text-slate-50">
            {{ $home->judul }}
        </h2>
        <p class="mt-4 max-w-2xl text-slate-600 dark:text-slate-400 leading-relaxed">
            {{ $home->deskripsi }}
        </p>

        <dl class="mt-8 grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
            <div class="rounded-xl border border-slate-300 dark:border-neutral-700 p-6">
                <dt class="text-sm text-slate-500 dark:text-slate-400">Nama Lengkap</dt>
                <dd class="mt-1 font-semibold text-slate-900 dark:text-slate-50">{{ $home->nama_lengkap }}</dd>
            </div>
            <div class="rounded-xl border border-slate-300 dark:border-neutral-700 p-6">
                <dt class="text-sm text-slate-500 dark:text-slate-400">Status</dt>
                <dd class="mt-1 font-semibold text-slate-900 dark:text-slate-50">{{ $home->status }}</dd>
            </div>
            <div class="rounded-xl border border-slate-300 dark:border-neutral-700 p-6">
                <dt class="text-sm text-slate-500 dark:text-slate-400">Fokus</dt>
                <dd class="mt-1 font-semibold text-slate-900 dark:text-slate-50">{{ $fokus }}</dd>
            </div>
        </dl>
    </section>
@endsection