@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            <h3 style="text-align:center;">Data Daftar Anggota Web Perpus</h3>
        </div>

        <div class="card-body">
            <a href="{{ route ('anggota.create') }}" class="btn btn-outline-primary">Tambah Data Anggota</a>
            <p></p>
            <table class="table table-bordered table-striped">
                <tr style="text-align:center;">
                    <th>Nama</th>
                    <th>No Anggota</th>
                    <th>Alamat</th>
                    <th>No Hp</th>
                    <th>Jenis Kelamin</th>
                    <th>Akun FB</th>
                    <th>Aksi</th>
                </tr>

                @foreach($anggota as $a)

                <tr>
                    <td>{{$a->nama}}</td>
                    <td>{{$a->no_anggota}}</td>
                    <td>{{$a->alamat}}</td>
                    <td>{{$a->nohp}}</td>
                    <td>{{$a->jenis_kelamin}}</td>
                    <td>{{$a->akun_FB}}</td>
                    <td>
                        <ul class="nav">
                            <a href="{{route ('anggota.show', $a->id) }}" class="btn btn-success mr-2">Show</a>
                            <a href="{{route ('anggota.edit', $a->id) }}" class="btn btn-primary mr-2">Edit</a>
                            <form action="{{route ('anggota.destroy', $a->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-warning">Delete</button>
                            </form>
                        </ul>
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>
@endsection