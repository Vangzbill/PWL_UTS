@extends('layouts.template')

@section('content')
    <h2>Data Buku</h2>
    <form method="POST" action="{{ $url_form }}">
        @csrf
        {!!(isset($mhs))? method_field('PUT') : '' !!}
        <div class="form-group">
            <label>Kode Buku</label>
            <input class="form-control" name="kode" type="text" value="{{ isset($buku)? $buku->kode : old('kode') }}">
            @error('kode')
            <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        

        <div class="form-group">
            <label>Judul Buku</label>
            <input class="form-control" name="judul" type="text" value="{{ isset($buku) ? $buku->judul : old('judul') }}">
            @error('judul')
            <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <div class="form-group">
            <label>Pengarang</label>
            <input class="form-control" name="pengarang" type="text" value="{{ isset($buku) ? $buku->pengarang : old('pengarang') }}">
            @error('pengarang')
            <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <div class="form-group">
            <label>Penerbit</label>
            <input class="form-control" name="penerbit" type="text" value="{{ isset($buku) ? $buku->penerbit : old('penerbit') }}">
            @error('penerbit')
            <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <div class="form-group">
            <label>Tahun Terbit</label>
            <input class="form-control" name="tahun" type="text" value="{{ isset($buku) ? $buku->tahun : old('tahun') }}">
            @error('tahun')
            <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        
        <div class="form-group">
            <label>Jenis Buku</label>
            <select class="form-control" id="jenis" name="jenis" >
                <option value="Edukasi" @isset($buku) @selected($buku->jenis == 'Edukasi') @endisset>Edukasi</option>
                <option value="Novel" @isset($buku) @selected($buku->jenis == 'Novel') @endisset>Novel</option>
                <option value="Majalah" @isset($buku) @selected($buku->jenis == 'Majalah') @endisset>Majalah</option>
                <option value="Kamus" @isset($buku) @selected($buku->jenis == 'Kamus') @endisset>Kamus</option>
                <option value="Komik" @isset($buku) @selected($buku->jenis == 'Komik') @endisset>Komik</option>
                <option value="Ensiklopedia" @isset($buku) @selected($buku->jenis == 'Ensiklopedia') @endisset>Ensiklopedia</option>
                <option value="Biografi" @isset($buku) @selected($buku->jenis == 'Biografi') @endisset>Biografi</option>
                <option value="Naskah" @isset($buku) @selected($buku->jenis == 'Naskah') @endisset>Naskah</option>
            </select>
        </div>
        
        @error('jenis')
            <small class="text-danger">{{ $message }}</small>
        @enderror

        <div class="form-group text-right">
            <button class="btn btn-sm btn-primary" type="submit">Simpan</button>
        </div>
    </form>
@endsection