@extends('index')
@section('title')
    Data Mahasiswa
@endsection
@section('navigasi')
    <section>
        <div class="row">
            <div class="card">
                <div class="animated fadeIn">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="card-body table-responsive">
                        <div class="row">
                            <div class="row mb-4 pl-4">
                                <div class="pull-left ">
                                    <h4>Daftar Mahasiswa</h4>
                                </div>
                                <div class="pl-3 mb-3 pull-right">
                                    <a href="/tambah">
                                        <button class="btn btn-primary">Tambah Data Mahasiswa</button>
                                    </a>
                                </div>
                                <table class="table">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>NIM</th>
                                            <th>Email</th>
                                            <th>No Telp</th>
                                            <th>Prodi</th>
                                            <th>Jurusan</th>
                                            <th>Fakultas</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <?php $d = 1; ?>
                                        @foreach ($mahasiswa as $m)
                                            <tr>
                                                <td>{{ $d }}</td>
                                                <td>{{ $m->nama }}</td>
                                                <td>{{ $m->nim }}</td>
                                                <td>{{ $m->email }}</td>
                                                <td>{{ $m->no_telp }}</td>
                                                <td>{{ $m->prodi }}</td>
                                                <td>{{ $m->jurusan }}</td>
                                                <td>{{ $m->fakultas }}</td>
                                                <td>
                                                    <a href="/editmahasiswa/{{ $m->id }}" class="btn btn-success">Edit</a>
                                                    <a href="/hapus/{{ $m->id }}" class="btn btn-danger">Hapus</a>
                                                </td>
                                            </tr>
                                        <?php $d++;?>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
@endsection
