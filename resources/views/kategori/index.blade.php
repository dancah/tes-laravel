
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel 8</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
  </head>
  <body>
  <a href="{{ url('produk') }}">PRODUK</a>
<a href="{{ url('kategori') }}">KATEGORI</a><br><br><br>
  <button><a href="{{ url('kategori/create') }}">Tambah</a></button>

<br>
<form method="GET" action="{{ url('kategori') }}">

<input type="test" name="cari" value="{{ $cari }}" placeholder="Cari......">
<button type="submit">Cari</button>
</form>

<br/>
<table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Kategori</th>
                    <th scope="col">Keterangan</th>
                    <th scope="col">Aksi</th>

                </tr>
            </thead>
            <tbody>
            @foreach ($kategoris as $kategori)
                <tr>
                    <th>{{ $loop->iteration }}</th>
                    <td>{{ $kategori->kategori }}</td>
                    <td>{{ $kategori->keterangan }}</td>
                  
                    <td>
                        <button><a href="{{ url('kategori/'.$kategori->id.'/edit') }}">Edit</a></button>
                        <form method="post" action="{{ url('kategori/'.$kategori->id) }}">
                        @csrf
                        <input type="hidden" name="_method" value="Delete">
                        <button>Hapus</button>
                        </form>
                    </td>
                  
                </tr>
            @endforeach
            </tbody>
        </table>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
 </body>
</html>