@extends('index')
@section('navigasi')
    <section>
        <div class="mb-4 pl-3">
            <h2>Tambah transaksi</h2>
            <br>
            <form action="/storetransaksi" method="post">
                {{ csrf_field() }}
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="">ID Mahasiswa</label>
                        <input type="text" name="judul_transaksi" " required class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">ID Buku</label>
                        <input type="text" name="pengarang" value="" required class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Tanggal Pinjam</label>
                        <input type="date" name="penerbit" required class="form-control">

                    </div>
                    <div class="form-group">
                        <label for="">Tanggal Keluar</label>
                        <input type="date" name="tanggal_keluar" required class="form-control"></input>

                    </div>
                    <div class="form-group">
                        <label for="">Status</label>
                        <input type="text" name="tebal" required class="form-control"></input>

                    </div>
                    <div class="form-group">
                        <label for="">Total Biaya</label>
                        <input type="text" name="isbn" required class="form-control"></input>

                    </div>
                    <div class="row">
                        <div class="form-group pl-3">
                            <a href="/tampilantransaksi" class="btn btn-danger">Batal</a>
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>


        </div>
        </div>
        </div>
        </div>
        </div>

    </section>

@endsection
