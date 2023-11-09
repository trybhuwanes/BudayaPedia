<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <title>Detail Provinsi {{ $content->nama_prov }}</title>
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
        <div class="bg-white flex flex-col mt-12">

            <div class="text-stone-800 text-sm font-medium ml-24 mt-12 max-md:ml-2.5">
                <a href="/">
                    <span class="font-light text-red-400">Beranda</span>
                </a>
                <a href="{{ route('content.provinsi') }}">
                    <span class="font-light text-stone-600">/ Provinsi /</span>
                </a>
                <span class="font-medium text-stone-800">{{ $content->nama_prov }} </span>
            </div>
            <div class="text-stone-800 font-bold text-3xl ml-24 mt-6 max-md:ml-2.5">{{ $content->nama_prov }}</div>
            
            <div
                class="flex flex-col items-center w-full max-w-full px-3 mb-6 sm:flex-none xl:mb-0 bg-white pb-20 rounded-lg h-full justify-center">
                <div
                    class="px-10 pt-10 pb-2 self-center flex w-[700px] max-w-full items-start justify-between mt-12max-md:flex-wrap max-md:justify-center max-md:mt-10">
    
                    <a class="single" target="1">
                        <button
                            class="bg-white active:bg-brown2-500 focus:outline-none focus:ring focus:ring-darkbrown-50 hover:bg-brown2-500 text-brown2-700 font-semibold hover:text-white py-2 px-4 border border-brown2-500 hover:border-transparent rounded">
                            Sejarah
                        </button>
                    </a>
    
                    <a class="single" target="2">
                        <button
                            class="bg-white active:bg-brown2-500 focus:outline-none focus:ring focus:ring-darkbrown-50 hover:bg-brown2-500 text-brown2-700 font-semibold hover:text-white py-2 px-4 border border-brown2-500 hover:border-transparent rounded">
                            Baju Adat
                        </button>
                    </a>
    
                    <a class="single" target="3">
                        <button
                            class="bg-white active:bg-brown2-500 focus:outline-none focus:ring focus:ring-darkbrown-50 hover:bg-brown2-500 text-brown2-700 font-semibold hover:text-white py-2 px-4 border border-brown2-500 hover:border-transparent rounded">
                            Rumah Adat
                        </button>
                    </a>
    
                    <a class="single" target="4">
                        <button
                            class="bg-white active:bg-brown2-500 focus:outline-none focus:ring focus:ring-darkbrown-50 hover:bg-brown2-500 text-brown2-700 font-semibold hover:text-white py-2 px-4 border border-brown2-500 hover:border-transparent rounded">
                            Lagu Daerah
                        </button>
                    </a>
    
                    <a class="single" target="5">
                        <button
                            class="bg-white active:bg-brown2-500 focus:outline-none focus:ring focus:ring-darkbrown-50 hover:bg-brown2-500 text-brown2-700 font-semibold hover:text-white py-2 px-4 border border-brown2-500 hover:border-transparent rounded">
                            Senjata
                        </button>
                    </a>
                </div>
    
                {{-- SEJARAH  --}}
                <div id="pict1" class="target"> 
                    <h3 class="flex justify-center text-lg font-bold text-black text-justify leading-7 self-center mb-3 max-w-[793px] mt-5 max-md:max-w-full max-md:mb-2.5">Sejarah</h3>
                    <div class="justify-center ml-10 mr-10">
                        <div class="item-center self-center justify-center"> 
                            <img loading="lazy" srcset="{{ URL('assets\img\$content->pict_sejarah') }}" alt="{{ $content->pict_sejarah }}" class="justify-center object-cover h-56 w-96 object-center overflow-hidden self-center max-w-full grow mt-1"/>
                        </div>
                    </div>
                </div>
                <div id="div1" class="target" >
                    <div class="text-black text-justify text-base leading-7 self-center mb-0 max-w-[793px] mt-5 max-md:max-w-full max-md:mb-2.5">
                        {{ $content->sejarah }}
                    </div>
                </div>
    
                {{-- BAJU ADAT  --}}
                <div id="pict2" class="target"> 
                    <h3 class="flex justify-center text-lg font-bold text-black text-justify leading-7 self-center mb-3 max-w-[793px] mt-5 max-md:max-w-full max-md:mb-2.5">Baju Adat</h3>
                    <div class="justify-center ml-10 mr-10">
                        <div class="item-center self-center justify-center"> 
                            <img loading="lazy" srcset="{{ URL('assets\img\$content->pict_baju_adat') }}" alt="{{ $content->pict_baju_adat }}" class="justify-center object-cover h-56 w-96 object-center overflow-hidden self-center max-w-full grow mt-1"/>
                        </div>
                    </div>
                </div>
                <div id="div2" class="target" >
                    <div class="text-black text-justify text-base leading-7 self-center mb-0 max-w-[793px] mt-5 max-md:max-w-full max-md:mb-2.5">
                        {{ $content->baju_adat }}
                    </div>
                </div>
    
                {{-- RUMAH ADAT  --}}
                <div id="pict3" class="target"> 
                    <h3 class="flex justify-center text-lg font-bold text-black text-justify leading-7 self-center mb-3 max-w-[793px] mt-5 max-md:max-w-full max-md:mb-2.5">Rumah Adat</h3>
                    <div class="justify-center ml-10 mr-10">
                        <div class="item-center self-center justify-center"> 
                            <img loading="lazy" srcset="{{ URL('assets\img\$content->pict_rumah_adat') }}" alt="{{ $content->pict_rumah_adat }}" class="justify-center object-cover h-56 w-96 object-center overflow-hidden self-center max-w-full grow mt-1"/>
                        </div>
                    </div>
                </div>
                <div id="div3" class="target" >
                    <div class="text-black text-justify text-base leading-7 self-center mb-0 max-w-[793px] mt-5 max-md:max-w-full max-md:mb-2.5">
                        {{ $content->rumah_adat }}
                    </div>
                </div>
    
                {{-- LAGU DAERAH  --}}
                <div id="pict4" class="target"> 
                    <h3 class="flex justify-center text-lg font-bold text-black text-justify leading-7 self-center mb-3 max-w-[793px] mt-5 max-md:max-w-full max-md:mb-2.5">Lagu Daerah</h3>
                    <div class="justify-center ml-10 mr-10">
                        <div class="item-center self-center justify-center"> 
                            <img loading="lazy" srcset="{{ URL('assets\img\$content->pict_lagu_daerah') }}" alt="{{ $content->pict_lagu_daerah }}" class="justify-center object-cover h-56 w-96 object-center overflow-hidden self-center max-w-full grow mt-1"/>
                        </div>
                    </div>
                </div>
                <div id="div4" class="target" >
                    <div class="text-black text-justify text-base leading-7 self-center mb-0 max-w-[793px] mt-5 max-md:max-w-full max-md:mb-2.5">
                        {{ $content->lagu_daerah }}
                    </div>
                </div>
    
                {{-- SENJATA  --}}
                <div id="pict5" class="target"> 
                    <h3 class="flex justify-center text-lg font-bold text-black text-justify leading-7 self-center mb-3 max-w-[793px] mt-5 max-md:max-w-full max-md:mb-2.5">Senjata</h3>
                    <div class="justify-center ml-10 mr-10">
                        <div class="item-center self-center justify-center"> 
                            <img loading="lazy" srcset="{{ URL('assets\img\$content->pict_senjata') }}" alt="{{ $content->pict_senjata }}" class="justify-center object-cover h-56 w-96 object-center overflow-hidden self-center max-w-full grow mt-1"/>
                        </div>
                    </div>
                </div>
                <div id="div5" class="target" >
                    <div class="text-black text-justify text-base leading-7 self-center mb-0 max-w-[793px] mt-5 max-md:max-w-full max-md:mb-2.5">
                        {{ $content->senjata }}
                    </div>
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

    <script>
        jQuery('.single').click(function(){
            jQuery('.target').hide();
            jQuery('#pict' + $(this).attr('target')).show();
            jQuery('#div' + $(this).attr('target')).show();
        });
    </script>
</body>

</html>
