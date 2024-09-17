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
    <section class="flex justify-between mb-2 items-end">
      <h1 class="text-3xl font-bold">
        Welcome! {{ auth()->user()->name }}
      </h1>
      @if ($user->is_lecturer)
        <a href="create_subject" class="hover:underline h-full">Buat Kelas</a>
      @else
        <a class="hover:underline">Gabung Kelas</a>
      @endif
    </section>
    <section class="grid grid-cols-4 gap-2">
      @forelse ($subjects as $subject)
        <x-subject-card>
          <x-slot:name>{{ $subject->name }}</x-slot:name>
          <x-slot:lecturer>{{ $subject->lecturer->name }}</x-slot:lecturer>
        </x-subject-card>
      @empty
        
      @endforelse
    </section>
  </main>
</body>
</html>