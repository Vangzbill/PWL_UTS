@extends('layouts.template')

@section('content')
    <a href="{{ url('/mahasiswa/create') }}" class="btn btn-sm btn-success my-2">Tambah Data</a>
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
                        <a href="{{ url('/mahasiswa/' . $blog->id . '/edit') }}" class="btn btn-sm btn-warning">
                            Edit
                        </a>
                        <form class="d-inline" method="POST" action="{{ url('/mahasiswa/' . $blog->id) }}">
                            @csrf
                            @method('DELETE')
                            <button type="submit" href="{{ url('/mahasiswa/' . $blog->id) }}" class="btn btn-sm btn-danger">
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
@endsection
