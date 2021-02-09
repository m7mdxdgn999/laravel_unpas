@extends ('layout/main')

@section ('title','Detail mahasiswa')


@section ('container')
<div class="container">
    <div class="row">
        <div class="col-6">
            <h1>Detail Mahasiswa</h1>

            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">{{$student->nama}}</h5>
                    <h6 class="card-subtitle mb-2 text-muted">{{$student->nim}}</h6>
                    <p class="card-text">{{$student->jurusan}}</p>
                    <p class="card-text">{{$student->email}}</p>

                    <a href="{{$student->id}}/edit" type="submit" class="btn btn-primary">Edit</a>
                    <form action="{{$student->id}}" method="post" class="d-inline">
                        @method ('delete')
                        @csrf
                        <button type="submit" class="btn btn-danger">Delet</button>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection