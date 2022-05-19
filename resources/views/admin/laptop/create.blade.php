@extends('layouts.app')
@section('title', 'Sancho | Dashboard')
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
                                <form action="{{url('storelaptop')}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label for="tanggal">Nama</label>
                                        <input type="text" name="nama" class="form-control" placeholder="Nama">
                                    </div>
                                    <div class="form-group">
                                        <label for="saldo">Tanggal Ambil</label>
                                        <input type="text" name="tglambil" class="form-control" placeholder="Tanggal Ambil">
                                    </div>
                                    <div class="form-group">
                                        <label for="pemasukan">Merk</label>
                                        <input type="text" name="merk" class="form-control" placeholder="Merk">
                                    </div>
                                    <div class="form-group">
                                        <label for="pembayaran">Serial Number</label>
                                        <input type="text" name="serialnumber" class="form-control" placeholder="Serial Number">
                                    </div>
                                    <div class="form-group mt-2">
                                        <button type="submit" class="btn btn-primary">Tambah Data Laptop</button>
                                    </div>
                                    <div class="form-group mt-2">
                                        <a class="btn btn-primary" data-bs-toggle="collapse" href="{{url('/indexlaptop')}}" role="button" aria-expanded="false" aria-controls="collapseExample">Back</a>
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