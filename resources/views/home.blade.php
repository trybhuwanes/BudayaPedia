<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Beranda</title>
</head>

<body class="font-poppins">
    {{-- NAVIGATION BAR  --}}
    <nav class="bg-white fixed w-full z-20 top-0 left-0 border-b border-gray-200">
        <div class="flex flex-wrap justify-between p-3 ml-9">
            <a href="{{ route('content.home') }}">
                <div class="h-10">
                    <div
                        style="margin-top:10px; left: 100px; top: 3px; text-align: center; color: #4F0E0E; font-size: 20px; font-family: Jawa Palsu; font-weight: 400; letter-spacing: 1.50px; word-wrap: break-word">
                        BudayaPedia</div>
                </div>
            </a>
            <div class="items-center hidden w-full md:flex md:w-auto mr-9" id="navbar-sticky">
                <ul
                    class="flex flex-col p-4 md:p-0 mt-4 font-medium border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 md:mt-0 md:border-0 md:bg-white ">
                    <li>
                        <a href="{{ route('content.home') }}"
                            class="block py-2 pl-3 pr-1 text-black bg-white rounded md:bg-transparent "
                            aria-current="page">Beranda</a>
                    </li>
                    <li>
                        <a href="{{ route('content.provinsi') }}"
                            class="block py-2 pl-3 pr-1 text-black rounded hover:bg-gray-100 md:hover:bg-transparent ">Provinsi</a>
                    </li>
                    <li>
                        <a href="{{ route('logout.perform') }}"
                            class="block py-2 pl-3 pr-3 text-black rounded hover:bg-red-500 md:hover:bg-red-500">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    {{-- MAIN CONTENT  --}}
    <main>
        <div class="bg-white flex flex-col pr-px">
            <div class="self-center flex w-full max-w-full flex-col mt-9 px-16">
                {{-- HERO EMAGE  --}}
                <div class="w-full h-full">
                    <img loading="lazy" srcset="{{ URL('assets\img\image.png') }}"
                        class="object-cover object-center w-full h-full overflow-hidden self-center max-w-full mt-8 rounded-lg" />
                    <div
                        style="position: absolute; left:50%; top: 40%; transform: translate(-50%, -50%); text-align: center; color: #FFFF; font-size: 25px; font-family: Jawa Palsu; font-weight: 400; letter-spacing: 1.50px; word-wrap: break-word">
                        Kunjungi Berbagai Budaya Nusantara
                    </div>
                    <a href="/provinsi">
                        <button
                        class="relative text-white text-center text-lg font-medium bg-brown2-500 self-center mb-0 w-[300px] max-w-full mt-3 px-10 py-2 rounded-3xl max-md:mb-2.5 max-md:px-5"
                        style="position: absolute; left:50%; top: 45%; transform: translate(-50%, -50%);">
                        Pilih Provinsi
                    </button>
                    </a>
                </div>

                {{-- PROVINSI POPULER  --}}
                <div class="text-black text-xl font-bold self-stretch whitespace-nowrap -mr-5 mt-9 max-md:max-w-full">
                    Provinsi Populer
                </div>
                <div class="self-stretch max-md:max-w-full">
                    <div class="grid grid-cols-4 gap-6 rounded-lg">
                        @foreach($content as $content)
                        <div>
                            <!-- Article -->
                            <article class="overflow-hidden rounded-lg shadow-2xl">
                
                                <a href="{{ route('content.detail', $content->id) }}">
                                    <img alt="{{ $content->pict_sejarah }}" class="block h-40 object-cover w-full" src="{{ URL('assets\img\$content->pict_sejarah') }}">
                                </a>
                
                                <header class="flex items-center justify-between leading-tight p-2 md:p-4">
                                    <h1 class="text-lg">
                                        <a class="no-underline hover:underline text-black" href="{{ route('content.detail', $content->id) }}">
                                            {{ $content->nama_prov }}
                                        </a>
                                    </h1>
                                </header>
                            </article>
                            <!-- END Article -->
                        </div>
                        @endforeach
        
                    </div>
                </div>
                <div class="text-stone-800 text-lg self-center whitespace-nowrap mt-11 max-md:mt-10 hover:text-blue-600">
                    <a href="/provinsi">
                        More &gt;
                    </a>
                </div>

                {{-- APA ITU BUDAYAPEDIA  --}}
                <div
                    class="self-center flex max-w-full items-start gap-2.5 mt-14 max-md:justify-center max-md:mt-10">
                    <div class="text-stone-800 text-2xl font-medium">Apa itu</div>
                    <div class=" text-center text-3xl tracking-widest self-start"
                        style="font-family: Jawa Palsu; color: #4F0E0E">
                        BudayaPedia
                    </div>
                    <div class="text-stone-800 text-3xl font-medium whitespace-nowrap mt-1 self-start">
                        ?
                    </div>
                </div>
                <div class="text-stone-600 text-justify text-base leading-7 self-stretch mt-2 max-md:max-w-full">
                    BudayaPedia adalah sumber informasi budaya Indonesia yang menyediakan wawasan tentang baju adat, rumah
                    adat, senjata tradisional, dan lagu daerah di setiap provinsi. Situs ini bertujuan untuk mempromosikan
                    dan melestarikan kekayaan budaya Indonesia, memberikan informasi mendalam tentang warisan budaya negara
                    ini.
                </div>

                {{-- TENTANG KAMI  --}}
                <div
                    class="text-stone-800 text-center text-2xl font-medium self-center whitespace-nowrap mt-11 max-md:mt-10">
                    Tentang Kami
                </div>
                <div class="text-stone-600 text-justify text-base leading-7 self-stretch mb-20 mt-1.5 max-md:max-w-full">
                    Tiga individu dengan pengetahuan budaya, keterampilan desain web, dan keahlian musik bekerja sama untuk
                    menciptakan BudayaPedia, sebuah sumber informasi budaya Indonesia yang komprehensif.
                </div>
            </div>
        </div>
    </main>

    {{-- FOOTER  --}}
    <footer>
        <div class="bg-brown-50 flex-col pt-7 pb-10">
            <div class="self-center flex max-w-full items-start justify-between gap-5 max-md:flex-wrap">
                <div class="flex flex-col">
                    <div
                        style="margin-left:112px; margin-top:10px; top: 3px; text-align: left; color: #4F0E0E; font-size: 24px; font-family: Jawa Palsu; font-weight: 400; letter-spacing: 1.50px; word-wrap: break-word">
                        BudayaPedia
                    </div>
                    <div class="text-red-950 ml-28 text-lg font-medium mt-5">
                        Jl. Sigura - gura 10,
                        <br />
                        Kel. Sumbersari, Kec. Lowokwaru,
                        <br />
                        Kota Malang
                    </div>
                </div>

                <div class="flex flex-col mr-28">
                    <div class="text-red-950 text-center text-lg font-medium">Find us:</div>
                    <div class="flex w-[150px] max-w-full items-end justify-between gap-5 mt-3 max-md:justify-center">
                        <img loading="lazy" srcset="{{ URL('assets\img\icon-twitter.svg') }}"
                            class="aspect-[1.25] object-cover object-center w-full fill-red-950 overflow-hidden flex-1 my-auto" />
                        <img loading="lazy" srcset="{{ URL('assets\img\icon-instagram.svg') }}"
                            class="aspect-[1.25] object-cover object-center w-full fill-red-950 overflow-hidden flex-1 my-auto" />
                        <img loading="lazy" srcset="{{ URL('assets\img\icon-email.svg') }}"
                            class="aspect-[1.25] object-cover object-center w-full fill-red-950 overflow-hidden flex-1 my-auto" />
                    </div>
                </div>
            </div>
            <div class="text-red-950 text-center text-base font-medium self-center mt-6">
                Made with love by ADA
            </div>
        </div>
    </footer>

</body>

</html>
