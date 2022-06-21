<!doctype html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="./assets/css/style.css" rel="stylesheet">
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            puff: '#FDDCC3',
            champ: '#F4CF88',
            atomic: '#F69358',
            kobe: '#843412',
            mandarin: '#DB7745',
            xike: '#111125',
          }
        }
      }
    }
  </script>
</head>

<body>

  <main>
    <div class="hero flex relative z-20 items-center overflow-hidden">
      <div class="container mx-auto px-6 flex relative">
        <div class="sm:w-2/3 lg:w-2/5 flex flex-col relative z-20">
          <!-- <h1 class="text-center text-9xl font-bold flex flex-col text-transparent bg-clip-text bg-gradient-to-r from-yellow-400 to-orange-600">
            <span class="text-5xl sm:text-6xl">
              Tríade
            </span>
            <span class="text-5xl sm:text-6xl">
              do
            </span>
            Poder
          </h1> -->
          <img src="./assets/img/triade-do-poder.png" />
          <div>
            <form action="send-email.php" method="POST">
              <div class="flex items-center text-lg mb-3 md:mb-4">
                <input type="text" id="name" name="name" class="placeholder-mandarin bg-puff pl-4 py-2 rounded-xl focus:outline-none w-full" placeholder="Insira seu nome" required />
              </div>
              <div class="flex items-center text-lg mb-3 md:mb-8">
                <input type="email" id="email" name="email" class="placeholder-mandarin bg-puff pl-4 py-2 rounded-xl focus:outline-none w-full" placeholder="Seu melhor email" required />
              </div>
              <button type="submit" class="bg-gradient-to-r from-champ to-atomic font-medium p-2 rounded-xl md:p-3 text-kobe uppercase w-full">QUERO ME INSCREVER AGORA</button>
            </form>
          </div>
          <div class="md:hidden sm:block">
            <img src="./assets/img/foto1.png" class="w-full" />
          </div>
        </div>
        <div class="hidden sm:block sm:w-1/3 lg:w-3/5 relative">
          <img src="./assets/img/foto1.png" class="w-full" />
        </div>
      </div>
    </div>
    <div class="hero2 items-center">
      <div class="pt-16 ml-auto px-6 lg:w-4/6">
        <h1 class="text-justify md:text-4xl text-2xl font-semibold text-puff md:mr-32 pb-3">Você gostaria de aumentar o seu faturamento com estratégias simples e validadas?</h1>
        <p class="text-white pb-3 font-semibold">No evento a Triade do Sucesso, você vai aprender comigo, t udo que é necessário para você se tornumar uma referência no que faz e conquistar os resultados que merece.</p>
        <p class="text-white pb-3 font-semibold">Será um evento online e gratuito no dia 04 de julho ás 21:00h, onde euvou revelar tudo o que eu fiz para multiplicar meu faturamento em 10 vezes, melhor minha estratégia e posicionamento.</p>
        <p class="text-white pb-3 font-semibold">Eu vou entregar de graça o que normalmente profissionais da área entregam em cursos de mais de mil reais, e você não pode ficar de fora!</p>
      </div>
      <div class="container ml-auto px-6 lg:w-4/6">
        <form class="lg:w-1/2" action="send-email2.php" method="POST">
          <div class="flex items-center text-lg mb-3">
            <input type="email" id="email" name="email" class="placeholder-mandarin bg-puff pl-4 py-2 rounded-xl focus:outline-none w-full" placeholder="Seu melhor email" required />
          </div>
          <button type="submit" class="bg-gradient-to-r from-champ to-atomic font-medium p-2 rounded-xl mb-4 md:p-3 text-kobe uppercase w-full">QUERO ME INSCREVER AGORA</button>
        </form>
      </div>
    </div>
    <img src="./assets/img/Landing-page_03.gif" class="w-full" />
    <div class="md:p-12 bg-xike">
      <div class="flex w-full bg-gradient-to-r from-champ to-atomic rounded-xl p-8">
        <div class="w-1/2">
          <h1 class="text-center md:text-3xl font-semibold text-kobe">SE INSCREVA AGORA E NÃO PERCA NADA!</h1>
          <h1 class="text-center md:text-6xl font-semibold text-kobe">SEG 04 JUL 21:00H</h1>
        </div>
        <form class="w-1/2" action="send-email2.php" method="POST">
          <div class="flex items-center text-lg mb-3">
            <input type="email" id="email" name="email" class="placeholder-mandarin bg-puff pl-4 py-2 rounded-xl focus:outline-none w-full" placeholder="Seu melhor email" required />
          </div>
          <button type="submit" class="bg-gradient-to-r from-champ to-atomic font-medium p-2 rounded-xl mb-4 md:p-3 text-kobe uppercase w-full">QUERO ME INSCREVER AGORA</button>
        </form>
      </div>
    </div>
  </main>
</body>

</html>