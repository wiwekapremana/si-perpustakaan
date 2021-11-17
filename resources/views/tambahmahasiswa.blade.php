@extends('index')
@section('navigasi')
    <section>
        <div class="mb-4 pl-3">
            <h2>Tambah Mahasiswa</h2>
            <form action="/store" method="post">
                {{ csrf_field() }}
                <div class="col-lg-7">
                    <div class="form-group">
                        <label for="">Nama</label>
                        <input type="text" name="nama" required class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">NIM</label>
                        <input type="number" name="nim" required class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Email</label>
                        <input type="email" name="email" required class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="">No Telepon</label>
                        <input type="text" name="no" required class="form-control"></input>

                    </div>
                    <div class="form-group">
                        <label for="">Prodi</label>
                        <input type="text" name="prodi" required class="form-control"></input>
                    </div>
                    <div class="form-group">
                        <label for="">Jurusan</label>
                        <input type="text" name="jurusan" required class="form-control"></input>
                    </div>
                    <div class="form-group">
                        <label for="">Fakultas</label>
                        <input type="text" name="fakultas" required class="form-control"></input>
                    </div>
                    <div class="row">
                        <div class="form-group pl-3">
                            <a href="/tampilanmahasiswa" class="btn btn-danger">Batal</a>
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
