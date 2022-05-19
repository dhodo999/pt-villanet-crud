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
                                <form action="{{ url('/updatepengeluaran/'.$data->id) }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label for="tanggal">Tanggal</label>
                                        <input type="text" name="tanggal" class="form-control" placeholder="Tanggal" value="{{$data->tanggal}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="saldo">Deskripsi</label>
                                        <input type="text" name="deskripsi" class="form-control" placeholder="Deskripsi" value="{{ $data->deskripsi}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="pemasukan">Pengeluaran</label>
                                        <input type="text" name="pengeluaran" class="form-control" placeholder="Pengeluaran" value="{{ $data->pengeluaran }}"
                                    </div>
                                    <div class="form-group">
                                        <label for="pembayaran">Pembayaran</label>
                                        <input type="text" name="pembayaran" class="form-control" placeholder="Pembayaran" value="{{ $data->pembayaran}}"
                                    </div>
                                    <div class="form-group mt-2">
                                        <button type="submit" class="btn btn-primary">Edit Data Karyawan</button>
                                    </div>
                                    <div class="form-group mt-2">
                                        <a class="btn btn-primary" data-bs-toggle="collapse" href="{{url('/indexpengeluaran')}}" role="button" aria-expanded="false" aria-controls="collapseExample">Back</a>
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