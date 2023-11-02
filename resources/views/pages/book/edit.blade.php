<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <h1>Books</h1>
            <a href="{{ route('book.index') }}" class="btn btn-secondary">Tambah</a>

            <div class="mt-4">

        <form action="{{ route('book.update', $book->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PATCH')
            <div class="mb-3">
              <label for="judul" class="form-label">Judul Buku</label>
              <input name="judul" type="text" class="form-control @error('judul') is-invalid @enderror"
              id="judul" value="{{ $book->judul }}">
              @error('judul')
                <div class="invalid-feedback">{{$message}}</div>
              @enderror
            </div>

            <div class="mb-3">
                <label for="tanggal_terbit" class="form-label">Tanggal Terbit Buku</label>
                <input name="tanggal_terbit" type="date" class="form-control @error('tanggal_terbit') is-invalid @enderror"
                id="tanggal_terbit" value="{{ $book->tanggal_terbit }}">
                @error('tanggal_terbit')
                  <div class="invalid-feedback">{{$message}}</div>
                @enderror
              </div>

              <div class="mb-3">
                <label for="jumlah_halaman" class="form-label">Jumlah Halaman Buku</label>
                <input name="jumlah_halaman" type="text" class="form-control @error('jumlah_halaman') is-invalid @enderror"
                id="jumlah_halaman" value="{{ $book->jumlah_halaman }}">
                @error('jumlah_halaman')
                  <div class="invalid-feedback">{{$message}}</div>
                @enderror
              </div>

              <div class="mb-3">
                <label for="cover" class="form-label">Cover Buku</label>
                <div class="mb-3">
                    <img src="{{ Storage::url($book->cover) }}" alt="img-thumbnail" width="240px"
                </div>
                <input name="cover" type="file" class="form-control @error('cover') is-invalid @enderror"
                id="cover">
                @error('cover')
                  <div class="invalid-feedback">{{$message}}</div>
                @enderror
              </div>

            <button type="Tambahkan" class="btn btn-primary">Tambahkan</button>
          </form>

       </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>
