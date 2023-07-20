@extends('dashboard.template')

@section('content')
    <div class="col-md-9">
        <div class="card">
        <div class="card-header">
            Edit Data Konsumen
        </div>
        <div class="card-body">
                <form action="/pelanggan/store" method="post">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="exampleInputNama">Nama Konsumen</label>
                        <input name="nama" type="text" class="form-control" id="exampleInputNama" aria-describedby="emailHelp" placeholder="Masukkan Nama Konsumen">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputNama">No. Konsumen</label>
                        <input name="pel_no" type="number" class="form-control" id="exampleInputNama" aria-describedby="emailHelp" placeholder="Masukkan Nomor Konsumen">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputNama">Golongan Konsumen</label>
                        <select name="golongan_id" class="form-control" id="exampleInputNama" aria-describedby="emailHelp">
                            @foreach ($golongans as $golongan)
                                <option value="{{ $golongan->id }}">{{ $golongan->nama }}</option>    
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputNama">Alamat Konsumen</label>
                        <input name="pel_alamat" type="text" class="form-control" id="exampleInputNama" aria-describedby="emailHelp" placeholder="Masukkan Alat Konsumen">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputNama">No. Handphone Konsumen</label>
                        <input name="pel_hp" type="text" class="form-control" id="exampleInputNama" aria-describedby="emailHelp" placeholder="Masukkan No. Handphone Konsumen">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputNama">KTP Konsumen</label>
                        <input name="pel_ktp" type="text" class="form-control" id="exampleInputNama" aria-describedby="emailHelp" placeholder="Masukkan KTP Konsumen">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputNama">Seri Konsumen</label>
                        <input name="pel_seri" type="text" class="form-control" id="exampleInputNama" aria-describedby="emailHelp" placeholder="Masukkan Seri Konsumen">
                    </div>

                    <div class="form-group">pel_meteran
                        <label for="exampleInputNama">Jumlah Transaksi</label>
                        <input name="pel_meteran" type="text" class="form-control" id="exampleInputNama" aria-describedby="emailHelp" placeholder="Masukkan Jumlah Transaksi">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputNama">Status</label>
                        <select name="pel_aktif" class="form-control" id="exampleInputNama" aria-describedby="emailHelp">
                            <option value="1">Aktif</option>
                            <option value="2">Tidak Aktif</option>
                        </select>
                    </div>

                    <button type="submit" class="btn btn-primary mt-2">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection