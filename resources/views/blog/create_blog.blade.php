@extends('layouts.template')

@section('content')
    <form method="POST" action="{{ $url_form }}">
        @csrf
        {!! isset($blog) ? method_field('PUT') : '' !!}
        <div class="form-group">
            <label for="inputAuthor">Author</label>
            <input type="text" id="inputAuthor" class="form-control" name="author" value="{{ isset($blog) ? $blog->author : old('author') }}">
            @error('author')
            <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        <div class="form-group">
            <label for="inputTitle">Title</label>
            <input type="text" id="inputTitle" class="form-control" name="title" value="{{ isset($blog) ? $blog->title : old('title') }}">
            @error('title')
            <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        <div class="form-group">
            <label for="inputDescription">Description</label>
            <input type="text" id="inputDescription" class="form-control" name="description" value="{{ isset($blog) ? $blog->description : old('description') }}">
            @error('description')
            <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        <div class="form-group">
            <label for="inputContent">Content</label>
            <textarea type="text" id="inputContent" class="form-control" name="content">
                {{ isset($blog) ? $blog->content : old('content') }}
            </textarea>
            @error('content')
            <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        <div class="form-group text-right">
            <button class="btn btn-sm btn-primary" type="submit">Simpan</button>
        </div>
    </form>
@endsection
