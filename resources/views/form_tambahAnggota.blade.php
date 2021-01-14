@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card" style="max-width:30rem; margin-left:300px;">
        <div class="card-header">
            <h3 style="text-align:center;">Tambah Anggota Web Perpus</h3>
        </div>
        <div class="card-body">
            <a href="{{route ('anggota.index') }}" class="btn btn-primary">Kembali</a>
            <p></p>
            <form action="{{route ('anggota.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" id="nama" name="nama" class="form-control" placholder="Masukan Nama Anda" required>
                </div>

                <div class="form-group">
                    <label for="no_anggota">NO Anggota</label>
                    <input type="text" id="no_anggota" name="no_anggota" class="form-control" placholder="Masukan No Anggota" required>
                </div>

                <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <textarea class="form-control" name="alamat" id="alamay" rows="3" placholder="Masukan Alamat Anda" required></textarea>
                </div>

                <div class="form-group">
                    <label for="nohp">No HP</label>
                    <input type="text" id="nohp" name="nohp" class="form-control" placholder="Masukan No HP Anda" required>
                </div>

                <div class="form-group">
                    <label for="jenis_kelamin">Jenis Kelamin</label>
                    <select id="jenis_kelamin" name="jenis_kelamin" class="form-control">
                        <option value="">- Pilih Jenis Kelamin -</option>
                        <option value="Laki-laki">Laki-Laki</option>
                        <option value="Perempuan">Perempuan</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="akun_FB">Akun FB</label>
                    <input type="text" id="akun_FB" name="akun_FB" class="form-control" placholder="Masukan Akun FB Anda" required>
                </div>

                <input type="submit" value="Simpan Data" class="btn btn-success" style="float:right;">

            </form>
        </div>
    </div>
</div>
@endsection