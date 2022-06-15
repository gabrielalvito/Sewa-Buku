@extends('layout.master')
@section('content')
    <div class = "container">
        <h4>Data Peminjam</h4>
        <p align="right"><a href="{{route('peminjaman.create')}}" class="btn btn-success">Tambah Data Peminjaman</a></p>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Kode Transaksi</th>
                    <th>Nama Peminjam</th>
                    <th>Judul Buku</th>
                    <th>Tanggal Peminjaman</th>
                    <th>Tanggal Pengembalian</th>
                </tr>
            </thead>
            <tbody>
                @foreach($data_peminjaman as $peminjaman)
                <tr>
                    <td>{{ $peminjaman->id}}</td>
                    <td>{{ $peminjaman->kode_transaksi}}</td>
                    <td><a href="{{ route('peminjaman.detail_peminjam', $peminjaman->data_peminjaman['id']) }}">{{ $peminjaman->data_peminjaman['nama_peminjam'] }}</a></td>
                    <td><a href="{{ route('peminjaman.detail_buku', $peminjaman->data_buku['id']) }}">{{ $peminjaman->data_buku['judul_buku'] }}</a></td>
                    <!-- <td>{{ $peminjaman->data_peminjaman['nama_peminjam']}}</td>
                    <td>{{ $peminjaman->data_buku['judul_buku']}}</td> -->
                    <td>{{ $peminjaman->tgl_peminjaman}}</td>
                    <td>{{ $peminjaman->tgl_pengembalian}}</td>    
                </tr>
                @endforeach
            </tbody>
        </table>
        <div class="pull-left">
            <strong>
                Jumlah Peminjaman : {{ $jumlah_peminjaman }}
            </strong>
        </div>
    </div>
@endsection