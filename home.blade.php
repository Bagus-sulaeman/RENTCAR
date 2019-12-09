<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Home</title>
        <link href="/css/app.css" rel="stylesheet" type="text/css">
    </head>
    <body>
    <h2>Tambah Data Penyewa</h2>
    <br><br>
    <form method="post" action="/">
    {{ csrf_field() }}
  <div class="form-group">
    <label for="nama">Nama</label>
    <input type="text" class="form-control" id="nama" name="nama" placeholder="Isi Nama">
  </div>
  <div class="form-group">
    <label for="nik">NIK</label>
    <input type="text" class="form-control" id="nik" nama="nik" placeholder="Isi NIK">
  </div>
  <div class="form-group">
    <label for="phone">No. HP</label>
    <input type="text" class="form-control" id="phone" nama="phone" placeholder="Isi Nomor Handphone">
  </div>
  <div class="form-group">
    <label for="alamat">Alamat</label>
    <input type="text" class="form-control" id="alamat" nama="alamat" placeholder="Isi Alamat">
  </div>
  <button type="submit" class="btn btn-primary">Tambah data</button>
</form>
<br>
<a href="{{url('/daftar')}}" class="badge">Lihat daftar penyewa</a>
<a href="{{url('/syarat')}}" class="badge">Lihat syarat dan ketentuan sewa</a>
    </body>
</html>
