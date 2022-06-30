@extends('layout.master')

@section('content')
    <div class = "container">
        <br>
        <h4>Data Peminjam</h4>

        @include('_partial/flash_message')

        <form action="{{ route('data_peminjam.search') }}" method="get">@csrf
            <input type="text" name="kata" placeholder="Cari...">
        </form>
        <br>
        <!-- <p align="right"><a href="{{route('data_peminjam.create')}}" class="btn btn-success">Tambah Data Peminjam</a></p> -->
        <table class="table table-dark table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Kode Peminjam</th>
                    <th>Nama Peminjam</th>
                    <th>Jenis Kelamin</th>
                    <th>Tanggal Lahir</th>
                    <th>Alamat</th>
                    <th>Pekerjaaan</th>
                    <th>Nomor Telepon</th>
                    <th>Foto</th>
                    <th>Edit</th>
                    <th>Hapus</th>
                </tr>
            </thead>
            <tbody>
                @foreach($data_peminjam as $peminjam)
                <tr>
                    <td>{{ $peminjam->id}}</td>
                    <td>{{ $peminjam->kode_peminjam}}</td>
                    <td>{{ $peminjam->nama_peminjam}}</td>
                    <td>{{ $peminjam->jenis_kelamin['nama_jenis_kelamin']}}</td>
                    <td>{{ $peminjam->tanggal_lahir}}</td>
                    <td>{{ $peminjam->alamat}}</td>
                    <td>{{ $peminjam->pekerjaan}}</td>    
                    <td>{{ !empty($peminjam->telepon['nomor_telepon'])?
                            $peminjam->telepon['nomor_telepon'] : '-'
                        }}
                    </td>
                    <td>
                        @if(empty($peminjam->foto))
                        <img src="{{ asset('foto_peminjam/default.jpg') }}" alt="" style="width: 50px;height:55px;">
                        @else
                        <img src="{{ asset('foto_peminjam/' .$peminjam->foto) }}" alt="" style="width: 50px;height:55px;"> 
                        @endif
                    </td>

                        <td><a href="{{ route('data_peminjam.edit', $peminjam->id) }}" class="btn btn-success btn-sm">Edit</a></td>
                    
                        <td>
                        <form action="{{ route('data_peminjam.destroy', $peminjam->id) }}" method="POST">
                            @csrf
                                <button class="btn btn-danger btn-sm" onclick="return confirm('Anda yakin ingin menghapus data ini?')">Hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        
        <div class="pull-left">
            <strong>
                Jummlah Peminjam : {{ $jumlah_peminjam }}
            </strong>
            <p>{{ $data_peminjam->links() }}</p>
            
        </div>
</div>
@endsection