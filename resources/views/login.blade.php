<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
  <title>Login</title>
</head>
<body>
    <x-navbar>
      <x-slot:icon><svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-login"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M15 8v-2a2 2 0 0 0 -2 -2h-7a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h7a2 2 0 0 0 2 -2v-2" /><path d="M21 12h-13l3 -3" /><path d="M11 15l-3 -3" /></svg></x-slot>
      Login
    </x-navbar>
    <main class="flex justify-center items-center w-full h-[100vh]">
        <div class="w-[50vw] border-2 border-black p-2">
            <form action="" method="post">
                <label for="username">Nama Pengguna</label><br>
                <input type="text" id="username" name="username" class="w-full border-b border-black"><br>
                <label for="password">Password</label><br>
                <input type="password" id="password" name="password" class="w-full border-b border-black"><br>
                <div class="flex flex-col items-center">
                    <input type="submit" value="Login" class="hover:underline hover:text-gray-800">
                    <p>Belum punya akun? <a href="/signup" class="hover:underline hover:text-gray-800">daftar di sini</a></p>
                </div>
            </form>
        </div>
    </main>
</body>
</html>