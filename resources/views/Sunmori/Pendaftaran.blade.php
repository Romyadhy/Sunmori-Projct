<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sunmori Kita</title>
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
    
<div id="Pendaftaran" class="pt-10">
    <div class="mx-auto w-9/12 flex flex-row ">
        <div class="basis-1/2">
            <div class="flex flex-col"> <!-- judul -->
                <div class="flex ">
                    <svg class="stroke-gray-400 stroke-2 h-5 w-5">
                        <line x1="0" y1="10px" x2="10px" y2="10px"/>
                    </svg>
                    <h2 class="uppercase text-xs text-white font-extralight tracking-wiswa">
							Pendaftaran
						</h2>
                </div>
                <h3 class="text-3xl text-violet-800">Keterangan Pendaftaran Anggota</h3>
            </div>
            

            <body>
            <div class="text-red-900 pt-2" style="white-space: nowrap; overflow: hidden;">
    <h2>Mohon Dibaca sebelum mendaftar. Syarat & Ketentuan Menjadi Anggota Sunmori Kita</h2><br>
</div>
<body class="bg-gray-800 text-gray-500">
    <div id="content" class="pt-2 mx-auto w-13/12">
        <div class="text-white" style="white-space: nowrap; overflow: hidden;">
            <pre>
<h2>Sudah memiliki kendaraan Motor Jenis Apapun Itu, Tidak atau Belum bergabung dengan Klub Otomotif lain untuk Kendaraan Sejenis.<br>
Mengisi Formulir Pendaftaran yang telah di siapkan secara online,
sesuai dengan Data yang terdapat dalam Kartu Tanda Penduduk Negara Republik Indonesia.<br>
Setiap Member yang telah terdaftar secara Online akan terdaftar di dalam halaman Daftar Anggota.<br>
Pendaftaran yang sudah diterima oleh system, keanggotaan masih bersifat nonaktif , 
pengaktifan keanggotaan setelah melakukan transfer ke Rekening Bendahara Sunmori Kita.<br>
Starter kit akan di kirimkan ke alamat Wilayah dan bisa di ambil dengan syarat harus kopdar biar kenalan
(jika kondisi, situasi dan jarak memungkinkan ).<br>
</h2>

STARTER KIT

Paket Pendaftaran keanggotaan Resmi yang akan didapatkan oleh calon anggota adalah sebagai berikut :

1. Baju Keanggotaan Sunmori Kita  Rp. 100.000 
2. Sticker Depan dan Sticker belakang ( ditempel di motor ) Rp. 10.000

Total Biaya Pendaftaran Rp. 110,000

Transfer ke Rekening Resmi SUNMORI KITA
BANK BRI ( Bank Rakyat Indonesia )
No Rek. : 109201024763507
Nama Rekening : Anto

KONTAK YANG BISA DI HUBUNGI
OM ANTO 082164886497

PERATURAN UMUM & TATA TERTIB KEANGGOTAAN

Mematuhi dan Menjunjung Tinggi Peraturan, 
Hukum dan Undang Undang Dasar 1945 yang berlaku di Negara Republik Indonesia.<br>
Menjunjung Tinggi Rasa Persaudaraan antar sesama Anggota tanpa membedakan Ras, Kesukuan, Agama dan lebih mengedepankan
Musyawarah Mufakat dalam setiap bentuk keputusan dari Pengurus untuk Anggota dan sebaliknya ataupun antar sesama Anggota.<br>
Tidak Tergabung dalam Komunitas Honda lain selain Sunmori Kita.<br>
Tidak melakukan Tindak Kriminal yang bersifat Pidana ataupun Perdata yang dapat 
merugikan Masyarakat dalam berbangsa dan bernegara dalam wilayah hukum Negara Republik Indonesia.<br>
Mematuhi  Setiap Aturan tertulis (AD/ART) ataupun tidak tertulis 
yang dibuat Dewan Pengurus dan diresmikan menjadi aturan yang bersifat tetap dalam Komunitas.<br>
Salam Seduluran </h2>
            </pre>
        </div>
        <!-- Lanjutkan dengan bagian HTML lainnya -->
    </div>
</body>            
                    <div>
                        <a href="{{ route('Sunmori.Form') }}">
                            <button class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                                Daftar sebagai Anggota
                            </button>
                        </a>
                    </div>                       
        </div>
    </main>
    {{-- <footer class=" text-center pt-10 pb-10 font-mono -mt-20"> <!-- footer -->
		2023 Aispriyani. All rights reserved
	</footer> --}}
    </body>
</html>