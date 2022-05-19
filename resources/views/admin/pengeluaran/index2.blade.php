@extends('layouts.app')
@section('title', 'Sancho | Dashboard')
@section('content')
<section>
    <div class="main-content">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-lg-8">
                                <h1>Pengeluaran <b>Kantor</b></h1>
                                <a href="{{url('create1')}}" class="btn btn-primary">Tambah Data</a>
                        </div>
                            <table class="table-bordered">
                                <tr>
                                        <th>Tanggal</th>
                                        <th>Deskripsi</th>
                                        <th>Pengeluaran</th>
                                        <th>Pembayaran</th>
                                        <th>Actions</th>
                                </tr>
                                @foreach ($data as $dataPengeluaran)
                                <tr>
                                    <td>{{ $dataPengeluaran->tanggal }}</td>
                                    <td>{{ $dataPengeluaran->deskripsi }}</td>
                                    <td>{{ $dataPengeluaran->pengeluaran }}</td>
                                    <td>{{ $dataPengeluaran->pembayaran }}</td>
                                    <td>
                                        <a href="{{url('/show1/'.$dataPengeluaran->id)}}" class="btn btn-warning">Edit</a>
                                        <a href="{{url('/destroy1/'.$dataPengeluaran->id)}}" class="btn btn-danger">Delete</a>
                                    </td>
                                </tr>
                                @endforeach
                            </table>
                        </div>
                    </div>
                </section>