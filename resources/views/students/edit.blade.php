@extends ('layout/main')

@section ('title','Ubah Data Data mahasiswa')


@section ('container')
<div class="container">
    <div class="row">
        <div class="col-8">
            <h1>Form Tambah mahasiswa</h1>

            <form action="/students/{{$student->id}}" method="post">
                @method ('patch')
                @csrf
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama</label>
                    <input type="text" class="form-control @error ('nama') is-invalid @enderror" id="nama" placeholder="Masukan Nama" name="nama"  value="{{$student->nama}}">
                    @error ('nama')
                    <div id="validationServerUsernameFeedback" class="invalid-feedback">
                        {{ $massage ?? 'pleade fill the name' }}
                    </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="nim" class="form-label">NIM</label>
                    <input type="text" class="form-control @error ('nim') is-invalid @enderror" id="nim" placeholder="Masukan NIM" name="nim"  value="{{$student->nim}}">
                    @error ('nama')
                    <div id="validationServerUsernameFeedback" class="invalid-feedback">
                        {{ $massage ?? 'please fill the nim' }}
                    </div>
                    @enderror

                </div>
                <div class="mb-3">
                    <label for="jurusan" class="form-label">jurusan</label>
                    <input type="text" class="form-control" id="jurusan" placeholder="Masukan jurusan" name="jurusan"  value="{{$student->jurusan}}">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">email</label>
                    <input type="text" class="form-control" id="email" placeholder="Masukan email" name="email"  value="{{$student->email}}">
                </div>
                <button type="submit" class="btn btn-primary"> Ubah  Data</button>
            </form>



        </div>
    </div>
</div>
@endsection