@extends('layouts.template')

@section('content')
    <div class="card">
        <h2>Data Anggota Kelompok</h2>
        <div class="card-group">
            <div class="card border border-primary rounded mb-3 mr-4" style="max-width: 540px;">
                <div class="row no-gutters">
                  <div class="col-md-4">
                    <img src="{{ asset('assets/img/2141720122.jpg') }}" alt="..." class="img-fluid rounded">
                  </div>
                  <div class="col-md-8">
                    <div class="card-body">
                      <h5 class="card-title text text-bold">Sabilla Luthfi Rahmadhan</h5>
                      <p class="card-text mb-0">Kelas : TI-2B</p>
                      <p class="card-text mb-0">NIM : 2141720122</p>
                      <p class="card-text">Absen : 22</p>
                      <p class="card-text"><small class="text-muted">Mahasiswa Polinema</small></p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card border border-primary mb-3 rounded" style="max-width: 540px;">
                <div class="row no-gutters">
                  <div class="col-md-4">
                    <img src="{{ asset('assets/img/3x4.png') }}" alt="..." class="img-fluid rounded">
                  </div>
                  <div class="col-md-8">
                    <div class="card-body">
                      <h5 class="card-title text text-bold">Virgy Ferdian Surya F</h5>
                      <p class="card-text mb-0">Kelas : TI-2B</p>
                      <p class="card-text mb-0">NIM : 2141720116</p>
                      <p class="card-text">Absen : 27</p>
                      <p class="card-text"><small class="text-muted">Mahasiswa Polinema</small></p>
                    </div>
                  </div>
                </div>
              </div>
        </div>
    </div>
@endsection
