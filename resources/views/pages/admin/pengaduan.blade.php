<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>PLPTD | Portal Layanan Pengajuan PL/PKL/Magang Terintegrasi Diskominfo</title>

  <style>
    .thead{
    background-color: #3B82F6;
    color: #ffffff;

    }
  </style>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>

<body>
  <div class="container mt-5">
    <div class="title text-center mb-5">
      <h2>Laporan Portal Layanan Pengajuan PL/PKL/Magang Terintegrasi Diskominfo Kabupaten Bandung</h2>
      <h5><a href="http://rcreatived.rf.gd/" target="_blank">Oleh Mahasiswa STMIK Dharma Negara Bandung</a></h5>
    </div>
    <table class="table table-bordered">
      <thead class="thead">
        <tr>
          <th scope="col">No</th>
          <th scope="col">Dinas</th>
          <th scope="col">NISN/NIM/Nomor Induk</th>
          <th scope="col">Nama</th>
          <th scope="col">Pengajuan</th>
          <th scope="col">Tanggal Pengajuan</th>
          <th scope="col">Status</th>
        </tr>
      </thead>
      <tbody>
        @foreach($pengaduan as $item)

        <tr>
          <td>{{ $item->id }} </td>
          <td>{{ $item->dinas }} </td>
          <td>{{ $item->nim }}</td>
          <td>{{ $item->name }}</td>
          <td>{{ $item->dinas }}</td>
          <td>{{ $item->created_at->format('l, d F Y') }}</td>
          <td>{{ $item->status }}</td>

        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</body>

</html>
