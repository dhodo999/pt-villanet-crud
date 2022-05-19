@extends('layouts.app')
@section('title', 'Sancho | Dashboard')
@section('content')
<section>
    <div class="main-content">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                    <div class="card">
                            <div class="card-header">
                                <strong>Edit Form</strong> Contact Us
                            </div>
                            <div class="card-body card-block">
                                <form action="{{ url('//', $dataKas->id)}}" method="post" class="">
                                {{ csrf_field() }}
                                <div class="form-group">
                                        <label for="nf-email" class=" form-control-label">Tanggal</label>
                                        <input type="text" name="tanggal" class="form-control" value="{{ $dataKas->tanggal}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="nf-email" class=" form-control-label">Saldo</label>
                                        <input type="text" name="saldo" class="form-control" value="{{ $dataKas->saldo}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="nf-password" class=" form-control-label">Pemasukan</label>
                                        <textarea name="text" class="form-control">{{ $dataKas->pemasukan}}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="nf-password" class=" form-control-label">Pembayaran</label>
                                        <textarea name="text" class="form-control">{{ $dataKas->pembayaran}}</textarea>
                                    </div>
                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary btn-sm">
                                            <i class="fa fa-dot-circle-o"></i> Ubah
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="copyright">
                            <p>Copyright © 2018 Colorlib. All rights reserved. Template by <a href="https://colorlib.com">Colorlib</a>.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection