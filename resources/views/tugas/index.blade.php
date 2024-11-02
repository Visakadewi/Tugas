<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    @extends('Layouts.Base')
    @section('content')
    <div class="container">
        <div class="card">
        </div>
        <h1 class="text-center">Data Pegawai</h1>
        <div class="d-flex justify-content-end mb-2">
            <a href="{{ route('create') }}"><button class="btn btn-primary">+ tambah data</button></a>
        </div>
        <div class="text-center">
            <table class="table">
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>NIP</th>
                    <th>Alamat</th>
                    <th>Aksi</th>
                </tr>
                @php
                    $no = 1;
                @endphp
                @foreach ($data as $d)
                <tr>
                    <th>{{ $no++ }}</th>
                    <th>{{ $d->nama }}</th>
                    <th>{{ $d->nip }}</th>
                    <th>{{ $d->alamat }}</th>
                    <th>
                        <a href="{{ route('getDataByIdPegawai',$d->id) }}"  class="btn btn-warning">Edit</a>
                        <form action="{{ route('deleteDataPegawai', $d->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</button>
                        </form>
                    </th>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
@endsection

</html>