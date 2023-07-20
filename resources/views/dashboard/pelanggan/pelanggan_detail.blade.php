@extends('dashboard.template')

@section('content')
    <div class="col-md-9">
        <div class="card">
        <div class="card-header">
            Lihat Data Pelanggan
        </div>
        <div class="card-body">
                <form>
                    <input type="hidden" value="{{ $pel->id }}">
                    <div class="form-group">
                        <label for="exampleInputNama">Nama Konsumen</label>
                        <input name="nama" type="text" class="form-control" id="exampleInputNama" aria-describedby="emailHelp" placeholder="Masukkan Nama Konsumen" value="{{ $pel->pel_nama }}" readonly>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputNama">No. Konsumen</label>
                        <input name="pel_no" type="number" class="form-control" id="exampleInputNama" aria-describedby="emailHelp" placeholder="Masukkan Nomor Konsumen" value="{{ $pel->pel_no }}" readonly>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputNama">Golongan Konsumen</label>
                        <select name="golongan_id" class="form-control" id="exampleInputNama" aria-describedby="emailHelp">
                            <option value="{{ $pel->golongan->id }}">{{ $pel->golongan_id }}</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputNama">Alamat Konsumen</label>
                        <input name="pel_alamat" type="text" class="form-control" id="exampleInputNama" aria-describedby="emailHelp" placeholder="Masukkan Alamat Konsumen" value="{{ $pel->pel_alamat }}" readonly>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputNama">No. Handphone Konsumen</label>
                        <input name="pel_hp" type="text" class="form-control" id="exampleInputNama" aria-describedby="emailHelp" placeholder="Masukkan No. Handphone Konsumen" value="{{ $pel->pel_hp }}" readonly>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputNama">KTP Konsumen</label>
                        <input name="pel_ktp" type="text" class="form-control" id="exampleInputNama" aria-describedby="emailHelp" placeholder="Masukkan KTP Konsumen" value="{{ $pel->pel_ktp }}" readonly>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputNama">Seri Konsumen</label>
                        <input name="pel_seri" type="text" class="form-control" id="exampleInputNama" aria-describedby="emailHelp" placeholder="Masukkan Seri Konsumen" value="{{ $pel->pel_seri }}" readonly>
                    </div>

                    <div class="form-group">pel_meteran
                        <label for="exampleInputNama">Jumlah Transaksi</label>
                        <input name="pel_meteran" type="text" class="form-control" id="exampleInputNama" aria-describedby="emailHelp" placeholder="Masukkan Jumlah Transaksi" value="{{ $pel->pel_meteran }}" readonly>
                    </div>

                    <a href="/pelanggan"><button type="button" class="btn btn-info mt-2">Kembali</button></a>
                </form>
            </div>
        </div>
    </div>
@endsection