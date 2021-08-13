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
<div class="row">
<form  method="post" action="{{ url('produk') }}" enctype="multipart/form-data">
@csrf
                      <div class="col-md-6">
                          <label>Nama</label>
                          <input type="text"  name="nama" placeholder="Isi Nama " required>
                      </div><br>
                      <div class="col-md-6">
                          <label>Kode</label>
                          <input type="text"  name="kode" placeholder="Isi Kode " required>
                      </div><br>
                      <div class="col-md-6">
                          <label>Jumlah</label>
                          <input type="number" min="1"  name="jumlah" placeholder="Isi Jumlah " required>
                      </div><br>
                      <div class="col-md-6">
                          <label>Harga</label>
                          <input type="number" min="1"  name="harga" placeholder="Isi Harga" required>
                      </div><br>
                      <div class="col-md-6">
                          <label>Kategori</label>
                          <select class="form-control " name="kategori" id="kategori" required>
                            <option>-- Pilih Kategori --</option>
                            @foreach ($kategoris as $kategori)
                                <option value="{{ $kategori->id }}"> {{ $kategori->kategori }} </option>
                            @endforeach
                           </select>
                      </div><br>
                      <div class="col-md-6">
                          <label>Gambar</label>
                          <input type="file"  name="image" required>
                      </div>

                      <br>
                   
                      <div class="col-md-6">
                          <button>Simpan</button>
                      </div>
                  </form>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
  </body>
</html>