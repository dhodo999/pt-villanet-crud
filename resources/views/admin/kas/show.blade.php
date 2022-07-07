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
                                <form action="{{ url('/updatekas/'.$data->id) }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label for="tanggal">Tanggal</label>
                                        <input type="date" name="tanggal" class="form-control" placeholder="D/m/Y" value="{{ $data->tanggal }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="pemasukan">Pemasukan</label>
                                        <input type="text" name="pemasukan" class="form-control" placeholder="Pemasukan Kas" value="{{ $data->pemasukan }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="pembayaran">Pembayaran</label>
                                        <select name="pembayaran" class="form-control" placeholder="Metode Pembayaran" value="{{ $data->pembayaran }}">
                                            <option selected>{{ $data->pembayaran }}</option>
                                            <option value="Cash">Cash</option>
                                            <option value="Transfer">Transfer</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="pengeluaran">Pengeluaran</label>
                                        <input type="text" name="pengeluaran" class="form-control" placeholder="Pengeluaran Kas" value="{{ $data->pengeluaran }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="saldo">Total Saldo</label>
                                        <input type="text" name="saldo" class="form-control" placeholder="Saldo Kas" value="{{ $data->saldo }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="notes">Notes</label>
                                        <textarea name="notes" class="form-control">{{ $data->notes }}</textarea>
                                    </div>
                                    <div class="form-group mt-2">
                                        <button type="submit" class="btn btn-primary">Edit Data Kas</button>
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