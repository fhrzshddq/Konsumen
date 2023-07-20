@extends('dashboard.template')

@section('content')
    <div class="col-md-9">
        <div class="card">
        <div class="card-header">
            Table Pelanggan
            <a href="/pelanggan/add"><button class="btn btn-success" style="float: right">Tambah</button></a>
        </div>
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama Konsumen</th>
                    <th scope="col">Member</th>
                    <th scope="col">No. Handphone</th>
                    <th scope="col">Jumlah Transaksi</th>
                    <th scope="col">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                <?php $i = 1; ?>
                @foreach ($listPelanggan as $pel)
                    <tr>
                        <th scope="row"><?= $i++ ?></th>
                        <td>{{ $pel->pel_nama }}</td>
                        <td>{{ $pel->golongan_id }}</td>
                        <td>{{ $pel->pel_hp }}</td>
                        <td>{{ $pel->pel_meteran }}</td>
                        <td>
                            <a href="/pelanggan/detail/{{ $pel->id }}"><button class="btn btn-info">Detail</button></a>
                            <a href="/pelanggan/edit/{{ $pel->id }}"><button class="btn btn-success">Edit</button></a>
                            <a href="/pelanggan/delete/{{ $pel->id }}"><button class="btn btn-danger">Delete</button></a>
                        </td>
                    </tr> 
                @endforeach
                </tbody>
            </table>
        </div>
        </div>
    </div>
@endsection