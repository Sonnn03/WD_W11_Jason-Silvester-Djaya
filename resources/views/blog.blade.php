@extends('layouts.app')

@section('title', 'Halaman Blog')

@section('content')
    <main class="max-w-7xl mx-auto px-4 md:px-8 py-12 min-h-screen">
        <div class="mb-10 text-center">
            <h1 class="text-3xl md:text-4xl font-bold text-slate-900 dark:text-slate-50">Blog & Artikel Terkini</h1>
        </div>

        <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach ($blogs as $blog)
                <article class="bg-white dark:bg-neutral-800 border border-slate-200 dark:border-neutral-700 rounded-2xl overflow-hidden shadow-sm hover:shadow-md transition-shadow flex flex-col">
                    <img src="{{ asset($blog->gambar) }}" alt="{{ $blog->judul }}" class="w-full h-48 object-cover">
                    <div class="p-6 flex flex-col flex-grow">
                        <div class="flex items-center gap-2 text-sm text-slate-500 dark:text-slate-400 mb-3">
                            <span class="font-semibold text-blue-600 dark:text-blue-400">{{ $blog->kategori }}</span>
                            <span>&bull;</span>
                            <time datetime="{{ $blog->tanggal_terbit }}">
                                {{ \Carbon\Carbon::parse($blog->tanggal_terbit)->locale('id')->translatedFormat('d M Y') }}
                            </time>
                        </div>
                        <h2 class="text-xl font-bold text-slate-900 dark:text-slate-50 mb-2 leading-tight">
                            <a href="{{ $blog->link }}" class="hover:text-blue-600 dark:hover:text-blue-400 transition-colors">{{ $blog->judul }}</a>
                        </h2>
                        <p class="text-slate-600 dark:text-slate-400 mb-4 line-clamp-3 text-sm flex-grow">
                            {{ $blog->ringkasan }}
                        </p>
                        <a href="{{ $blog->link }}" class="inline-flex items-center font-semibold text-blue-600 dark:text-blue-400 hover:underline text-sm">
                            Baca selengkapnya
                            <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                        </a>
                    </div>
                </article>
            @endforeach
        </div>
    </main>
@endsection