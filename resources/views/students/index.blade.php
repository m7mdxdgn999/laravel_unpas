@extends ('layout/main')

@section ('title','Data mahasiswa')


@section ('container')
<div class="container">
    <div class="row">
        <div class="col-6">
            <h1>Data Mahasiswa</h1>

            <a href="/students/create" class="btn btn-primary my-3">Tambah Data Mahasiswa</a>

            <ul class="list-group">
                @foreach ($students as $student)
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    {{$student->nama}}
                    <a href="/students/{{$student->id}}" class="badge bg-primary">Detail</a>
                </li>
                @endforeach 
            </ul>

        </div>
    </div>
</div>
@endsection