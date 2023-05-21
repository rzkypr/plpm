<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PLPM | Laporan Pengajuan Magang</title>
  <style>
    img{
      height: 100px;;
    }

    hr.solid {
    border-top: 2px solid #3B82F6;
    }
  </style>

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
  <div class="container">
    <div class="title text-center mb-5">
      <h2>PLPM | Portal Layanan Pengajuan Magang Diskominfo Kabupaten Bandung</h2>
      <h5><a href="http://rcreatived.rf.gd/" target="_blank">Oleh Rizky Purnama Ramadhan</a></h5>
    </div>
    <hr class="solid">

    <div>
      <h6>Laporan Pengajuan Magang</h6>
      <h6>{{ $pengaduan->created_at->format('l, d F Y') }}</h6>
    </div>
    <hr class="solid">

    <div class="mt-3 mb-3">
      <h6>Dinas : {{ $pengaduan->dinas }}</h6>
      <h6>NISN/NIM/Nomor Induk : {{ $pengaduan->nim }}</h6>
      <h6>Nama : {{ $pengaduan->nama }}</h6>
      <h6>Nomor Telepon : {{ $pengaduan->whatsapp }}</h6>
    </div>

    <table class="table table-bordered">
      <thead class="thead">
        <tr>
          <th scope="col">Laporan Pengajuan</th>
          <th scope="col">Status</th>
        </tr>
      </thead>
      <tbody>
        <td>{{ $pengaduan->dinas }}</td>
        <td>{{ $pengaduan->status }}</td>
      </tbody>
    </table>
  </div>
</body>
</html>
