<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-800 text-gray-500">
    <header class="z-10 sticky top-0 bg-gray-950 py-5"> <!-- header -->
        <nav class="w-9/12 flex flex-row mx-auto">
            <div class="uppercase text-lg basis-1/4"> <!-- logo -->
                <a href="#hero">
                    <span class="font-extrabold text-white">Sunmori</span>
                    <span class="font-extrabold text-red-800">Kita</span>
                </a>
            </div>
            <div class="basis-1/2 flex items-baseline justify-evenly text-white"> <!-- Link -->
                <a href="{{ route('Sunmori.Home') }}"><span>Home</span></a>
                <a href="{{ route('Sunmori.Anggota') }}"><span>Anggota</span></a>
                <a href="{{ route('Sunmori.Pendaftaran') }}"><span>Pendaftaran</span></a>
            </div>
        </nav>
    </header>

    <div class="mx-auto w-9/12 mt-6 flex flex-row items-center">
        <div class="basis-1/3">
            <div class="flex flex-col">
                <div class="flex items-center">
                    <svg class="stroke-gray-500 stroke-2 h-5 w-5">
                        <line x1="0" y1="10px" x2="10px" y2="10px"/>
                    </svg>
                    <h2 class="uppercase text-xs text-white font-extralight tracking-wiswa">
                        Anggota
                    </h2>
                </div>
                <h3 class="text-3xl text-violet-900">Daftar Anggota</h3>
            </div>
            <div class="mx-auto w-9/12 mt-6 flex flex-row items-center justify-center">
                <div class="text-white">
                    <table class="min-w-full bg-grey-900 border border-white">
                        <thead>
                            <tr>
                                <th class="border border-white px-3 py-1/2">Foto</th>
                                <th class="border border-white px-10 py-1/2">Nama</th>
                                <th class="border border-white px-10 py-1/2">Alamat</th>
                                <th class="border border-white px-10 py-1/2">NomorTelepon</th>
                                <th class="border border-white px-10 py-1/2">Aksi</th>
                            </tr>
                        </thead>   
                        <tbody>
                            @foreach ($anggotas as $anggota)
                                <tr>
                                    <td class="border border-white px-3 py-1/2">
                                        <img src="{{ asset($anggota->photo) }}" alt="Foto" class="w-30 h-30 object-cover" />
                                    </td>
                                    <td class="border border-white px-10 py-1/2">{{ $anggota->name }}</td>
                                    <td class="border border-white px-10 py-1/2">{{ $anggota->address }}</td>
                                    <td class="border border-white px-10 py-1/2">{{ $anggota->phone }}</td>
                                    <td class="border border-white px-10 py-1/2">
                                        <!-- Tombol "Terima" hanya ditampilkan jika belum disetujui oleh admin -->
                                        @if (!$anggota->is_approved)
                                            <!-- Form untuk menerima anggota -->
                                            <form action="{{ route('approve.member', $anggota->id) }}" method="POST">
                                                @csrf
                                                <button type="submit" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">Terima</button>
                                            </form>
                                        @endif
                                        <!-- Form untuk menolak anggota -->
                                        <form action="{{ route('reject.member', $anggota->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Tolak</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
