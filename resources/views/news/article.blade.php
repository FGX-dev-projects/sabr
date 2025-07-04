@extends('layouts.app')

@section('title', $article->title)

@section('content')
<section class="py-[120px] wrapper">
    <div class="flex flex-col md:flex-row gap-8">
        <!-- Left box / sidebar -->
        <div class="md:w-1/4 flex flex-col items-start space-y-4">
            @if($article->small_image)
                <img src="{{ env('CMS_UPLOADS') . 'posts/small/' . $article->small_image }}" 
                     alt="{{ $article->title }}"
                     class="w-full md:w-auto rounded-lg shadow-lg object-cover">
            @endif
            
        </div>

        <!-- Right content -->
        <div class="md:w-3/4">
            <h1 class="text-4xl font-bold text-[#868480] mb-6">{{ $article->title }}</h1>

            <div class="prose prose-lg max-w-none text-gray-700 leading-relaxed">
                {!! $article->content !!}
            </div>

            <div class="mt-12 pt-8 border-t border-[#DEDAD4] text-sm text-[#ADAAA5]">
                Published on 
                @if($article->article_date instanceof \Carbon\Carbon)
                    {{ $article->article_date->format('j M') }}
                @else
                    {{ \Carbon\Carbon::parse($article->article_date)->format('j M') }}
                @endif
            </div>
        </div>
    </div>
</section>
@endsection
