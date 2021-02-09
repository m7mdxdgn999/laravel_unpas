@extends ('layout/main')

@section ('title','Data mahasiswa')


@section ('container')
<div class="container">
    <div class="row">
        <div class="col-8">
            <h1>Form Tambah mahasiswa</h1>

            <form action="/students" method="post">
             @csrf
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama</label>
                    <input type="text" class="form-control" id="nama" placeholder="Masukan Nama" name="nama">
                </div>
                <div class="mb-3">
                    <label for="nim" class="form-label">NIM</label>
                    <input type="text" class="form-control" id="nim" placeholder="Masukan NIM" name="nim">
                </div>
                <div class="mb-3">
                    <label for="jurusan" class="form-label">jurusan</label>
                    <input type="text" class="form-control" id="jurusan" placeholder="Masukan jurusan" name="jurusan">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">email</label>
                    <input type="text" class="form-control" id="email" placeholder="Masukan email" name="email">
                </div>
                <button type="submit" class="btn btn-primary">Tambah Data</button>
            </form>



        </div>
    </div>
</div>
@endsection