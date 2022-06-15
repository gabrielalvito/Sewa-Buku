@extends('layout.master')
@section('content')
<div class="container">
        <h4>Tambah Transaksi Peminjaman</h4>
        <form method="POST" action="{{ route('peminjaman.store') }}">
        @csrf
            <div class="mb-3">
                <label for="kode_transaksi" class="form-label" >Kode Peminjaman</label>
                <input type="text" class="form-control" id="kode_transaksi" name="kode_transaksi">
                <input type="hidden" class="form-control" name="tgl_peminjaman" value="{{ date('Y-m-d') }}">
                <input type="hidden" class="form-control" name="tgl_pengembalian" value="{{ date('Y-m-d', strtotime('+15 day', strtotime(date('Y-m-d')))) }}">
            </div>
            <div class="mb-3">
                <label for="id_peminjam" class="form-label">Nama Peminjam</label>
                <select class="form-select text-secondary" aria-label="Default select example" name="id_peminjam" for="id_peminjam">
                    <option value="">Pilih Nama Peminjam</option>
                    @foreach ($list_data_peminjam as $key => $value)
                        <option value="{{ $key }}">
                            {{ $value }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="id_buku" class="form-label">Judul Buku</label>
                <select class="form-select text-secondary" aria-label="Default select example" name="id_buku" for="id_buku">
                    <option value="">Pilih Judul Buku</option>
                    @foreach ($list_data_buku as $key => $value)
                        <option value="{{ $key }}">
                            {{ $value }}
                        </option>
                    @endforeach
                </select>
            </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
@endsection