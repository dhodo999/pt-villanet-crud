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
                                <form action="{{ url('/showlaptop/', $dataLaptop->id)}}" method="post" class="">
                                {{ csrf_field() }}
                                <div class="form-group">
                                        <label for="nf-email" class=" form-control-label">Nama</label>
                                        <input type="text" name="nama" class="form-control" value="{{ $dataLaptop->nama}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="nf-email" class=" form-control-label">Tanggal Ambil</label>
                                        <input type="text" name="tglambil" class="form-control" value="{{ $dataLaptop->tglambil}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="nf-password" class=" form-control-label">Merk</label>
                                        <input type="text" name="merk" class="form-control" value="{{ $dataLaptop->merk}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="nf-password" class=" form-control-label">Serial Number</label>
                                        <input type="text" name="serialnumber" class="form-control" value="{{ $dataLaptop->serialnumber}}">
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