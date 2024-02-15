<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Sunmori Kita</title>
	<script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-900 text-white">
	<header class="z-10 sticky top-0 bg-black py-5"> <!-- header -->
		<nav class="w-9/12 flex flex-row mx-auto">
			<div class="uppercase text-lg basis-1/4"> <!-- logo -->
				<a href="#hero">
					<span class="font-extrabold text-white">Sunmori</span>
					<span class="font-extrabold text-red-900">Kita</span>
				</a>
			</div>
			<div class="basis-1/2 flex items-baseline justify-evenly"> <!-- Link -->
				<a href="#Home"><span>Home</span></a>
				<a href="{{ route('Sunmori.Anggota') }}"><span>Anggota</span></a>
				<a href="{{ route('Sunmori.Pendaftaran') }}"><span>Pendaftaran</span></a>
				<a href="{{ route('login') }}"><span>Login Admin</span></a>
				<a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
					Logout
				</a>
				<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
					@csrf
				</form>

			</div>
			<div class="basis-1/4 flex justify-end"> <!-- dark mode -->
				<!-- dark mode -->
				<span class="hidden dark:inline end:0"><svg viewBox="0 0 24 24" fill="none" class="w-6 h-6">
						<path fill-rule="evenodd" clip-rule="evenodd" d="M17.715 15.15A6.5 6.5 0 0 1 9 6.035C6.106 6.922 4 9.645 4 12.867c0 3.94 3.153 7.136 7.042 7.136 3.101 0 5.734-2.032 6.673-4.853Z" class="fill-sky-400/20"></path>
						<path d="m17.715 15.15.95.316a1 1 0 0 0-1.445-1.185l.495.869ZM9 6.035l.846.534a1 1 0 0 0-1.14-1.49L9 6.035Zm8.221 8.246a5.47 5.47 0 0 1-2.72.718v2a7.47 7.47 0 0 0 3.71-.98l-.99-1.738Zm-2.72.718A5.5 5.5 0 0 1 9 9.5H7a7.5 7.5 0 0 0 7.5 7.5v-2ZM9 9.5c0-1.079.31-2.082.845-2.93L8.153 5.5A7.47 7.47 0 0 0 7 9.5h2Zm-4 3.368C5 10.089 6.815 7.75 9.292 6.99L8.706 5.08C5.397 6.094 3 9.201 3 12.867h2Zm6.042 6.136C7.718 19.003 5 16.268 5 12.867H3c0 4.48 3.588 8.136 8.042 8.136v-2Zm5.725-4.17c-.81 2.433-3.074 4.17-5.725 4.17v2c3.552 0 6.553-2.327 7.622-5.537l-1.897-.632Z" class="fill-sky-500"></path>
						<path fill-rule="evenodd" clip-rule="evenodd" d="M17 3a1 1 0 0 1 1 1 2 2 0 0 0 2 2 1 1 0 1 1 0 2 2 2 0 0 0-2 2 1 1 0 1 1-2 0 2 2 0 0 0-2-2 1 1 0 1 1 0-2 2 2 0 0 0 2-2 1 1 0 0 1 1-1Z" class="fill-sky-500"></path>
					</svg></span>
			</div>
		</nav>
	</header>

	<main id="hero" class="relative -top-20"> <!-- Main Content -->
		<div class="bg-white-950 "> <!-- Hero Section-->
			<div class="mx-auto flex h-screen items-center w-9/12 ">
				<div class="basis-1/2"> <!-- deskripsi -->
					<div class="flex items-center">
						<svg class="stroke-white-400 stroke-2 h-5 w-5">
							<line x1="0" y1="10px" x2="10px" y2="10px" />
						</svg>
						<h2 class="uppercase text-xs font-extralight tracking-wiswa">
							- Tentang Kami
						</h2>
					</div>
					<h3 class="font-bold text-4xl text-white">
						<span>SUNMORI</span>
						<span class="text-red-800">KITA</span>
					</h3>
					<p class="font-light">
						Kami adalah Komunitas Motor yang bernama SUNMORI KITA.</br></br>
						|| SUNMORI KITA didirikan bukan untuk menyaingi beberapa Komunitas yang sejenis yang sudah berdiri sebelumnya.</br></br>
						|| SUNMORI KITA dibentuk untuk menampung aspirasi pengguna sepeda motor roda dua yang menginginkan sebuah komunitas dengan keadaan santai serta penuh dengan semangat persaudaraan yang baik, yang tidak terbebani oleh aturan - aturan yang dapat mengganggu aktifitas Anggotanya.</br></br>
						|| SUNMORI KITA didirikan agar menjadi pelopor taat aturan dalam berkendara.</br></br>

				</div> <!-- avatar -->
				<div class=" py-4 px-5 basis-1/2" style="margin-left: 120px;">
					<img src="{{ asset('img/Sunmor.png') }}" alt="Deskripsi Gambar">
				</div>

			</div>
		</div>
		<div id="Home" class="bg- pt-20 pb-20"> <!-- services -->
			<div class="w-9/12 mx-auto">
				<div class="flex flex-col place-items mb-4"> <!-- judul -->
					<div>
						<div class="flex items-center">
							<svg class="stroke-gray-400 stroke-2 h-5 w-5">
								<line x1="0" y1="10px" x2="10px" y2="10px" />
							</svg>
							<h2 class="uppercase text-xs font-extralight tracking-wiswa">
								Home
							</h2>
						</div>
						<h3 class="text-3xl text-violet-900">Kegiatan</h3>
					</div>
				</div>

				<div class="grid grid-cols-3 gap-10 py-"> <!-- cards -->
					<div class="rounded-lg bg-red-500 shadow-lg">
						<div class="flex flex-col items-center py-10 px-10">
							<h4 class="text-black mt-5">
								Sunmori
							</h4>
							<div class="basis-1/2 flex flex-col items-center">
								<div class="basis-1/2">
									<img class="mx-auto mt-10" src="img/sunmor (2).jpeg" alt="WISWA" style="max-width: 95%; max-height: 95%; border-radius: 50%;">
								</div>
							</div>
						</div>
					</div>
					<div class="rounded-lg bg-red-500 shadow-lg">
						<div class="flex flex-col items-center py-10 px-10">
							<h4 class="text-black mt-5">
								Futsal
							</h4>
							<div class="basis-1/2">
								<img class="mx-auto mt-10" src="img/futsal.jpeg" alt="WISWA" style="max-width: 95%; max-height: 95%; border-radius: 50%;">
							</div>
						</div>
					</div>
					<div class="rounded-lg bg-red-500 shadow-lg">
						<div class="flex flex-col items-center py-10 px-10">
							<h4 class="text-black mt-5">
								Anniversary
							</h4>
							<div class="basis-1/2">
								<img class="mx-auto mt-10" src="img/anniv.jpeg" alt="WISWA" style="max-width: 95%; max-height: 95%; border-radius: 50%;">
							</div>
						</div>
					</div>
				</div>
			</div>
	</main>
	<footer class=" text-center pt-10 pb-10 font-mono -mt-20"> <!-- footer -->
		2023 Aispriyani. All rights reserved
	</footer>
</body>

</html>