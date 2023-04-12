@extends('layouts.template')

@section('content')
    <h2>Daftar Buku</h2>
    <div class="navbar">
        <a href="{{url('buku/create')}}"class="btn btn-sm btn-success my-2">Tambah Data</a>
        <form action="" method="GET" class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" name="query" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
        {{-- @if ($buku->count())
            <h1>Hasil Pencarian untuk "{{ $query }}"</h1>
            <ul>
            @foreach ($buku as $post)
                <li>
                    <a href="{{ route('buku', $post->id) }}">
                        {{ $post->kode }}
                        {{ $post->judul }}
                        {{ $post->pengarang }}
                        {{ $post->penerbit }}
                        {{ $post->tahun }}
                        {{ $post->jenis }}
                    </a>
                </li>
            @endforeach
            </ul>
        @else
        <p>Tidak ada hasil pencarian untuk "{{ $query }}".</p>
        @endif --}}

    </div>
    
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
                <th>Option</th>
            </tr>
            </thead>
            <tbody>
            @if ($buku->count() > 0) 
                @foreach ($buku as $i => $b)
                    <tr>
                        {{-- <input type="hidden" class="delete_id" value="{{ $buku->id }}">
                        <input type="hidden" class="judul" value="{{ $buku->judul }}"> --}}
                        <td>{{++$i}}</td>
                        <td>{{$b->kode}}</td>
                        <td>{{$b->judul}}</td>
                        <td>{{$b->pengarang}}</td>
                        <td>{{$b->penerbit}}</td>
                        <td>{{$b->tahun}}</td>
                        <td>{{$b->jenis}}</td>
                        <td>
                            <a href="{{ url('/buku/'.$b->id.'/edit') }}" class="btn btn-sm btn-warning nav-icon fas fa-edit"></a>

                            {{-- <form method="POST" class="d-inline-block" action="{{ url('/buku/'.$b->id ) }}">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger nav-icon fas fa-trash-alt"></button>
                            </form> --}}
                            <form action="{{ url('/buku/'.$b->id ) }}" method="POST" class="d-inline-block">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger btn-sm btndelete nav-icon fas fa-trash-alt" onclick="return confirm('Are you sure you want to delete this book?')"></button>
                            </form>
                        </td>
                    </tr>
                @endforeach

            @else
                <tr><td colspan="6" class="text-center">Data tidak ada</td></tr>
            @endif
            </tbody>
    </table>

    <div class="pagination justify-content-end mt-2">  {{ $buku->links() }}</div>
  
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <script>
        $(document).ready(function () {

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $('.btndelete').click(function (e) {
                e.preventDefault();

                var deleteid = $(this).closest("tr").find('.delete_id').val();
                var judul = $(this).closest("tr").find('.judul').val();

                swal({
                        title: "Apakah anda yakin?",
                        text: "Setelah dihapus, Anda tidak dapat memulihkan Data Buku "+ judul +" ini lagi!",
                        icon: "warning",
                        buttons: true,
                        dangerMode: true,
                    })
                    .then((willDelete) => {
                        if (willDelete) {

                            var data = {
                                "_token": $('input[name=_token]').val(),
                                'id': deleteid,
                            };
                            $.ajax({
                                type: "DELETE",
                                url: 'buku/' + deleteid,
                                data: data,
                                success: function (response) {
                                    swal(response.status, {
                                            icon: "success",
                                        })
                                        .then((result) => {
                                            location.reload();
                                        });
                                }
                            });
                        }
                    });
            });

        });

    </script>
@endsection
