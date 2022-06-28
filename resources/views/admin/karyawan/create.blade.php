@extends('layouts.app')
@section('title', 'PT Villanet | Dashboard')
@section('content')
<section>
    <div class="main-content">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <h1>Create Data</h1>
                        <div class="row">
                            <div class="col-lg-8">
                                <form action="{{url('storekaryawan')}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label for="tanggal">Nama</label>
                                        <input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror" placeholder="Nama" value="{{ old('nama') }}">
                                        @error('nama')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="saldo">Alamat</label>
                                        <input type="text" name="alamat" class="form-control @error('alamat') is-invalid @enderror" placeholder="Alamat" value="{{ old('alamat') }}">
                                        @error('alamat')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="pemasukan">No Telepon</label>
                                        <input type="text" name="notlp" class="form-control @error('notlp') is-invalid @enderror" placeholder="No telepon" value="{{ old('notlp') }}">
                                        @error('notlp')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="pembayaran">Email</label>
                                        <input type="text" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email" value="{{ old('email') }}">
                                        @error('email')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="form-group mt-2">
                                        <button type="submit" class="btn btn-primary">Tambah Data Karyawan</button>
                                    </div>
                                    <div class="form-group mt-2">
                                        <a class="btn btn-primary" data-bs-toggle="collapse" href="{{url('/indexkaryawan')}}" role="button" aria-expanded="false" aria-controls="collapseExample">Back</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection