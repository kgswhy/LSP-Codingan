{{-- Input Pengaduan --}}
@extends('frontend.layout.app')
@section('title', 'Buat Pengaduan | SMK Telkom Jakarta')
@section('content')
    <section class="w-full px-8 py-20 bg-gray-100 xl:px-8">
        <div class="max-w-5xl mt-20  mx-auto">
            <div class="flex flex-col justify-between items-center md:flex-row">
                <div class="w-full mt-16 md:mt-0 ">
                    <form action="{{ route('pengaduan.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div
                            class="w-full h-auto p-10 py-10 overflow-hidden bg-white border-b-2 border-gray-300 rounded-lg shadow-2xl px-7">
                            <h3 class="mb-6 text-2xl font-medium text-center">Buat <strong>Pengaduan / Aspirasi</strong>
                            </h3>
                            <label for="" class="text-gray-600">Judul Pengaduan</label>
                            <div class="block mb-4 border border-gray-200 rounded-lg">
                                <input type="text" name="judul_laporan" id="judul_pengaduan"
                                    class="block   @error('judul_laporan') border border-red-500 @enderror  w-full px-4 py-3 border-2 border-transparent rounded-lg focus:border-blue-500 focus:outline-none"
                                    value="{{ old('judul_laporan') }}" placeholder="Judul pengaduan">
                            </div>
                            @error('judul_laporan')
                                <div class="text-red-600 mb-4">{{ $message }}</div>
                            @enderror
                            <label for="" class="text-gray-600">nis</label>
                            <div class="block mb-4 border border-gray-200 rounded-lg">
                                <input type="number" name="nis" id="nis"
                                    class="block w-full @error('nis') border border-red-500 @enderror px-4 py-3 border-2 border-transparent rounded-lg focus:border-blue-500 focus:outline-none"
                                    value="{{ auth()->user()->nis }}" readonly placeholder="nis" readonly>
                            </div>
                            @error('nis')
                                <div class="text-red-600 mb-4">{{ $message }}</div>
                            @enderror
                            <label for="" class="text-gray-600">Kelas</label>
                            <div class="block mb-4 border border-gray-200 rounded-lg">
                                <input type="Kelas" name="kelas" id="kelas"
                                    class="block w-full @error('kelas') border border-red-500 @enderror px-4 py-3 border-2 border-transparent rounded-lg focus:border-blue-500 focus:outline-none"
                                    value="{{ auth()->user()->kelas }}" readonly placeholder="kelas" readonly>
                            </div>
                            @error('kelas')
                                <div class="text-red-600 mb-4">{{ $message }}</div>
                            @enderror
                            <label for="" class="text-gray-600">Nama</label>
                            <div
                                class="block mb-4 border @error('nama') border border-red-500 @enderror border-gray-200 rounded-lg">
                                <input type="Nama" name="nama" id="Nama"
                                    class="block w-full px-4 py-3 border-2 border-transparent rounded-lg focus:border-blue-500 focus:outline-none"
                                    readonly value="{{ auth()->user()->name }}">
                            </div>
                            @error('nama')
                                <div class="text-red-600 mb-4">{{ $message }}</div>
                            @enderror
                            <label for="" class="text-gray-600">Email</label>
                            <div
                                class="block mb-4 border @error('email') border border-red-500 @enderror border-gray-200 rounded-lg">
                                <input type="email" name="email" id="email"
                                    class="block w-full px-4 py-3 border-2 border-transparent rounded-lg focus:border-blue-500 focus:outline-none"
                                    readonly value="{{ auth()->user()->email }}">
                            </div>
                            @error('email')
                                <div class="text-red-600 mb-4">{{ $message }}</div>
                            @enderror
                            <label for="" class="text-gray-600">No Telp</label>
                            <div
                                class="block mb-4 border @error('no_telp') border border-red-500 @enderror border-gray-200 rounded-lg">
                                <input type="number" name="no_telp" id="no_telp"
                                    class="block w-full px-4 py-3 border-2 border-transparent rounded-lg focus:border-blue-500 focus:outline-none"
                                    value="{{ old('no_telp') }}">
                            </div>
                            @error('no_telp')
                                <div class="text-red-600 mb-4">{{ $message }}</div>
                            @enderror
                            <label for="" class="text-gray-600">Alamat</label>
                            <div
                                class="block mb-4 border @error('alamat') border border-red-500 @enderror border-gray-200 rounded-lg">
                                <input type="alamat" name="alamat" id="alamat"
                                    class="block w-full px-4 py-3 border-2 border-transparent rounded-lg focus:border-blue-500 focus:outline-none"
                                    value="{{ old('alamat') }}">
                            </div>
                            @error('alamat')
                                <div class="text-red-600 mb-4">{{ $message }}</div>
                            @enderror
                            <label for="" class="text-gray-600">Kategori Pengaduan</label>
                            <div
                                class="block mb-4 border @error('kategori_pengaduan') border border-red-500 @enderror border-gray-200 rounded-lg">
                                <select name="kategori_pengaduan" id="kategori_pengaduan"
                                    class="block w-full px-4 py-3 border-2 border-transparent rounded-lg focus:border-blue-500 focus:outline-none">
                                    <option value=""
                                        class="block w-full px-4 py-3 border-2 border-transparent text-gray-400 rounded-lg focus:border-blue-500 focus:outline-none">
                                        ---- Silahkan Pilih Kategori Pengaduan ------</option>
                                    <option value="akademik"
                                        class="block w-full px-4 py-3 border-2 border-transparent rounded-lg focus:border-blue-500 focus:outline-none">
                                        akademik</option>
                                    <option value="fasilitas"
                                        class="block w-full px-4 py-3 border-2 border-transparent rounded-lg focus:border-blue-500 focus:outline-none">
                                        fasilitas</option>
                                    <option value="keamanan"
                                        class="block w-full px-4 py-3 border-2 border-transparent rounded-lg focus:border-blue-500 focus:outline-none">
                                        keamanan</option>
                                    <option value="lainnya"
                                        class="block w-full px-4 py-3 border-2 border-transparent rounded-lg focus:border-blue-500 focus:outline-none">
                                        lainnya</option>
                                </select>
                            </div>
                            @error('kategori_pengaduan')
                            <div class="text-red-600 mb-4">{{ $message }}</div>
                        @enderror
                            <label for="" class="text-gray-600">Jenis Pengaduan</label>
                            <div
                                class="block mb-4 border @error('jenis_pengaduan') border border-red-500 @enderror border-gray-200 rounded-lg">
                                <select name="jenis_pengaduan" id="jenis_pengaduan"
                                    class="block w-full px-4 py-3 border-2 border-transparent rounded-lg focus:border-blue-500 focus:outline-none">
                                    <option value=""
                                        class="block w-full px-4 py-3 border-2 border-transparent text-gray-400 rounded-lg focus:border-blue-500 focus:outline-none">
                                        ---- Silahkan Pilih jenis Pengaduan ------</option>
                                    <option value="pengaduan"
                                        class="block w-full px-4 py-3 border-2 border-transparent rounded-lg focus:border-blue-500 focus:outline-none">
                                        pengaduan</option>
                                    <option value="aspirasi"
                                        class="block w-full px-4 py-3 border-2 border-transparent rounded-lg focus:border-blue-500 focus:outline-none">
                                        aspirasi</option>
                                </select>
                            </div>
                            @error('jenis_pengaduan')
                                <div class="text-red-600 mb-4">{{ $message }}</div>
                            @enderror
                            <label for="" class="text-gray-600">Tanggal melapor</label>
                            <div
                                class="block mb-4 @error('tanggal_pengaduan') border border-red-500 @enderror border border-gray-200 rounded-lg">
                                <input type="date" name="tanggal_laporan" id="Nama"
                                    class="block w-full px-4 py-3 border-2 border-transparent rounded-lg focus:border-blue-500 focus:outline-none">
                            </div>
                            @error('tanggal_pengaduan')
                                <div class="text-red-600 mb-4">{{ $message }}</div>
                            @enderror
                            <label for="" class="text-gray-600">Tulis Laporan</label>
                            <div
                                class="block mb-4 @error('laporan') border border-red-500 @enderror border border-gray-200 rounded-lg">
                                <textarea name="laporan" id="" cols="30" rows="10"
                                    class="block w-full px-4 py-3 border-2 border-transparent rounded-lg focus:border-blue-500 focus:outline-none"></textarea>
                            </div>
                            @error('laporan')
                                <div class="text-red-600 mb-4">{{ $message }}</div>
                            @enderror
                                <div>
                                    <label for="berkas_pendukung" class="text-gray-600">Berkas / File Pendukung</label>
                                    <div class="block mb-4 border border-gray-200 rounded-lg">
                                        <input type="file" accept=".xls,.xlsx,.doc,.docx" name="berkas_pendukung"
                                            id="berkas_pendukung"
                                            class="block w-full px-4 py-3 border-2 border-transparent rounded-lg focus:border-blue-500 focus:outline-none">
                                    </div>
                                </div>
                            <div class="block">
                                <button type="submit"
                                    class="w-full px-3 py-4 font-medium font-semibold font-medium text-white bg-blue-600 rounded-lg">Kirim</button>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </section>
@endsection
