<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    {{-- <title>{{ $pagename }}</title> --}}
    <title>Buat Kelas</title>
</head>
<body>
    <x-navbar>
      <x-slot:icon><svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-chalkboard"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M8 19h-3a2 2 0 0 1 -2 -2v-10a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v11a1 1 0 0 1 -1 1" /><path d="M11 16m0 1a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v1a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1z" /></svg></x-slot>
      Buat Kelas
    </x-navbar>
    <main class="p-3">
        <form action="create_subject" method="post">
            @csrf
            <label for="name">Nama Kelas</label>
            <input type="text" id="name" name="name" class="w-full border-b border-black" required value="{{ old('name') }}"><br>
            <label for="description">Deskripsi</label>
            <input type="text" id="description" name="description" class="w-full border-b border-black" value="{{ old('description') }}"><br>
            <div class="flex flex-col items-center">
                <input type="submit" value="Buat Kelas" class="hover:underline hover:text-gray-800">
            </div>
        </form>
    </main>
</body>
</html>