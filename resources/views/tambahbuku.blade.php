@extends('index')
@section('navigasi')
    <section>
        <div class="mb-4 pl-3">
            <h2>Tambah Buku</h2>
            <br>
            <form action="/storebuku" method="post">
                {{ csrf_field() }}
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="">Judul Buku</label>
                        <input type="text" name="judul_buku" required class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Pengarang</label>
                        <input type="text" name="pengarang" required class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Penerbit</label>
                        <input type="text" name="penerbit" required class="form-control">

                    </div>
                    <div class="form-group">
                        <label for="">Tahun Terbit</label>
                        <input type="date" name="tahun_terbit" required class="form-control"></input>

                    </div>
                    <div class="form-group">
                        <label for="">Jumlah Halaman</label>
                        <input type="text" name="tebal" required class="form-control"></input>

                    </div>
                    <div class="form-group">
                        <label for="">Isbn</label>
                        <input type="text" name="isbn" required class="form-control"></input>

                    </div>
                    <div class="form-group">
                        <label for="">Stok Buku</label>
                        <input type="number" name="stok_buku" required class="form-control"></input>

                    </div>
                    <div class="form-group">
                        <label for="">Biaya Sewa</label>
                        <input type="text" name="biaya_sewa_harian" required class="form-control"></input>

                    </div>
                    <div class="row">
                        <div class="form-group pl-3">
                            <a href="/tampilanbuku" class="btn btn-danger">Batal</a>
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
