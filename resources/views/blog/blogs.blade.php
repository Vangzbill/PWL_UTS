@extends('layouts.template')

@section('content')
    <a href="{{ url('/blog/create') }}" class="btn btn-sm btn-success my-2">Tambah Data</a>
    <form action="{{ url('/blog') }}" method="GET" class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" name="query" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
    <table class="table table-bordered table-striped">
        <thead>
        <tr>
            <th>No</th>
            <th>Author</th>
            <th>Title</th>
            <th>Description</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        @if ($blogs->count() > 0)
            @foreach($blogs as $i => $blog)
                <tr>
                    <td>{{ ++$i }}</td>
                    <td>{{ $blog->author }}</td>
                    <td>{{ $blog->title }}</td>
                    <td>{{ $blog->description }}</td>
                    <td class="">
                        <a href="{{ url('/blog/' . $blog->id . '/edit') }}" class="btn btn-sm btn-warning">
                            Edit
                        </a>
                        <form class="d-inline" method="POST" action="{{ url('/blog/' . $blog->id) }}">
                            @csrf
                            @method('DELETE')
                            <button type="submit" href="{{ url('/blog/' . $blog->id) }}" class="btn btn-sm btn-danger">
                                Delete
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        @else
            <tr>
                <td colspan="6" class="text-center">Data tidak ada</td>
            </tr>
        @endif
        </tbody>
    </table>
    {{ $blogs->links() }}
@endsection
