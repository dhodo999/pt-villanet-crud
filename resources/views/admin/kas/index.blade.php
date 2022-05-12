@extends('layouts.app')
@section('title', 'Sancho | Data Contacts')
@section('content')
<section>
    <div class="main-content">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="overview-wrap">
                            <h2 class="title-1">Kas Kantor</h2>
                            <a href="{{url('create')}}" class="btn btn-primary">Tambah Data</a>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="row m-t-30">
                    <div class="col-md-12">
                        <div class="table-responsive m-b-40">
                            <table class="table table-borderless table-data3">
                                <thead>
                                    <tr>
                                        <th>Tanggal</th>
                                        <th>Saldo</th>
                                        <th>Pemasukan</th>
                                        <th>Pembayaran</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $dataKas)
                                <tr>
                                    <td>{{ $dataKas->tanggal }}</td>
                                    <td>{{ $dataKas->saldo }}</td>
                                    <td>{{ $dataKas->pemasukan }}</td>
                                    <td>{{ $dataKas->pembayaran }}</td>
                                    <td>
                                        <a href="{{url('/show/'.$dataKas->id)}}"><i class="far fa-edit" style="color:green"></i></a>
                                        <a href="{{url('/destroy/'.$dataKas->id)}}"><i class="fas fa-trash-alt" style="color:red"></i></a>
                                        
                                    </td>
                                </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection


