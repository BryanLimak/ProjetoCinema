<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="/node_modules/flowbite/dist/flowbite.js"></script>
    <link rel="stylesheet" href="style.css">
    <title>Cinema</title>
</head>

<body class="bg-[#141414]">
    <div class="w-[40%] h-[500px] bg-yellow-600 absolute left-1/2 -translate-x-1/2 top-1/2 -translate-y-1/2 hidden">
        <div class="m-auto w-1/3 bg-green-500 h-[30%] mt-20">
        </div>
        <h1 class="text-center text-[30px] text-white mb-[15px]">Selecione o seu cinema preferido e aproveite:</h1>
        <select id="countries" class="bg-[#1c1c1c] border border-white text-white text-sm rounded-lg block w-[40%] p-2.5">
            <option selected>Choose a country</option>
            <option value="US">United States</option>
            <option value="CA">Canada</option>
            <option value="FR">France</option>
            <option value="DE">Germany</option>
        </select>
    </div>
    <?php include('header.php') ?>
    <section class="m-10">
        <div class="carrousel ">
            <div id="indicators-carousel" class="relative w-full" data-carousel="static">
                <!-- Carousel wrapper -->
                <div class="relative overflow-hidden rounded-lg h-[700px]">
                    <!-- Item 1 -->
                    <div class="hidden duration-700 ease-in-out h-[700px] img-teste img-1" data-carousel-item="active">
                    </div>
                    <!-- Item 2 -->
                    <div class="hidden duration-700 ease-in-out img-2" data-carousel-item>
                    </div>
                    <!-- Item 3 -->
                    <div class="hidden duration-700 ease-in-out img-3" data-carousel-item>
                    </div>
                    <!-- Item 4 -->
                    <div class="hidden duration-700 ease-in-out img-4" data-carousel-item> 
                    </div>
                </div>
                <!-- Slider indicators -->
                <div class="absolute z-30 flex -translate-x-1/2 space-x-3 rtl:space-x-reverse bottom-5 left-1/2">
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4" data-carousel-slide-to="3"></button>
                </div>
                <!-- Slider controls -->
                <button type="button" class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
                    <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                        <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4" />
                        </svg>
                    </span>
                </button>
                <button type="button" class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
                    <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                        <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
                        </svg>
                    </span>
                </button>
            </div>
        </div>
        <div class="w-full h-[100px] bg-[#343C46] my-10 rounded-xl grid grid-cols-7 items-center justify-center text-2xl font-semibold text-[#ADB6BA]">
            <div class="w-full text-white">
                <p class="flex justify-center">02/03</p>
                <p class="flex justify-center">Hoje</p>
            </div>
            <div class="w-full">
                <p class="flex justify-center">02/03</p>
                <p class="flex justify-center">Ter</p>
            </div>
            <div class="w-full">
                <p class="flex justify-center">02/03</p>
                <p class="flex justify-center">Qua</p>
            </div>
            <div class="w-full">
                <p class="flex justify-center">02/03</p>
                <p class="flex justify-center">Qui</p>
            </div>
            <div class="w-full">
                <p class="flex justify-center">02/03</p>
                <p class="flex justify-center">Sex</p>
            </div>
            <div class="w-full">
                <p class="flex justify-center">02/03</p>
                <p class="flex justify-center">Sab</p>
            </div>
            <div class="w-full">
                <p class="flex justify-center">02/03</p>
                <p class="flex justify-center">Dom</p>
            </div>
        </div>

        <div class="w-full grid grid-cols-4 gap-5">
            <div class=" h-[600px] bg-red-300 rounded-md bannerFilme1">

            </div>
            <div class="col-span-3 bg-[#353535] rounded-md p-7 text-[#B3B3B3]">
                <h1 class="text-4xl ">Homem-Aranha: Sem Volta para Casa</h1>
                <div class="w-[60%] bg-[#494848] mt-7 px-4 rounded-md h-[60px] grid grid-cols-5 items-center">
                    <div class="font-bold text-md">
                        <div class="flex justify-center">DUBLADO</div>
                        <div class="flex justify-center">Sala 1</div>
                    </div>
                    <div class="flex justify-center font-semibold">
                        <div class="border-[#B3B3B3] border rounded-md w-[90%] h-9 items-center flex justify-center">14:30</div> 
                    </div>
                    <div class="flex justify-center font-semibold">
                        <div class="border-[#B3B3B3] border rounded-md w-[90%] h-9 items-center flex justify-center">14:30</div> 
                    </div>
                    <div class="flex justify-center font-semibold">
                        <div class="border-[#B3B3B3] border rounded-md w-[90%] h-9 items-center flex justify-center">14:30</div> 
                    </div>
                    <div class="flex justify-center font-semibold">
                        <div class="border-[#B3B3B3] border rounded-md w-[90%] h-9 items-center flex justify-center">14:30</div> 
                    </div>
                </div>
                <div class="w-[60%] bg-[#494848] mt-3 px-4 rounded-md h-[60px] grid grid-cols-5 items-center">
                    <div class="font-bold text-md">
                        <div class="flex justify-center">DUBLADO</div>
                        <div class="flex justify-center">Sala 1</div>
                    </div>
                    <div class="flex justify-center font-semibold">
                        <div class="border-[#B3B3B3] border rounded-md w-[90%] h-9 items-center flex justify-center">14:30</div> 
                    </div>
                    <div class="flex justify-center font-semibold">
                        <div class="border-[#B3B3B3] border rounded-md w-[90%] h-9 items-center flex justify-center">14:30</div> 
                    </div>
                    <div class="flex justify-center font-semibold">
                        <div class="border-[#B3B3B3] border rounded-md w-[90%] h-9 items-center flex justify-center">14:30</div> 
                    </div>
                    <div class="flex justify-center font-semibold">
                        <div class="border-[#B3B3B3] border rounded-md w-[90%] h-9 items-center flex justify-center">14:30</div> 
                    </div>
                    
                </div>
                <div class="w-[60%] bg-[#494848] mt-3 px-4 rounded-md h-[60px] grid grid-cols-5 items-center">
                    <div class="font-bold text-md">
                        <div class="flex justify-center">DUBLADO</div>
                        <div class="flex justify-center">Sala 1</div>
                    </div>
                    <div class="flex justify-center font-semibold">
                        <div class="border-[#B3B3B3] border rounded-md w-[90%] h-9 items-center flex justify-center">14:30</div> 
                    </div>
                    <div class="flex justify-center font-semibold">
                        <div class="border-[#B3B3B3] border rounded-md w-[90%] h-9 items-center flex justify-center">14:30</div> 
                    </div>
                    <div class="flex justify-center font-semibold">
                        <div class="border-[#B3B3B3] border rounded-md w-[90%] h-9 items-center flex justify-center">14:30</div> 
                    </div>
                    <div class="flex justify-center font-semibold">
                        <div class="border-[#B3B3B3] border rounded-md w-[90%] h-9 items-center flex justify-center">14:30</div> 
                    </div>
                </div>
                <p class="w-full pt-7 text-2xl">
                Homem-Aranha: Sem Volta para Casa" também é uma das opções de filmes em cartaz na Semana do Cinema. Apesar de já ter passado nos cinemas no final do ano passado, o longa voltou agora para as telonas, dessa vez com uma versão estendida. Assim, se você é fã de filmes de super-heróis, mas não conseguiu assistir a essa produção incrível quando ela estreou, essa pode ser a sua chance!
                </p>
            </div>


        </div>


        <div class="h-[1000px]"></div>
    </section>
</body>

</html>