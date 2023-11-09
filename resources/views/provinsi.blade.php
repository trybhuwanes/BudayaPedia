<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> @vite('resources/css/app.css')
    <title>Provinsi</title>
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
                        <a href="{{ route('content.home') }}" class="block py-2 pl-3 pr-1 text-black bg-white rounded md:bg-transparent "
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
        <div class= "my-12 mx-auto px-4 md:px-12 mt-28">
            <div class="grid grid-cols-4 gap-4 mx-5">
                @foreach($content as $content)
                <div>
                    <!-- Article -->
                    <article class="overflow-hidden rounded-lg shadow-xl">
        
                        <a href="{{ route('content.detail', $content->id) }}">
                            <img alt="{{ $content->pict_sejarah }}" class="block h-40 object-cover w-full" src="{{ $content->pict_sejarh }}">
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