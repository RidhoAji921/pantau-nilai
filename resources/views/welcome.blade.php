<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
  {{-- <title>{{ $pagename }}</title> --}}
  <title>Dashboard</title>
</head>
<body>
  <x-navbar>
    <x-slot:icon><svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-home"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M5 12l-2 0l9 -9l9 9l-2 0" /><path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7" /><path d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6" /></svg></x-slot>
    Welcome
  </x-navbar>
  <main class="flex flex-col justify-center items-center">
    <div class="p-2 flex flex-col items-center">
      <h1 class="text-3xl font-bold">Welcome to Pantau Nilai</h1>
      <a href="/login"><h3 class="hover:underline">Login</h3></a>
      <h3>Atau daftar <a href="/signup" class="hover:underline">di sini</a></h3>
      <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Perspiciatis quis dignissimos perferendis! Non, pariatur nesciunt quis ut vero a ducimus aliquid laborum, assumenda autem est facere iste porro consequuntur reprehenderit!</p>
    </div>
  </main>
</body>
</html>