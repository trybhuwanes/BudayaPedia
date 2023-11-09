<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @vite('resources/css/app.css')
    <title>Admin | Read</title>

    <script src=//code.jquery.com/jquery-3.5.1.slim.min.js integrity="sha256-4+XzXVhsDmqanXGHaHvgh1gMQKX40OUvDEBTu8JcmNs="
        crossorigin=anonymous></script>
    {{-- <script src="resources/js/index.js"></script> --}}

    <!-- Main Styling -->
    {{-- <link href="resources/css/style.css" rel="stylesheet" /> --}}

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>

<body class="font-poppins">
    <aside id="sidebar"
        class="fixed top-0 left-0 z-20 flex flex-col flex-shrink-0 hidden w-64 h-full pt-8 font-normal duration-75 lg:flex transition-width"
        aria-label="Sidebar">
        <a class="flex ml-12 md:mr-24">
            {{-- <img src="/images/logo.svg" class="h-8 mr-3" alt="FlowBite Logo" /> --}}
            <span
                style="margin-top:0px; left: 100px; top: 3px; text-align: center; color: #4F0E0E; font-size: 20px; font-family: Jawa Palsu; font-weight: 400; letter-spacing: 1.50px; word-wrap: break-word">
                BudayaPedia</span>
        </a>
        <div class="relative flex flex-col flex-1 min-h-0 pt-0 bg-white border-r border-gray-200">
            <div class="flex flex-col flex-1 pt-5 pb-4 overflow-y-auto">
                <div class="flex-1 px-3 space-y-1 bg-white divide-y divide-gray-200">
                    <ul class="pb-2 space-y-2">
                        <li>
                            <a
                                class="flex items-center p-2 text-base text-black rounded-lg bg-gradient-to-r from-white to-brown-50 hover:bg-gray-100 group">
                                <svg class="w-6 h-6 text-black transition duration-75 group-hover:text-gray-900 "
                                    fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path>
                                    <path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"></path>
                                </svg>
                                <span class="ml-3" sidebar-toggle-item>Beranda</span>
                            </a>
                        </li>

                        <li>
                            <button type="button"
                                class="flex items-center w-full p-2 text-base text-black transition duration-75 rounded-lg group hover:bg-brown-50 "
                                aria-controls="dropdown-crud" data-collapse-toggle="dropdown-crud">
                                <svg class="flex-shrink-0 w-6 h-6 text--black transition duration-75 group-hover:text-gray-900 "
                                    fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"
                                    aria-hidden="true">
                                    <path clip-rule="evenodd" fill-rule="evenodd"
                                        d="M.99 5.24A2.25 2.25 0 013.25 3h13.5A2.25 2.25 0 0119 5.25l.01 9.5A2.25 2.25 0 0116.76 17H3.26A2.267 2.267 0 011 14.74l-.01-9.5zm8.26 9.52v-.625a.75.75 0 00-.75-.75H3.25a.75.75 0 00-.75.75v.615c0 .414.336.75.75.75h5.373a.75.75 0 00.627-.74zm1.5 0a.75.75 0 00.627.74h5.373a.75.75 0 00.75-.75v-.615a.75.75 0 00-.75-.75H11.5a.75.75 0 00-.75.75v.625zm6.75-3.63v-.625a.75.75 0 00-.75-.75H11.5a.75.75 0 00-.75.75v.625c0 .414.336.75.75.75h5.25a.75.75 0 00.75-.75zm-8.25 0v-.625a.75.75 0 00-.75-.75H3.25a.75.75 0 00-.75.75v.625c0 .414.336.75.75.75H8.5a.75.75 0 00.75-.75zM17.5 7.5v-.625a.75.75 0 00-.75-.75H11.5a.75.75 0 00-.75.75V7.5c0 .414.336.75.75.75h5.25a.75.75 0 00.75-.75zm-8.25 0v-.625a.75.75 0 00-.75-.75H3.25a.75.75 0 00-.75.75V7.5c0 .414.336.75.75.75H8.5a.75.75 0 00.75-.75z">
                                    </path>
                                </svg>
                                <span class="flex-1 ml-3 text-left whitespace-nowrap" sidebar-toggle-item>Buat</span>
                            </button>
                        </li>
                    </ul>

                </div>
            </div>

        </div>
    </aside>

    <div class="fixed inset-0 z-10 hidden bg-black" id="sidebarBackdrop"></div>


    <main class="bg-brown-50 relative overflow-y-auto lg:ml-64">
        <div class="block sm:flex items-center justify-between border-b bg-brown-500 lg:mt-1.5 dark:bg-brown-500">
            <div class="w-full mb-1">
                <div class="mx-8 mb-4 mt-5">
                    <h1 class="pt-3 text-xl font-semibold text-gray-900 sm:text-2xl ">Baca Konten</h1>
                </div>
            </div>
        </div>
        <a href="{{ route('admin.dashboard') }}">
            <button
                class="ml-8 mt-4 bg-darkbrown-50 active:bg-brown2-500 focus:outline-none focus:ring focus:ring-darkbrown-50 hover:bg-brown2-500  font-semibold hover:text-white text-white py-2 px-4 border border-brown2-500 hover:border-transparent rounded">
            Kembali
            </button>
        </a>
        <div class="mt-4 mx-8">
            <div class="flex flex-col mt-4 items-center w-full max-w-full px-3 mb-6 sm:flex-none xl:mb-0 bg-white pb-20 rounded-lg h-full justify-center">
                <div class="text-black text-2xl font-bold mt-9 max-md:ml-2.5">Jawa Timur</div>
                <div
                    class="px-10 pt-5 pb-2 self-center flex w-[700px] max-w-full items-start justify-between mt-12max-md:flex-wrap max-md:justify-center max-md:mt-10">

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
                            <img loading="lazy" srcset="{{ asset('img/' . $content->pict_baju_adat) }}" alt="{{ $content->pict_baju_adat }}" class="justify-center object-cover h-56 w-96 object-center overflow-hidden self-center max-w-full grow mt-1"/>
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
                            <img loading="lazy" srcset="{{ asset('img/' . $content->pict_rumah_adat) }}" alt="{{ $content->pict_rumah_adat }}" class="justify-center object-cover h-56 w-96 object-center overflow-hidden self-center max-w-full grow mt-1"/>
                        </div>
                    </div>
                </div> 
                       
                <div id="div3" class="target" >
                    <div class="pt-3 text-black text-justify text-base leading-7 self-center mb-0 max-w-[793px] max-md:max-w-full max-md:mb-2.5">
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


    <script>
        jQuery('.single').click(function(){
            jQuery('.target').hide();
            jQuery('#pict' + $(this).attr('target')).show();
            jQuery('#div' + $(this).attr('target')).show();
        });
    </script>
</body>



</html>
