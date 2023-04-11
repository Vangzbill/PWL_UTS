@extends('layouts.template')

@section('content')
    <header class="d-flex flex-column">
        <a href="{{ url('/blog') }}" class="btn btn-sm btn-info align-self-start mb-4 px-3 rounded-pill">
            <span class="fas fa-arrow-left"></span>
            <span class="ml-2">Kembali</span>
        </a>
        <h1>{{ $blog->title }}</h1>
        <div class="">
            <h4 >{{ $blog->author }}</h4>
            <p>{{ $blog->updated_at }}</p>
        </div>
    </header>
    <main>
        <p class="mt-4 text-justify">{{ $blog->content }}</p>
    </main>
@endsection
