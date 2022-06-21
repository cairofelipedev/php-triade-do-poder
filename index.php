<!doctype html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="./assets/css/style.css" rel="stylesheet">
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>

  <main class="relative overflow-hidden h-screen">
    <div class="hero flex relative z-20 items-center overflow-hidden">
      <div class="container mx-auto px-6 flex relative py-16">
        <div class="sm:w-2/3 lg:w-2/5 flex flex-col relative z-20">
          <div class="md:hidden sm:block">
            <img src="./assets/img/foto1.png" class="w-full" />
          </div>
          <!-- <h1 class="text-center text-9xl font-bold flex flex-col text-transparent bg-clip-text bg-gradient-to-r from-yellow-400 to-orange-600">
            <span class="text-5xl sm:text-6xl">
              Tríade
            </span>
            <span class="text-5xl sm:text-6xl">
              do
            </span>
            Poder
          </h1> -->
          <img src="./assets/img/triade-do-poder.png" class="w-full" />
          <div class="mt-8">
            <form class="p-12">
              <div class="flex items-center text-lg mb-6 md:mb-8">
                <input type="text" id="username" class="bg-gray-200 pl-4 py-2 md:py-4 focus:outline-none w-full" placeholder="Username" />
              </div>
              <div class="flex items-center text-lg mb-6 md:mb-8">
                <input type="password" id="password" class="bg-gray-200 pl-4 py-2 md:py-4 focus:outline-none w-full" placeholder="Password" />
              </div>
              <button class="bg-gradient-to-b from-gray-700 to-gray-900 font-medium p-2 md:p-4 text-white uppercase w-full">Login</button>
            </form>
          </div>
        </div>
        <div class="hidden sm:block sm:w-1/3 lg:w-3/5 relative">
          <img src="./assets/img/foto1.png" class="w-full" />
        </div>
      </div>
    </div>
  </main>
</body>

</html>