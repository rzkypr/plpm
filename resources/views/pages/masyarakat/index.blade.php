@extends('layouts.masyarakat')

@section('title')
Formulir Pengajuan
@endsection
@section('content')
<main class="h-full pb-16 overflow-y-auto">
  {{-- @foreach($liat as $li)
 <li>{{ $li->nim }}</li>
  @endforeach --}}
  <div class="container px-6 mx-auto grid">
    <h2 class="my-6 text-2xl font-semibold text-center text-gray-700 dark:text-gray-200">
      Silahkan Isi Formulir Pengajuan
    </h2>

    @if ($errors->any())
    <div class="alert alert-danger">
      <ul>
        @foreach($errors->all() as $error)
        <li>{{ $error }} </li>
        @endforeach
      </ul>
    </div>
    @endif
    <form action="{{ route('pengaduan.store')}} " method="POST" enctype="multipart/form-data">
      @csrf

      <div class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800">

        <label class="block mt-6 mb-4 text-sm">
            <span class="text-gray-700 dark:text-gray-400">Dinas</span>
            <select
              class="block w-full text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray"
              name="dinas" required>
              <option value="Dinas Arsip Dan Perpustakaan">Dinas Arsip Dan Perpustakaan</option>
              <option value="Dinas Kependudukan Dan Pencatatan Sipil">Dinas Kependudukan Dan Pencatatan Sipil</option>
              <option value="Dinas Kesehatan">Dinas Kesehatan</option>
              <option value="Dinas Ketahanan Pangan Dan Perikanan">Dinas Ketahanan Pangan Dan Perikanan</option>
              <option value="Dinas Ketenagakerjaan">Dinas Ketenagakerjaan</option>
              <option value="Dinas Komunikasi, Informatika Dan Statistik">Dinas Komunikasi, Informatika Dan Statistik</option>
              <option value="Dinas Koperasi Dan Usaha Kecil Dan Menengah">Dinas Koperasi Dan Usaha Kecil Dan Menengah</option>
              <option value="Dinas Lingkungan Hidup">Dinas Lingkungan Hidup</option>
              <option value="Dinas Pariwisata Dan Kebudayaan">Dinas Pariwisata Dan Kebudayaan</option>
              <option value="Dinas Pekerjaan Umum Dan Tata Ruang">Dinas Pekerjaan Umum Dan Tata Ruang</option>
              <option value="Dinas Pemadam Kebakaran Dan Penyelamatan">Dinas Pemadam Kebakaran Dan Penyelamatan</option>
              <option value="Dinas Pemberdayaan Masyarakat Dan Desa">Dinas Pemberdayaan Masyarakat Dan Desa</option>
              <option value="Dinas Pemuda Dan Olahraga">Dinas Pemuda Dan Olahraga</option>
              <option value="Dinas Penanaman Modal Dan Pelayanan Terpadu Satu Pintu">Dinas Penanaman Modal Dan Pelayanan Terpadu Satu Pintu</option>
              <option value="Dinas Pendidikan">Dinas Pendidikan</option>
              <option value="Dinas Pengendalian Penduduk, Keluarga Berencana, Pemberdayaan Perempuan Dan Perlindungan Anak">Dinas Pengendalian Penduduk, Keluarga Berencana, Pemberdayaan Perempuan Dan Perlindungan Anak</option>
              <option value="Dinas Perdagangan Dan Perindustrian">Dinas Perdagangan Dan Perindustrian</option>
              <option value="Dinas Perhubungan">Dinas Perhubungan</option>
              <option value="Dinas Pertanian">Dinas Pertanian</option>
              <option value="Dinas Perumahan Rakyat, Kawasan Permukiman, Dan Pertanahan">Dinas Perumahan Rakyat, Kawasan Permukiman, Dan Pertanahan</option>
              <option value="Dinas Sosial">Dinas Sosial</option>
            </select>
        </label>

        <label class="block mt-6 text-sm">
            <span class="text-gray-700 dark:text-gray-400">NISN/NIM/Nomor Induk</span>
            <input
              class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-textarea focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray"
              rows="8" type="text" placeholder="NISN/NIM/Nomor Induk" value="{{ old('nim')}}" required
              name="nim"></input>
        </label>

        <label class="block mt-6 text-sm">
          <span class="text-gray-700 dark:text-gray-400">Nama Lengkap</span>
          <input
            class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-textarea focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray"
            rows="8" type="text" placeholder="Nama Lengkap" value="{{ old('nama')}}" required
            name="nama"></input>
        </label>

        <label class="block mt-6 text-sm">
            <span class="text-gray-700 dark:text-gray-400">Asal Sekolah/Kampus</span>
            <input
              class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-textarea focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray"
              rows="8" type="text" placeholder="Asal Sekolah/Kampus" value="{{ old('kampus')}}" required
              name="kampus"></input>
        </label>

        <label class="block mt-6 text-sm">
            <span class="text-gray-700 dark:text-gray-400">Jurusan</span>
            <input
              class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-textarea focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray"
              rows="8" type="text" placeholder="Jurusan" value="{{ old('jurusan')}}" required
              name="jurusan"></input>
        </label>

        <label class="block mt-6 text-sm">
            <span class="text-gray-700 dark:text-gray-400">Jenjang</span>
            <input
              class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-textarea focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray"
              rows="8" type="text" placeholder="Jenjang" value="{{ old('jenjang')}}" required
              name="jenjang"></input>
        </label>

        <label class="block mt-6 text-sm">
            <span class="text-gray-700 dark:text-gray-400">Nomor Whatsapp</span>
            <input
              class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-textarea focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray"
              rows="8" type="text" placeholder="Nomor Whatsapp" value="{{ old('whatsapp')}}" required
              name="whatsapp"></input>
        </label>

        <label class="block mt-6 text-sm">
            <span class="text-gray-700 dark:text-gray-400">Email</span>
            <input
              class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-textarea focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray"
              rows="8" type="text" placeholder="Email" value="{{ old('email')}}" required
              name="email"></input>
        </label>

        <label class="block mt-6 text-sm">
            <span class="text-gray-700 dark:text-gray-400">Tanggal Mulai</span>
            <input
              class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-textarea focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray"
              rows="8" type="text" placeholder="Tanggal Mulai" value="{{ old('mulai')}}" required
              name="mulai"></input>
        </label>

        <label class="block mt-6 text-sm">
            <span class="text-gray-700 dark:text-gray-400">Tanggal Selesai</span>
            <input
              class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-textarea focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray"
              rows="8" type="text" placeholder="Tanggal Selesai" value="{{ old('selesai')}}" required
              name="selesai"></input>
        </label>
        {{--  on process plptd  --}}



        {{--  <label for="image" class="block mt-4 text-sm">
          <span class="text-gray-700 dark:text-gray-400">File</span>
          <input
            class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
            type="file" value="{{ old('image')}}" name="image" required/>
        </label>  --}}
        <button type="submit"
          class="mt-6 px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
          Kirim
        </button>

      </div>
    </form>
</main>
@endsection
