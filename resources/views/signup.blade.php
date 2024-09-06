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
      <x-slot:icon><svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-key"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M16.555 3.843l3.602 3.602a2.877 2.877 0 0 1 0 4.069l-2.643 2.643a2.877 2.877 0 0 1 -4.069 0l-.301 -.301l-6.558 6.558a2 2 0 0 1 -1.239 .578l-.175 .008h-1.172a1 1 0 0 1 -.993 -.883l-.007 -.117v-1.172a2 2 0 0 1 .467 -1.284l.119 -.13l.414 -.414h2v-2h2v-2l2.144 -2.144l-.301 -.301a2.877 2.877 0 0 1 0 -4.069l2.643 -2.643a2.877 2.877 0 0 1 4.069 0z" /><path d="M15 9h.01" /></svg></x-slot>
      Signup
    </x-navbar>
    <main class="flex justify-center items-center w-full h-[100vh]">
        <div class="w-[50vw] border-2 border-black p-2">
            <form action="" method="post">
                <label for="username">Nama Anda</label><br>
                <input type="text" id="username" name="username" class="w-full border-b border-black"><br>
                <label for="username">Nama Pengguna</label><br>
                <input type="text" id="username" name="username" class="w-full border-b border-black"><br>
                <label for="email">Email</label><br>
                <input type="email" id="email" name="email" class="w-full border-b border-black"><br>
                <label for="password">Password</label><br>
                <input type="password" id="password" name="password" class="w-full border-b border-black"><br>
                <div class="flex flex-col items-center">
                    <input type="submit" value="Daftar" class="hover:underline hover:text-gray-800">
                </div>
            </form>
        </div>
    </main>
</body>
</html>