@extends('layouts.app')

@section('title', 'Halaman Data')

@section('content')
    <section class="max-w-7xl mx-auto px-4 md:px-8 py-12">
        <div class="mt-8 overflow-x-auto rounded-xl border border-slate-300 dark:border-neutral-700">
            <table class="min-w-full divide-y divide-slate-300 dark:divide-neutral-700 text-left text-sm">
                <thead class="bg-slate-100 dark:bg-neutral-800 text-slate-700 dark:text-slate-300">
                    <tr>
                        <th class="px-6 py-4 font-semibold">No</th>
                        <th class="px-6 py-4 font-semibold">Author</th>
                        <th class="px-6 py-4 font-semibold">Title</th>
                        <th class="px-6 py-4 font-semibold">Slug</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-slate-200 dark:divide-neutral-800 text-slate-900 dark:text-slate-50">
                    @foreach ($posts as $post)
                        <tr class="hover:bg-slate-50 dark:hover:bg-neutral-800/50">
                            <td class="px-6 py-4">{{ $loop->iteration }}</td>
                            <td class="px-6 py-4 font-medium">{{ $post->author }}</td>
                            <td class="px-6 py-4">{{ $post->title }}</td>
                            <td class="px-6 py-4 text-slate-500 dark:text-slate-400">{{ $post->slug }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </section>
@endsection
