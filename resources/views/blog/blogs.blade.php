@extends('layouts.template')

@section('content')
    <h2>Daftar Blog</h2>
    <div class="navbar">
        <a href="{{url('/blog/create')}}" class="btn btn-sm btn-success my-2">Tambah Data</a>
        <form action="" method="GET" class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" name="query" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>
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
                    <td class="col-2">
                        <a href="{{ url('/blog/' . $blog->id . '/edit') }}" class="btn btn-sm btn-warning fas fa-edit">
                        </a>
                        <form class="d-inline-block" method="POST" action="{{ url('/blog/' . $blog->id) }}">
                            @csrf
                            @method('DELETE')
                            <button type="submit" href="{{ url('/blog/' . $blog->id) }}"
                                    class="btn btn-sm btn-danger fas fa-trash-alt" onclick="return confirm('Are you sure you want to delete this book?')">
                            </button>
                        </form>
                        <a href="{{ url('/blog/' . $blog->id) }}" class="btn btn-sm btn-info fas fa-eye"></a>
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
    <div class="pagination justify-content-end mt-2">  {{ $blogs->withQueryString()->links() }}</div>
@endsection
