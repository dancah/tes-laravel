<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel 8</title>
    <link href=" {{ mix('css/app.css') }}" rel="stylesheet">
  </head>
  <body>
    <div id="app">
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Dropdown
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Something else here</a>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
            </li>
          </ul>
          <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form>
        </div>
      </nav>
    </div>
    <script src="{{ mix('js/app.js') }}"></script>
  </body>
</html>




<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel 8</title>
    <link href=" {{ mix('css/app.css') }}" rel="stylesheet">
  </head>
  <body>

  <button><a href="{{ url('produk/create') }}">Tambah</a></button>

<br>

<form method="GET" action="{{ url('produk') }}">

<input type="test" name="cari" value="{{ $cari }}" placeholder="Cari......">
<button type="submit">Cari</button>
</form>

<br/>
<div>
<table class="table table-dark table-hover">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Kode</th>
                    <th scope="col">Jumlah</th>
                    <th scope="col">Harga</th>
                    <th scope="col">Kategori</th>
                    <th scope="col">Gambar</th>
                    <th scope="col">Aksi</th>

                </tr>
            </thead>
            <tbody>
            @foreach ($produks as $produk)
                <tr>
                    <th>{{ $loop->iteration }}</th>
                    <td>{{ $produk->nama }}</td>
                    <td>{{ $produk->kode }}</td>
                    <td>{{ $produk->jumlah }}</td>
                    <td>{{ $produk->harga }}</td>
                    <td>{{ $produk->kategori }}</td>
                    <td>{{ $produk->gambar }}</td>
                    <td>
                        <button><a href="{{ url('produk/'.$produk->id.'/edit') }}">Edit</a></button>
                        <form method="post" action="{{ url('produk/'.$produk->id) }}">
                        @csrf
                        <input type="hidden" name="_method" value="Delete">
                        <button>Hapus</button>
                        </form>
                    </td>
                  
                </tr>
            @endforeach
            </tbody>
        </table>
</div>
        <script src="{{ mix('js/app.js') }}"></script>
  </body>
</html>