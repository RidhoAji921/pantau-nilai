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
    <x-slot:icon><svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-layout-dashboard"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M5 4h4a1 1 0 0 1 1 1v6a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1v-6a1 1 0 0 1 1 -1" /><path d="M5 16h4a1 1 0 0 1 1 1v2a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1v-2a1 1 0 0 1 1 -1" /><path d="M15 12h4a1 1 0 0 1 1 1v6a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1v-6a1 1 0 0 1 1 -1" /><path d="M15 4h4a1 1 0 0 1 1 1v2a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1v-2a1 1 0 0 1 1 -1" /></svg></x-slot>
    Dashboard
  </x-navbar>
  <main class="px-2">
    <h1 class="text-3xl font-bold">
      Welcome! {{ $name }}
    </h1>
    <section class="grid grid-cols-4 gap-2">
      <x-subject-card>
        <x-slot:name>Matematika</x-slot:name>
        <x-slot:lecturer>Mulyono</x-slot:lecturer>
      </x-subject-card>
      <x-subject-card>
        <x-slot:name>Pemrograman</x-slot:name>
        <x-slot:lecturer>Joko</x-slot:lecturer>
      </x-subject-card>
      <x-subject-card>
        <x-slot:name>Biologi</x-slot:name>
        <x-slot:lecturer>Jack</x-slot:lecturer>
      </x-subject-card>
      <x-subject-card>
        <x-slot:name>Fisika</x-slot:name>
        <x-slot:lecturer>Niggas</x-slot:lecturer>
      </x-subject-card>
      <x-subject-card>
        <x-slot:name>Legal</x-slot:name>
        <x-slot:lecturer>Iyh</x-slot:lecturer>
      </x-subject-card>
    </section>
  </main>
</body>
</html>