@extends('layouts.admin')

@section('title')
PLPM | Tambah Data Lowongan Magang
@endsection

@section('content')
<main class="h-full pb-16 overflow-y-auto">
  <div class="container px-6 mx-auto grid">
    <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
      TAMBAH DATA LOWONGAN MAGANG
    </h2>

    <form action="{{ route('lowongan.store')}} " method="POST" enctype="multipart/form-data">
      @csrf
      <div class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800">

        <label class="block text-sm">
          <span class="text-gray-700 dark:text-gray-400">ID Lowongan</span>
          <input
            class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-textarea focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray"
            type="text" placeholder="ID Lowongan" value="{{ old('id_lowongan')}}" name="id_lowongan" required></input>
        </label>

        <label class="block mt-4 text-sm">
          <span class="text-gray-700 dark:text-gray-400">Nama</span>
          <input
            class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-textarea focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray"
            type="text" placeholder="Nama Lowongan" value="{{ old('nama')}}" name="nama" required></input>
        </label>

        <label class="block mt-4 text-sm">
          <span class="text-gray-700 dark:text-gray-400">Dinas</span>
          <input
            class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-textarea focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray"
            type="text" placeholder="Dinas" value="{{ old('dinas')}}" name="dinas" required></input>
        </label>

        <label class="block mt-4 text-sm">
          <span class="text-gray-700 dark:text-gray-400">Waktu</span>
          <select
            class="block w-full text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray"
            name="waktu" required>
            <option value="1 Bulan">1 Bulan</option>
            <option value="2 Bulan">2 Bulan</option>
            <option value="3 Bulan">3 Bulan</option>
            <option value="4 Bulan">4 Bulan</option>
            <option value="5 Bulan">5 Bulan</option>
            <option value="6 Bulan">6 Bulan</option>
          </select>
        </label>

        <label class="block mt-4 text-sm">
          <span class="text-gray-700 dark:text-gray-400">Keterangan</span>
          <input
            class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-textarea focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray"
            type="text" placeholder="Keterangan" value="{{ old('keterangan')}}" name="keterangan" required></input>
        </label>

        <button type="submit"
          class="mt-4 px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
          Tambah Lowongan Magang
        </button>
      </div>
    </form>
  </div>
</main>
@endsection