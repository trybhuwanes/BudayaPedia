<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>

<body class="font-poppins">
    <div class="bg-white flex flex-col pr-px">
        <div class="ml-24 flex w-[950px] max-w-full items-start justify-between gap-5 mt-9 max-md:flex-wrap">
            <div class="h-10">
                <div style="margin-top:5px; left: 100px; top: 3px; text-align: center; color: #4F0E0E; font-size: 20px; font-family: Jawa Palsu; font-weight: 400; letter-spacing: 1.50px; word-wrap: break-word">
              BudayaPedia</div>
            </div>
            <div class="flex items-start justify-between gap-5 max-md:justify-center">
                <div class="text-stone-800 text-right text-base my-auto">
                    Beranda Provinsi
                </div>
                <img loading="lazy" srcset="..."
                    class="aspect-[0.03] object-cover object-center w-px stroke-[1px] stroke-stone-600 overflow-hidden self-center max-w-full my-auto" />
                <img loading="lazy" srcset="..."
                    class="aspect-square object-cover object-center w-[45px] overflow-hidden self-stretch max-w-full" />
                <div class="text-stone-800 text-right text-base self-center my-auto">
                    Hi, Adaa
                </div>
            </div>
        </div>
        <div class="text-stone-800 text-sm font-medium ml-24 mt-9 max-md:ml-2.5">
            <span class="font-light text-red-400">Beranda</span>
            <span class="font-light text-stone-600">/ Jawa Timur /</span>
            <span class="font-medium text-stone-800">Detail Budaya</span>
        </div>
        <img loading="lazy" srcset="{{ URL('assets\img\peta-jawa-timur.png') }}"
            class="aspect-[2.38] object-cover object-center w-[952px] overflow-hidden self-center max-w-full mt-8" />
        <div class="text-stone-800 text-3xl ml-24 mt-9 max-md:ml-2.5">Jawa Timur</div>
        <div class="text-stone-600 text-sm ml-24 mt-5 max-md:ml-2.5">
            Alam Yuliyon
        </div>
        <div
            class="self-center flex w-[700px] max-w-full items-start justify-between gap-5 mt-12 px-5 max-md:flex-wrap max-md:justify-center max-md:mt-10">

            <button class="bg-transparent hover:bg-brown2-500 text-brown2-700 font-semibold hover:text-white py-2 px-4 border border-brown2-500 hover:border-transparent rounded">
                Sejarah
            </button>
            <button class="bg-transparent hover:bg-brown2-500 text-brown2-700 font-semibold hover:text-white py-2 px-4 border border-brown2-500 hover:border-transparent rounded">
                Baju Adat
            </button>
            <button class="bg-transparent hover:bg-brown2-500 text-brown2-700 font-semibold hover:text-white py-2 px-4 border border-brown2-500 hover:border-transparent rounded">
                Lagu Daerah
            </button>
            
            <button class="bg-brown2-500 hover:bg-brown2-700 text-white font-bold py-2 px-4 rounded">
                Rumah Adat
            </button>
            
            <button class="bg-transparent hover:bg-brown2-500 text-brown2-700 font-semibold hover:text-white py-2 px-4 border border-brown2-500 hover:border-transparent rounded">
                Senjata
            </button>
        </div>
        <div class="self-center max-w-full ml-24 mr-24 mt-11">
            <div class="gap-5 flex max-md:flex-col max-md:items-stretch max-md:gap-0">
                <div class="flex flex-col items-stretch w-[33%] max-md:w-full max-md:ml-0">
                    <img loading="lazy" src="{{ URL('assets\img\rumah-jawa-timur.png') }}"
                        class="aspect-[1.48] object-cover object-center w-full overflow-hidden grow max-md:mt-7" />
                </div>
                <div class="flex flex-col items-stretch w-[67%] ml-5 max-md:w-full max-md:ml-0">
                    <div class="flex flex-col my-auto max-md:max-w-full max-md:mt-9">
                        <div class="text-stone-600 text-justify text-base leading-[180%] max-md:max-w-full">
                            Lorem ipsum dolor sit amet. Est numquam aliquam qui placeat
                            molestias qui quasi voluptatem. Rem quia fugit 33 rerum numquam sed
                            eaque illo.
                        </div>
                        <div class="text-stone-600 text-justify text-base leading-[180%] mt-8 max-md:max-w-full">
                            Qui doloremque iure ut fuga doloremque est dolor molestiae quo
                            accusamus odio cum libero odit! Ea porro enim et dolor nesciunt sit
                            ullam dignissimos et perspiciatis perspiciatis cum nulla aperiam sit
                            explicabo corporis.
                            <br />
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-stone-600 text-justify text-base leading-[180%] ml-24 mr-24 mt-8 max-md:max-w-full">
            Qui doloremque iure ut fuga doloremque est dolor molestiae quo accusamus
            odio cum libero odit! Ea porro enim et dolor nesciunt sit ullam dignissimos
            et perspiciatis perspiciatis cum nulla aperiam sit explicabo corporis. Qui
            doloremque iure ut fuga doloremque est dolor molestiae quo accusamus odio
            cum libero odit! Ea porro enim et dolor nesciunt sit ullam dignissimos et
            perspiciatis perspiciatis cum nulla aperiam sit explicabo corporis.
            <br />
            Qui doloremque iure ut fuga doloremque est dolor molestiae quo accusamus
            odio cum libero odit! Ea porro enim et dolor nesciunt sit ullam dignissimos
            et perspiciatis perspiciatis cum nulla aperiam sit explicabo corporis.
            <br />
            <br />
            Qui doloremque iure ut fuga doloremque est dolor molestiae quo accusamus
            odio cum libero odit! Ea porro enim et dolor nesciunt sit ullam dignissimos
            et perspiciatis perspiciatis cum nulla aperiam sit explicabo corporis.
            <br />
        </div>
        <div class="bg-brown-300 self-stretch flex grow flex-col mt-12 pt-7 pb-10 px-5 max-md:max-w-full max-md:mt-10">
            <div class="self-center flex w-[950px] max-w-full items-start justify-between gap-5 max-md:flex-wrap">
                <div class="flex flex-col">
                    <div class="text-red-950 text-center text-2xl tracking-wider">
                        BudayaPedia
                    </div>
                    <div class="text-red-950 text-xl font-medium mt-5">
                        Jl. Sigura - gura 10,
                        <br />
                        Kel. Sumbersari, Kec. Lowokwaru,
                        <br />
                        Kota Malang
                    </div>
                </div>
                <div class="flex flex-col">
                    <div class="text-red-950 text-center text-xl font-medium">Find us:</div>
                    <div class="flex w-[212px] max-w-full items-start justify-between gap-5 mt-3 max-md:justify-center">
                        <img loading="lazy" srcset="{{ URL('assets\img\icon-twitter.svg') }}"
                            class="aspect-[1.25] object-cover object-center w-full fill-red-950 overflow-hidden flex-1 my-auto" />
                        <img loading="lazy" srcset="{{ URL('assets\img\icon-instagram.svg') }}"
                            class="aspect-[1.25] object-cover object-center w-full fill-red-950 overflow-hidden flex-1 my-auto" />
                        <img loading="lazy" srcset="{{ URL('assets\img\icon-email.svg') }}"
                            class="aspect-[1.25] object-cover object-center w-full fill-red-950 overflow-hidden flex-1 my-auto" />
                        <img loading="lazy" srcset="..."
                            class="aspect-square object-cover object-center w-full overflow-hidden flex-1" />
                    </div>
                </div>
            </div>
            <div class="text-red-950 text-center text-base font-medium self-center mt-6">
                Made with love by ADA
            </div>
        </div>
    </div>

</body>

</html>