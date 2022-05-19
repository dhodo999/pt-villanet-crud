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
                            <h2 class="title-1">Karyawan Kantor</h2>
                            <a href="{{url('createkaryawan')}}" class="btn btn-primary"><i class="fas fa-plus"></i>      Tambah Data</a> 
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
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Alamat</th>
                                        <th>No Telepon</th>
                                        <th>Email</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $p => $dataKaryawan)
                                <tr>
                                    <td>{{ $p + 1 }}</td>
                                    <td>{{ $dataKaryawan->nama }}</td>
                                    <td>{{ $dataKaryawan->alamat }}</td>
                                    <td>{{ $dataKaryawan->notlp }}</td>
                                    <td>{{ $dataKaryawan->email }}</td>
                                    <td>
                                        <a href="{{url('/showkaryawan/'.$dataKaryawan->id)}}"><i class="far fa-edit" style="color:green"></i></a>
                                        <a href="{{url('/destroykaryawan/'.$dataKaryawan->id)}}"><i class="fas fa-trash-alt" style="color:red"></i></a>
                                    </td>
                                </tr>
                                @endforeach
                                </tbody>
                            </table>
                            {{ $data->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection


