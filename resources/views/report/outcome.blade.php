@extends('layouts.master')

@section('content')
  <div class="row">
    <div class="col-12">
      <div class="card mb-4">
        <div class="card-header pb-0">
          <h6>Formulir Rekap Pengeluaran</h6>
          <form action="/report/outcome/table" method="GET" autocomplete="off">
            @csrf
            <div class="form-group">
                <label for="exampleInputEmail1">Jenis Pengeluaran</label>
                <select name="tipe_service" class="form-control" id="exampleInputService" placeholder="Pilih Jenis Pengeluaran">
                    <option value="" disabled selected>Pilih Jenis Pengeluaran</option>
                    <option value="Biaya Transportasi">Biaya Transportasi</option>
                    <option value="Biaya Asuransi">Biaya Asuransi</option>
                    <option value="Biaya Keamanan">Biaya Keamanan</option>
                </select>              
                <label for="exampleInputEmail1">Tanggal</label>
                <input name="date" type="datetime-local" class="form-control" id="date" aria-describedby="emailHelp" placeholder="Masukkan Tanggal">
            </div>
            <button type="submit" class="btn form-control" id="search-btn">Cari</button>
          </form> 
        </div>
      </div>
    </div>
  </div>
@endsection