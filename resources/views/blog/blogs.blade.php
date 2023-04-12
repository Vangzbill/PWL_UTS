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
                            <button value="{{ json_encode([$blog->id, $blog->title]) }}" type="submit"
                                    class="delete-btn btn btn-sm btn-danger fas fa-trash-alt">
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

    <script>
        $(document).ready(function () {

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $('.delete-btn').click(function (e) {
                e.preventDefault();

                const deleted_id = JSON.parse($(this).val())[0];
                const title = JSON.parse($(this).val())[1];

                swal({
                    title: "Apakah anda yakin?",
                    text: "Setelah dihapus, Anda tidak dapat memulihkan data blog \""+ title +"\" ini lagi!",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                    .then((willDelete) => {
                        if (willDelete) {

                            const data = {
                                "_token": $('input[name=_token]').val()
                            };
                            $.ajax({
                                type: "DELETE",
                                url: 'blog/' + deleted_id,
                                data: data,
                                success: function (response) {
                                    swal(response.message, {
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
