<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>DATA MAHASISWA</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.9.1/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    <div class="container mt-5">
        <h1 class="text-center mb-5">
             Form Edit Data Mahasiswa
        </h1>
        <a href="{{ route('mahasiswa.index') }}" class="btn btn-primary mb-3"><i class="bi bi-arrow-left"></i> Data Mahasiswa</a>
        <div class="card">
    </div class="card-body">
                <form action="{{ route('mahasiswa.update', $mahasiswa->id) }}" method="POST">
                    @csrf
                    @method('patch')
                    <div class="mb-3">
                        <label for="nim" class="form-label">NIM</label>
                        <input type="text" class="form-control" name="nim" value="{{ $mahasiswa->nim }}" id="nim">
                    </div>
                    <div class="mb-3">
                        <label for="nama" class="form-label">NAMA</label>
                        <input type="text" class="form-control" name="nama" value="{{ $mahasiswa->nama }}" id="nama">
                    </div>
                    <div class="mb-3">
                        <label for="prodi" class="form-label">PRODI</label>
                        <input type="text" class="form-control" name="prodi" value="{{ $mahasiswa->prodi }}" id="prodi">
                    </div>
                    <button type="submit" class="btn btn-primary float-end">Edit</button>
                </form>
            </div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    </body>
    </html>
    