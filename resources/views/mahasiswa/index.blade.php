@extends ('layout/main')

@section ('title','Data mahasiswa')


@section ('container')
<div class="container">
    <div class="row">
        <div class="col-10">
            <h1>Data Mahasiswa</h1>

            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama</th>
                        <th scope="col">NIM</th>
                        <th scope="col">Email</th>
                        <th scope="col">Jurusan</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Muhammad</td>
                        <td>11170930000084</td>
                        <td>halilintar1314@gmail.com</td>
                        <td>Sistem Informasi</td>
                        <td><a href="" class="badge bg-primary"> edit</a></td>
                        <td><a href="" class="badge bg-danger"> hapus</a></td>
                    </tr>
                    
                </tbody>
            </table>

        </div>
    </div>
</div>
@endsection