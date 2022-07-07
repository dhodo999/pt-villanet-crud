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
                                <form action="{{url('storekas')}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label for="tanggal">Tanggal</label>
                                        <input type="date" name="tanggal" class="form-control @error('tanggal') is-invalid @enderror" placeholder="D/m/Y" value="{{ old('tanggal') }}">
                                        @error('tanggal')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="pemasukan">Pemasukan</label>
                                        <input type="text" name="pemasukan" class="form-control @error('pemasukan') is-invalid @enderror" placeholder="Pemasukan Kas" value="{{ old('pemasukan') }}">
                                        @error('pemasukan')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="pembayaran">Pembayaran</label>
                                        <select name="pembayaran" class="form-control @error('pembayaran') is-invalid @enderror" placeholder="Metode Pembayaran" value="{{ old('pembayaran') }}">
                                            <option value="Cash">Cash</option>
                                            <option value="Transfer">Transfer</option>
                                        </select>
                                        @error('pembayaran')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="pembayaran">Pengeluaran</label>
                                        <input type="text" name="pengeluaran" class="form-control @error('pengeluaran') is-invalid @enderror" placeholder="Pengeluaran Kas" value="{{ old('pengeluaran') }}">
                                        @error('pengeluaran')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="saldo">Total Saldo</label>
                                        <input type="text" name="saldo" class="form-control @error('saldo') is-invalid @enderror" placeholder="Saldo Kas" value="{{ old('saldo') }}"> 
                                        @error('saldo')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="pembayaran">Notes</label>
                                        <textarea name="notes" class="form-control @error('notes') is-invalid @enderror" value="{{ old('notes') }}" rows="3"></textarea>
                                        @error('notes')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
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