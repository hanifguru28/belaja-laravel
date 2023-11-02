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
        @if ($message = session('success'))
            <div class="alert alert-success my-4">
                {{$message}}
            </div>
        @endif
        <a href="{{ route('book.create') }}" class="btn btn-primary">Tambah</a>
        <table class="table">
            <thead>
              <tr>
                <th scope="col">#ID</th>
                <th scope="col">Judul</th>
                <th scope="col">Tanggal Terbit</th>
                <th scope="col">Jumlah Halaman</th>
                <th scope="col">Cover</th>
              </tr>
            </thead>
            <tbody>
              @forelse ($books as $book )
                <tr>
                    <th scope="row">1</th>
                    <td>{{$book->judul}}</td>
                    <td>{{$book->tanggal_terbit}}</td>
                    <td>{{$book->jumlah_halaman}}</td>
                    <td>
                        <img src="{{ Storage::url($book->cover) }}" alt="" height="100px"
                    </td>
                    <td>
                        <form onsubmit="return confirm('Yakin akan dihapus?')"
                            action="{{ route('book.delete', $book->id) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <a href="{{ route('book.edit', $book->id) }}" class="btn btn-sm btn-primary"> Edit</a>
                        <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                    </form>
                    </td>
                </tr>
            @empty
              <tr>
                <td colspan="99" align="center">Data Nothing.</td>
              </tr>
              @endforelse
            </tbody>
          </table>
          {{$books->links()}}
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>
