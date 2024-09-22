<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
   
<div class="container mt-5">
    <h1 class="text-center mb-5">Data Mahasiswa</h1>
    <a href="{{ route('mahasiswa.create')}}"class="btn btn-primary mb-3">Tambah Data</a>
    <div class="card">
    <div class="card-body">
        <table class="table">
            <thead>
                <th>no</th>
                <th>NIM</th>
                <th>NAMA</th>
                <th>PRODI</th>
                <th>AKSI</th>
            </thead>
            </tbody>
            @foreach ($mahasiswa as $no => $hasil)
            <tr>
                <th>{{ $no+1 }}</th>
                <td>{{$hasil->nim }}</td>
                <td>{{$hasil->nama }}</td>
                <td>{{$hasil->prodi }}</td>
                <td>
                    <form action="{{ route('mahasiswa.destroy', $hasil->id) }}" method="POST">
                        @csrf
                        @method('delete')
                    <a href="{{ route('mahasiswa.edit', $hasil->id) }}" class="btn btn-success btn-sm">Edit</a>
                    <button class="btn btn-danger btn-sm">Hapus</button>
                </td>
            </tr>
            @endforeach
        </tbody>
        </table>
        </div>
    </div>
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>