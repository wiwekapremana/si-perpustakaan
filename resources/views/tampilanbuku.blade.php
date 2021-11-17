@extends('index')
@section('title')
    Data Buku
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
                                    <h4>Daftar Buku</h4>
                                </div>
                                <div class="pull-right pl-3 mb-3">
                                    <a href="/tambahbuku">
                                        <button class="btn btn-primary">Tambah Data Buku</button>
                                    </a>
                                </div>

                                <table class="table ">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th>No</th>
                                            <th>Judul Buku</th>
                                            <th>Pengarang</th>
                                            <th>Penerbit</th>
                                            <th>Tahun Terbit</th>
                                            <th>Jumlah Halaman</th>
                                            <th>isbn</th>
                                            <th>Stok Buku</th>
                                            <th>Biaya Sewa</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $d = 1; ?>
                                        @foreach ($buku as $k)
                                            <tr>
                                                <td>{{ $d }}</td>
                                                <td>{{ $k->judul_buku }}</td>
                                                <td>{{ $k->pengarang }}</td>
                                                <td>{{ $k->penerbit }}</td>
                                                <td>{{ $k->tahun_terbit }}</td>
                                                <td>{{ $k->tebal }}</td>
                                                <td>{{ $k->isbn }}</td>
                                                <td>{{ $k->stok_buku }}</td>
                                                <td>{{ $k->biaya_sewa_harian }}</td>
                                                <td>
                                                    <a href="/editbuku/{{ $k->id }}" class="btn btn-success">Edit</a>
                                                    <a href="/hapusbuku/{{ $k->id }}" class="btn btn-danger">Hapus</a>
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
