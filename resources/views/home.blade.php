<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Home-coba</title>
</head>

<body class="font-poppins">
    {{-- @auth --}}
        <h1>Dashboard</h1>
        <p class="lead">Only authenticated users can access this section.</p>
        <a class="btn btn-lg btn-primary" href="https://codeanddeploy.com" role="button">View more tutorials here &raquo;</a>
    {{-- @endauth --}}

    {{-- @guest --}}
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
                        <a href="{{ route('content.home') }}" class="block py-2 pl-3 pr-1 text-black bg-white rounded md:bg-transparent "
                            aria-current="page">Beranda</a>
                    </li>
                    <li>
                        <a href="{{ route('content.provinsi') }}"
                            class="block py-2 pl-3 pr-1 text-black rounded hover:bg-gray-100 md:hover:bg-transparent ">Provinsi</a>
                    </li>
                    <li>
                        <a href="{{ route('logout.perform') }}"
                            class="block py-2 pl-3 pr-4 text-black rounded hover:bg-gray-100 md:hover:bg-transparent ">Logout</a>
                    </li>
                    <li>
                        <div>
                            <button type="button" class="relative flex rounded-full bg-gray-800 text-sm focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800" id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                              <span class="absolute -inset-1.5"></span>
                              <span class="sr-only">Open user menu</span>
                              <img class="h-10 w-10 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                            </button>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="bg-white flex flex-col pr-px">
        <div class="self-center flex w-[952px] max-w-full flex-col mt-9 px-5">
            
            <div>
                <img loading="lazy" srcset="{{ URL('assets\img\image.png') }}"
                    class="aspect-[2.38] object-cover object-center w-[952px] overflow-hidden self-center max-w-full mt-8 rounded-lg" />
                <div
                    style="position: absolute; margin-top:250px; left: 350px; top: 3px; text-align: center; color: #FFFF; font-size: 25px; font-family: Jawa Palsu; font-weight: 400; letter-spacing: 1.50px; word-wrap: break-word">
                    Kunjungi Berbagai Budaya Nusantara
                </div>
                <button
                    class="relative text-white text-center text-base font-bold bg-brown2-500 self-center mb-0 w-[300px] max-w-full mt-3 px-10 py-2 rounded-3xl max-md:mb-2.5 max-md:px-5"
                    style="position: relative; top: -150px; left: 300px">
                    Pilih Provinsi
                </button>
            </div>
            <div class="text-stone-800 text-xl font-medium self-stretch whitespace-nowrap -mr-5 mt-9 max-md:max-w-full">
                Provinsi Populer
            </div>
            <div class="self-stretch -mr-5 mt-7 max-md:max-w-full">
                <div class="gap-5 flex max-md:flex-col max-md:items-stretch max-md:gap-0">
                    <div class="flex flex-col items-stretch w-3/12 max-md:w-full max-md:ml-0">
                        <div class="flex flex-col max-md:mt-7">
                            <img loading="lazy" srcset="{{ URL('assets\img\jawaTimur.png') }}"
                                class="aspect-[1.54] object-contain object-center w-full overflow-hidden self-stretch rounded-lg" />
                            <div class="text-stone-800 text-lg self-stretch whitespace-nowrap mt-5">
                                Jawa Timur
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-col items-stretch w-3/12 ml-5 max-md:w-full max-md:ml-0">
                        <div class="flex flex-col max-md:mt-7">
                            <img loading="lazy" srcset="{{ URL('assets\img\jawaBarat.png') }}"
                                class="aspect-[1.54] object-contain object-center w-full overflow-hidden self-stretch rounded-lg" />
                            <div class="text-stone-800 text-lg self-stretch whitespace-nowrap mt-5">
                                Jawa Barat
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-col items-stretch w-3/12 ml-5 max-md:w-full max-md:ml-0">
                        <div class="flex grow flex-col max-md:mt-7">
                            <img loading="lazy" srcset="{{ URL('assets\img\jawaTengah.png') }}"
                                class="aspect-[1.54] object-contain object-center w-full overflow-hidden self-stretch rounded-lg" />
                            <div class="text-stone-800 text-lg self-stretch whitespace-nowrap mt-5">
                                Jawa Tengah
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-col items-stretch w-3/12 ml-5 max-md:w-full max-md:ml-0">
                        <div class="flex flex-col max-md:mt-7">
                            <img loading="lazy" srcset="{{ URL('assets\img\jakarta.png') }}"
                                class="aspect-[1.54] object-contain object-center w-full overflow-hidden self-stretch rounded-lg" />
                            <div class="text-stone-800 text-lg self-stretch whitespace-nowrap mt-5">
                                DKI Jakarta
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-stone-800 text-xl font-medium self-center whitespace-nowrap mt-11 max-md:mt-10">
                More &gt;
            </div>
            <div
                class="self-center flex w-[385px] max-w-full items-start gap-2.5 mt-14 max-md:justify-center max-md:mt-10">
                <div class="text-stone-800 text-2xl font-medium">Apa itu</div>
                <div class=" text-center text-3xl tracking-widest w-[253px] self-start"
                    style="font-family: Jawa Palsu; color: #4F0E0E">
                    BudayaPedia
                </div>
                <div class="text-stone-800 text-3xl font-medium whitespace-nowrap mt-1 self-start">
                    ?
                </div>
            </div>
            <div class="text-stone-600 text-justify text-base leading-7 self-stretch -mr-5 mt-2 max-md:max-w-full">
                BudayaPedia adalah sumber informasi budaya Indonesia yang menyediakan wawasan tentang baju adat, rumah
                adat, senjata tradisional, dan lagu daerah di setiap provinsi. Situs ini bertujuan untuk mempromosikan
                dan melestarikan kekayaan budaya Indonesia, memberikan informasi mendalam tentang warisan budaya negara
                ini.
            </div>
            <div
                class="text-stone-800 text-center text-2xl font-medium self-center whitespace-nowrap mt-11 max-md:mt-10">
                Tentang Kami
            </div>
            <div class="text-stone-600 text-justify text-base leading-7 self-stretch -mr-5 mt-1.5 max-md:max-w-full">
                Tiga individu dengan pengetahuan budaya, keterampilan desain web, dan keahlian musik bekerja sama untuk
                menciptakan BudayaPedia, sebuah sumber informasi budaya Indonesia yang komprehensif.
            </div>
        </div>
        <div class="bg-brown-300 self-stretch flex grow flex-col mt-12 pt-7 pb-10 px-5 max-md:max-w-full max-md:mt-10">
            <div class="self-center flex w-[950px] max-w-full items-start justify-between gap-5 max-md:flex-wrap">
                <div class="">
                    <div class=" text-center text-2xl tracking-wider" style="font-family: Jawa Palsu; color: #4F0E0E ">
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
    {{-- @endguest --}}

</body>

</html>
