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
<form method="post" action="{{ url('kategori/'.$kategoris->id) }}">
@csrf
<input type="hidden" name="_method" value="PATCH">
                   
                      <div class="col-md-6">
                          <label>Nama</label>
                          <input type="text"  name="kategori"  value="{{ $kategoris->kategori}}">
                      </div><br>
                      <div class="col-md-6">
                          <label>Keterangan</label>
                          <input type="text"  name="keterangan"  value="{{ $kategoris->keterangan}}">
                      </div><br>
                      <div class="col-md-6">
                          <button>Simpan</button>
                      </div>
                  </form>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
  </body>
</html>