<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Daftar penyewa</title>
        <link href="/css/app.css" rel="stylesheet" type="text/css">
    </head>
    <body>
    <h2>Daftar Penyewa</h2>
    <br>
    <table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nama</th>
      <th scope="col">NIK</th>
      <th scope="col">No. Hp</th>
      <th scope="col">Alamat</th>
      <th scope="col">Waktu Sewa</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($renters as $renter)
    <tr>
      <th scope="row">{{ $loop->iteration }}</th>
      <td>{{ $renter->nama }}</td>
      <td>{{ $renter->nik }}</td>
      <td>{{ $renter->phone }}</td>
      <td>{{ $renter->alamat }}</td>
      <td>{{ $renter->create_at }}</td>
    </tr>
    @endforeach
  </tbody>
</table>
<br>
<br>
<a href="{{url('syarat')}}" class="badge">Lihat syarat dan ketentuan sewa</a>
<a href="{{url('/')}}" class="badge">Kembali ke halaman Home</a>
    </body>
</html>
