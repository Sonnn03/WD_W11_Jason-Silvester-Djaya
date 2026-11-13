@extends('layouts.app')

@section('title', 'Halaman About')

@section('content')
    <section class="max-w-7xl mx-auto px-4 md:px-8 py-12">
        <p class="text-base font-semibold text-blue-700 dark:text-blue-400 uppercase tracking-wide">Tentang Saya</p>
        <h2 class="mt-2 text-3xl md:text-4xl font-bold text-slate-900 dark:text-slate-50">
            Halo, Perkenalkan saya Jason Silvester Djaya
        </h2>
        <p class="mt-4 max-w-2xl text-slate-600 dark:text-slate-400 leading-relaxed">
            Saya adalah seorang mahasiswa Universitas Ciputra jurusan IMT. Saya senang dalam mempelajari hal baru yang saya belum ketahui, dan saya senang
            untuk ikut aktif dalam berbagai kegiatan yang dilaksanakan ataupun diselenggarakan di kampus.
        </p>

        <dl class="mt-8 grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
            <div class="rounded-xl border border-slate-300 dark:border-neutral-700 p-6">
                <dt class="text-sm text-slate-500 dark:text-slate-400">Nama Lengkap</dt>
                <dd class="mt-1 font-semibold text-slate-900 dark:text-slate-50">Jason Silvester Djaya</dd>
            </div>
            <div class="rounded-xl border border-slate-300 dark:border-neutral-700 p-6">
                <dt class="text-sm text-slate-500 dark:text-slate-400">Status</dt>
                <dd class="mt-1 font-semibold text-slate-900 dark:text-slate-50">Mahasiswa</dd>
            </div>
            <div class="rounded-xl border border-slate-300 dark:border-neutral-700 p-6">
                <dt class="text-sm text-slate-500 dark:text-slate-400">Fokus</dt>
                <dd class="mt-1 font-semibold text-slate-900 dark:text-slate-50">Kehidupan</dd>
            </div>
        </dl>

        <div class="mt-12">
            <p class="text-base font-semibold text-blue-700 dark:text-blue-400 uppercase tracking-wide">Pendidikan</p>
            <h3 class="mt-2 text-2xl md:text-3xl font-bold text-slate-900 dark:text-slate-50">Riwayat Pendidikan</h3>

            <ol class="mt-8 relative border-l-2 border-slate-300 dark:border-neutral-700 ml-3 space-y-8">
                @foreach ($pendidikan as $item)
                    <li class="ml-6 relative">
                        <span class="absolute -left-[33px] top-1.5 flex h-4 w-4 rounded-full {{ $loop->first ? 'bg-blue-700 dark:bg-blue-400' : 'bg-slate-400 dark:bg-neutral-500' }} ring-4 ring-white dark:ring-neutral-900"></span>
                        <div class="rounded-xl border border-slate-300 dark:border-neutral-700 p-6">
                            <time class="text-sm text-slate-500 dark:text-slate-400">{{ $item->periode }}</time>
                            <h4 class="mt-1 font-semibold text-slate-900 dark:text-slate-50">{{ $item->judul }}</h4>
                            <p class="mt-1 text-sm text-slate-600 dark:text-slate-400">{{ $item->subjudul }}</p>
                        </div>
                    </li>
                @endforeach
            </ol>
        </div>

        <div class="mt-12">
            <p class="text-base font-semibold text-blue-700 dark:text-blue-400 uppercase tracking-wide">Pengalaman</p>
            <h3 class="mt-2 text-2xl md:text-3xl font-bold text-slate-900 dark:text-slate-50">Pengalaman Organisasi & Kegiatan</h3>

            <div class="mt-8 grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach ($pengalaman as $item)
                    <div class="rounded-xl border border-slate-300 dark:border-neutral-700 p-6">
                        <time class="text-sm text-slate-500 dark:text-slate-400">{{ $item->periode }}</time>
                        <h4 class="mt-1 font-semibold text-slate-900 dark:text-slate-50">{{ $item->judul }}</h4>
                        <p class="text-sm text-blue-700 dark:text-blue-400 font-medium">{{ $item->subjudul }}</p>
                        @if ($item->deskripsi)
                            <ul class="mt-3 list-disc list-inside space-y-1 text-sm text-slate-600 dark:text-slate-400">
                                <li>{{ $item->deskripsi }}</li>
                            </ul>
                        @endif
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection