@extends('index')
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
                                    <h4>Daftar transaksi</h4>
                                </div>
                                <div class="pl-3 mb-3 pull-right">
                                    <a href="/tambahtransaksi">
                                        <button class="btn btn-primary">Tambah Data transaksi</button>
                                    </a>
                                </div>
                                <table class="table">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th>No</th>
                                            <th>id_mahasiswa</th>
                                            <th>id_buku</th>
                                            <th>tanggal pinjam</th>
                                            <th>tanggal keluar</th>
                                            <th>status</th>
                                            <th>Total Biaya</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <?php $d = 1; ?>
                                        @foreach ($transaksi as $t)
                                            <tr>
                                                <td>{{ $d }}</td>
                                                <td>{{ $t->id_mahasiswa }}</td>
                                                <td>{{ $t->id_buku }}</td>
                                                <td>{{ $t->tanggal_pinjam }}</td>
                                                <td>{{ $t->tanggal_kembali }}</td>
                                                <td>{{ $t->status_pinjam }}</td>
                                                <td>{{ $t->total_biaya }}</td>
                        
                                                <td>
                                                    <a href="/edittransaksi/{{ $t->id }}" class="btn btn-success">Edit</a>
                                                    <a href="/hapustransaksi/{{ $t->id }}" class="btn btn-danger">Hapus</a>
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

