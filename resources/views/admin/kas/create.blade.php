@extends('layouts.app')
@section('title', 'Sancho | Dashboard')
@section('content')
<section>
    <div class="main-content">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <h1>Create <b>Data</b></h1>
                        <div class="row">
                            <div class="col-lg-8">
                                <form action="{{url('storekas')}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label for="tanggal">Tanggal</label>
                                        <input type="text" name="tanggal" class="form-control" placeholder="D/m/Y">
                                    </div>
                                    <div class="form-group">
                                        <label for="saldo">Saldo</label>
                                        <input type="text" name="saldo" class="form-control" placeholder="Saldo Kas">
                                    </div>
                                    <div class="form-group">
                                        <label for="pemasukan">Pemasukan</label>
                                        <input type="text" name="pemasukan" class="form-control" placeholder="Pemasukan Kas">
                                    </div>
                                    <div class="form-group">
                                        <label for="pembayaran">Pembayaran</label>
                                        <input type="text" name="pembayaran" class="form-control" placeholder="Metode Pembayaran">
                                    </div>
                                    <div class="form-group mt-2">
                                        <button type="submit" class="btn btn-primary">Tambah Data Kas</button>
                                    </div>
                                    <div class="form-group mt-2">
                                        <a class="btn btn-primary" data-bs-toggle="collapse" href="{{url('/indexkas')}}" role="button" aria-expanded="false" aria-controls="collapseExample">Back</a>
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