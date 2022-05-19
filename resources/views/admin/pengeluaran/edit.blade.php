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
                                <strong>Edit Form</strong> 
                            </div>
                            <div class="card-body card-block">
                                <form action="{{ url('/showkaryawan/', $dataKaryawan->id)}}" method="post" class="">
                                {{ csrf_field() }}
                                <div class="form-group">
                                        <label for="nf-email" class=" form-control-label">Nama</label>
                                        <input type="text" name="nama" class="form-control" value="{{ $dataKaryawan->nama}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="nf-email" class=" form-control-label">Alamat</label>
                                        <input type="text" name="alamat" class="form-control" value="{{ $dataKaryawan->alamat}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="nf-password" class=" form-control-label">No Telepon</label>
                                        <input type="text" name="notlp" class="form-control" value="{{ $dataKaryawan->notlp}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="nf-password" class=" form-control-label">Email</label>
                                        <input type="text" name="email" class="form-control" value="{{ $dataKaryawan->email}}">
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