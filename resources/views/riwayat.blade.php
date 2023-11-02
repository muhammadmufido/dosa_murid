<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <div class="bg-blue-500 text-white  text-5xl font-bold py-10">
        <div class="container mx-auto text-center">
            <h1>RIWAYAT DOSA MURID</h1>
        </div>
    </div>
    <div class="mt-4 bg-white rounded-xl p-4 container text-center mx-auto">
        <div class="flex justify-center">
            <img src="{{ asset('img/spongebob.jpeg') }}" alt="luffy" class="rounded-full">
        </div>
        <div class="text-lg font-semibold mb-3">Nama : {{ $siswa->nama }}</div>
        <div class="text-lg font-semibold mb-3">NISN : {{ $siswa->nisn }}</div>
        <div class="text-lg font-semibold mb-3">Kelas : {{ $siswa->kelas->nama_kelas }}</div>
        <div class="text-lg font-semibold mb-3">Jurusan : {{ $siswa->kelas->jurusan->nama_jurusan }}</div>
        <div class="text-lg font-semibold mb-3">Alamat : {{ $siswa->alamat }}</div>
        <div class=""></div>

        <div class="relative overflow-x-auto">
            <table class="w-full text-lg text-left text-gray-700 ">
                <thead class="text-gray-900 uppercase bg-gray-50">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Kode Pelanggaran
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Nama Pelanggaran
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Keterangan
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Poin
                        </th>
                    </tr>
                </thead>
            </table>
        </div>

</body>

</html>
