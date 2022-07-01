@extends('layout.master')
@section('content')
    <div class = "container">
        <br>
        <h4>Data Buku</h4>

        @include('_partial/flash_message')

        <form action="{{ route('data_peminjam.search') }}" method="get">@csrf
            <input type="text" name="kata" placeholder="Cari...">
        </form>
        <br>
        @if (Auth::check() && Auth::user()->level == 'admin')
        <p align="right"><a href="{{route('data_peminjam.create')}}" class="btn btn-success">Tambah Buku</a></p>
        @endif
        <table class="table table-dark table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Kode Buku</th>
                    <th>Judul Buku</th>
                    <th>Jumlah halaman</th>
                    <th>ISBN</th>
                    <th>Pengarang</th>
                    <th>Tahun Terbit</th>
                    @if (Auth::check() && Auth::user()->level == 'admin')
                    <th>Edit</th>
                    <th>Hapus</th>
                    @endif
                </tr>
            </thead>
            <tbody>
                @foreach($data_buku as $buku)
                <tr>
                    <td>{{ $buku->id}}</td>
                    <td>{{ $buku->kode_buku}}</td>
                    <td>{{ $buku->judul_buku}}</td>
                    <td>{{ $buku->jumlah_halaman}}</td>
                    <td>{{ $buku->ISBN}}</td>
                    <td>{{ $buku->pengarang}}</td>
                    <td>{{ $buku->tahun_terbit}}</td>
                    @if (Auth::check() && Auth::user()->level == 'admin')    
                    <td><a href="{{ route('buku.edit', $buku->id) }}" class="btn btn-primary btn-sm">Edit</a></td>
                    <td>
                        <form action="{{ route('buku.destroy', $buku->id) }}" method="POST">
                            @csrf
                                <button class="btn btn-danger btn-sm" onclick="return confirm('Anda yakin ingin menghapus data ini?')">Hapus</button>
                        </form>
                    </td>
                    @endif
                </tr>
                @endforeach
            </tbody>
        </table>
        
        <div class="pull-left">
            <strong>
                Jummlah Buku : {{ $jumlah_buku }}
            </strong>
            <p>{{ $data_buku->links() }}</p>
        </div>
    </div>
@endsection