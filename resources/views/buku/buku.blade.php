@extends('layouts.template')

@section('content')
    <h2>Daftar Buku</h2>
    <a href="{{url('buku/create')}}"class="btn btn-sm btn-success my-2">Tambah Data</a>
    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>NO</th>
                <th>Kode</th>
                <th>Judul</th>
                <th>Pengarang</th>
                <th>Penerbit</th>
                <th>Tahun</th>
                <th>Jenis</th>
            </tr>
            </thead>
            <tbody>
            @if ($buku->count() > 0) 
                @foreach ($buku as $i => $b)
                    <tr>
                        <td>{{++$i}}</td>
                        <td>{{$b->kode}}</td>
                        <td>{{$b->judul}}</td>
                        <td>{{$b->pengarang}}</td>
                        <td>{{$b->penerbit}}</td>
                        <td>{{$b->tahun}}</td>
                        <td>{{$b->jenis}}</td>
                        <td>
                            <a href="{{ url('/buku/'.$b->id.'/edit') }}" class="btn btn-sm btn-warning">Edit</a>

                            <form method="POST" action="{{ url('/buku/'.$b->id ) }}">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach

            @else
                <tr><td colspan="6" class="text-center">Data tidak ada</td></tr>
            @endif
            </tbody>
    </table>
@endsection
