<nav class="py-1 px-3 border-b-2 border-black flex justify-between">
  <div>
    <a href="/"><h1 class="font-bold">Pantau Nilai</h1></a>
  </div>
  <div class="flex">
    @auth()
      <form action="/logout" method="post">
        @csrf
        <button type="submit">logout</button>
      </form>
    @else
      @if (!request()->is('login') and !request()->is('welcome') )
        <a href="/login" class="hover:underline"><h3>login</h3></a>
      @endif
    @endauth
    <h1 class="font-bold mr-2 ml-1">{{ $slot }}</h1>
    {{ $icon }}
  </div>
</nav>