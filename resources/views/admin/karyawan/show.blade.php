@extends('layouts.app')
@section('title', 'Sancho | Data Contacts')
@section('content')
<section>
    <div class="main-content">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <h1>Edit Data</h1>
                        <div class="row">
                            <div class="col-lg-8">
                                <form action="{{ url('/updatekaryawan/'.$data->id) }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label for="tanggal">Nama</label>
                                        <input type="text" name="nama" class="form-control" placeholder="nama" value="{{$data->nama}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="saldo">Alamat</label>
                                        <input type="text" name="alamat" class="form-control" placeholder="alamat" value="{{ $data->alamat}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="pemasukan">No Telepon</label>
                                        <input type="text" name="notlp" class="form-control" placeholder="notlp" value="{{ $data->notlp }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="pembayaran">Email</label>
                                        <input type="text" name="email" class="form-control" placeholder="email" value="{{ $data->email}}">
                                    </div>
                                    <div class="form-group mt-2">
                                        <button type="submit" class="btn btn-primary">Edit Data Karyawan</button>
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