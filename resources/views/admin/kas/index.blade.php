@extends('layouts.app')
@section('title', 'Sancho | Data Contacts')
@section('content')
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.slim.js" integrity="sha256-HwWONEZrpuoh951cQD1ov2HUK5zA5DwJ1DNUXaM6FsY=" crossorigin="anonymous"></script>
<section>
    <div class="main-content">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="overview-wrap">
                            <h2 class="title-1">Kas Kantor</h2>
                            <a href="{{url('createkas')}}" class="btn btn-primary"><i class="fas fa-plus"></i>Tambah Data</a> 
                            </button>
                        </div>
                    </div>
                </div>
                <div class="row m-t-30">
                    <div class="col-md-16" style="width: 2800px">
                        <div class="table-responsive m-b-40">
                            <table class="table table-borderless table-data3">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Tanggal</th>
                                        <th>Saldo</th>
                                        <th>Pemasukan</th>
                                        <th>Pembayaran</th>
                                        <th>Pengeluaran</th>
                                        <th>Notes</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $p => $dataKas)
                                <tr>
                                    <td>{{ $p + 1 }}</td>
                                    <td>{{ $dataKas->tanggal }}</td>
                                    <td>Rp. {{ $dataKas->saldo }}</td>
                                    <td>Rp. {{ $dataKas->pemasukan }}</td>
                                    <td>{{ $dataKas->pembayaran }}</td>
                                    <td>Rp. {{ $dataKas->pengeluaran }}</td>
                                    <td>{{ $dataKas->notes }}</td>
                                    <td>
                                        <a href="{{url('/showkas/'.$dataKas->id)}}" class="btn btn-info">Edit</a>
                                        <a href="#" class="btn btn-danger delete" data-id="{{$dataKas->id}}">Delete</a>
                                        <script>
                                            $('.delete').click(function(){
                                                swal({
                                                    title: "Apakah data ini ingin dihapus ?",
                                                    text: "Setelah dihapus data ini tidak bisa dikembalikan !",
                                                    icon: "warning",
                                                    buttons: true,
                                                    dangerMode: true,
                                                    })
                                                    .then((willDelete) => {
                                                    if (willDelete) {
                                                        window.location = "{{url('/destroykas/'.$dataKas->id)}}"
                                                        swal("Data ini berhasil dihapus !", {
                                                        icon: "success",
                                                        });
                                                    } else {
                                                        swal("Data ini tidak jadi dihapus !");
                                                    }
                                                });
                                            });
                                        </script>
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


