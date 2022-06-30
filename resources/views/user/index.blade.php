@extends('layout.master')

@section('content')
    <div class = "container">
        <br>
        <h4>Data User</h4>
        <p align="right"><a href="{{route('user.create')}}" class="btn btn-success">Tambah Data User</a></p>
        <table class="table table-dark table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Level</th>
                    <th>Edit</th>
                    <th>Hapus</th>
                </tr>
            </thead>
            <tbody>
                @foreach($user_list as $user)
                <tr>
                    <td>{{ $user->id}}</td>
                    <td>{{ $user->name}}</td>
                    <td>{{ $user->email}}</td>
                    <td>{{ $user->level}}</td>
                    </td>
                        <td><a href="{{ route('user.edit', $user->id) }}" class="btn btn-success btn-sm">Edit</a></td>
                    
                        <td>
                        <form action="{{ route('user.destroy', $user->id) }}" method="POST">
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
                Jummlah Peminjam : {{ $jumlah_user }}
            </strong>
            <p>{{ $user_list->links() }}</p>
            
        </div>
</div>
@endsection