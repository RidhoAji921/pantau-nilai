<nav class="py-1 px-3 border-b-2 border-black flex justify-between">
    <div>
      <a href="/"><h1 class="font-bold">Pantau Nilai</h1></a>
    </div>
    <div class="flex">
      @if (!request()->is('login'))
        <a href="/login" class="hover:underline"><h3>login</h3></a>
      @endif
      <h1 class="font-bold mr-2 ml-1">{{ $slot }}</h1>
      {{ $icon }}
    </div>
  </nav>