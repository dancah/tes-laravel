<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel 8</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
  </head>
  <body>
      <br>
<div class="row" >
<form method="post" action="{{ url('produk/'.$produks->id) }}" enctype="multipart/form-data">
@csrf
<input type="hidden" name="_method" value="PATCH">
                   
                      <div class="col-md-6">
                          <label>Nama</label>
                          <input type="text"  name="nama"  value="{{ $produks->nama}}">
                      </div><br>
                      <div class="col-md-6">
                          <label>Kode</label>
                          <input type="text"  name="kode"  value="{{ $produks->kode}}">
                      </div><br>
                      <div class="col-md-6">
                          <label>Jumlah</label>
                          <input type="number" min="1"  name="jumlah"  value="{{ $produks->jumlah}}">
                      </div><br>
                      <div class="col-md-6">
                          <label>Harga</label>
                          <input type="number" min="1"  name="harga"  value="{{ $produks->harga}}">
                      </div><br>
                      <div class="col-md-6">
                          <label>Kategori</label>
                          <select class="form-control" name="kategori">
                            @foreach ($kategoris as $kategori)
                                <option value="{{ $kategori->id }}" {{ $kategori->id == $produks->kategori ? 'selected' : '' }}> {{ $kategori->kategori }} </option>
                            @endforeach
                          </select>
                        </div><br>
                      <div class="col-md-6">
                          <label>Gambar</label>
                          <input class="form-control" type="file" name="image" value="{{ $produks->gambar}}" />
                          <p class="form-text">Kosongkan jika tidak ingin mengubah gambar.</p>
                          <img src="{{ $row->image() }}" height="75" />
                      </div><br>
                   
                      <div class="col-md-6">
                          <button>Simpan</button>
                      </div>
                  </form>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
  </body>
</html>