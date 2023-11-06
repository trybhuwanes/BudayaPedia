<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @vite('resources/css/app.css')
    <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png" />
    <link rel="icon" type="image/png" href="./assets/img/favicon.png" />
    <title>Dashboard Admin BudayaPedia</title>
    <!--     Fonts and icons     -->
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>

    <!-- Main Styling -->
    <link href="./assets/css/soft-ui-dashboard-tailwind.css?v=1.0.5" rel="stylesheet" />

</head>

<body class="m-0 font-poppins text-base antialiased font-normal leading-default bg-gray-50 text-slate-500">
    <!-- sidenav  -->
    <aside
        class="max-w-62.5 ease-nav-brand z-990 fixed inset-y-0 my-4 ml-4 block w-full -translate-x-full flex-wrap items-center justify-between overflow-y-auto rounded-2xl border-0 bg-white p-0 antialiased shadow-none transition-transform duration-200 xl:left-0 xl:translate-x-0 xl:bg-transparent">
        <div class="h-10">
            <div style="margin-left: 50px; margin-top:20px; left: 100px; top: 3px; color: #4F0E0E; font-size: 20px; font-family: Jawa Palsu; font-weight: 400; letter-spacing: 1.50px; word-wrap: break-word">
                BudayaPedia</div>
        </div>

        <hr class="w-64 h-px mt-0 bg-transparent bg-gradient-to-r from-transparent via-black/40 to-transparent" />

        <div class="mt-5 max-w-50 items-center block w-auto max-h-62.5 overflow-auto h-sidenav grow basis-full">
            <ul class="flex flex-col pl-0 mb-0">
                <li class="mt-0.5 w-full">
                    <a class="py-2.7 text-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap py-2 px-4 transition-colors"
                        href="{{ url('/admin') }}">
                        <div
                            class="shadow-soft-2xl mr-2 h-8 w-8 items-center justify-center rounded-lg bg-white bg-center stroke-0 text-center xl:p-2.5">
                            <svg width="12px" height="12px" viewBox="0 0 45 40" version="1.1"
                                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <title>shop</title>
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <g transform="translate(-1716.000000, -439.000000)" fill="#FFFFFF"
                                        fill-rule="nonzero">
                                        <g transform="translate(1716.000000, 291.000000)">
                                            <g transform="translate(0.000000, 148.000000)">
                                                <path class="fill-slate-800 opacity-60"
                                                    d="M46.7199583,10.7414583 L40.8449583,0.949791667 C40.4909749,0.360605034 39.8540131,0 39.1666667,0 L7.83333333,0 C7.1459869,0 6.50902508,0.360605034 6.15504167,0.949791667 L0.280041667,10.7414583 C0.0969176761,11.0460037 -1.23209662e-05,11.3946378 -1.23209662e-05,11.75 C-0.00758042603,16.0663731 3.48367543,19.5725301 7.80004167,19.5833333 L7.81570833,19.5833333 C9.75003686,19.5882688 11.6168794,18.8726691 13.0522917,17.5760417 C16.0171492,20.2556967 20.5292675,20.2556967 23.494125,17.5760417 C26.4604562,20.2616016 30.9794188,20.2616016 33.94575,17.5760417 C36.2421905,19.6477597 39.5441143,20.1708521 42.3684437,18.9103691 C45.1927731,17.649886 47.0084685,14.8428276 47.0000295,11.75 C47.0000295,11.3946378 46.9030823,11.0460037 46.7199583,10.7414583 Z">
                                                </path>
                                                <path class="fill-slate-800"
                                                    d="M39.198,22.4912623 C37.3776246,22.4928106 35.5817531,22.0149171 33.951625,21.0951667 L33.92225,21.1107282 C31.1430221,22.6838032 27.9255001,22.9318916 24.9844167,21.7998837 C24.4750389,21.605469 23.9777983,21.3722567 23.4960833,21.1018359 L23.4745417,21.1129513 C20.6961809,22.6871153 17.4786145,22.9344611 14.5386667,21.7998837 C14.029926,21.6054643 13.533337,21.3722507 13.0522917,21.1018359 C11.4250962,22.0190609 9.63246555,22.4947009 7.81570833,22.4912623 C7.16510551,22.4842162 6.51607673,22.4173045 5.875,22.2911849 L5.875,44.7220845 C5.875,45.9498589 6.7517757,46.9451667 7.83333333,46.9451667 L19.5833333,46.9451667 L19.5833333,33.6066734 L27.4166667,33.6066734 L27.4166667,46.9451667 L39.1666667,46.9451667 C40.2482243,46.9451667 41.125,45.9498589 41.125,44.7220845 L41.125,22.2822926 C40.4887822,22.4116582 39.8442868,22.4815492 39.198,22.4912623 Z">
                                                </path>
                                            </g>
                                        </g>
                                    </g>
                                </g>
                            </svg>
                        </div>
                        <span class="ml-1 duration-300 opacity-100 pointer-events-none ease-soft">Dashboard</span>
                    </a>
                </li>

                <li class="mt-0.5 w-full">
                    <a class="py-2.7 shadow-soft-xl text-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap rounded-lg bg-black w-1 px-4 py-2 font-semibold text-slate-700 transition-colors"
                        href="{{ url('/buat') }}">
                        <div
                            class="bg-gradient-to-tl from-brown-500 to-darkbrown-500 shadow-soft-2xl mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-white bg-center stroke-0 text-center xl:p-2.5">
                            <svg width="12px" height="12px" viewBox="0 0 42 42" version="1.1"
                                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <title>office</title>
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <g transform="translate(-1869.000000, -293.000000)" fill="#FFFFFF"
                                        fill-rule="nonzero">
                                        <g transform="translate(1716.000000, 291.000000)">
                                            <g transform="translate(153.000000, 2.000000)">
                                                <path class="opacity-60"
                                                    d="M12.25,17.5 L8.75,17.5 L8.75,1.75 C8.75,0.78225 9.53225,0 10.5,0 L31.5,0 C32.46775,0 33.25,0.78225 33.25,1.75 L33.25,12.25 L29.75,12.25 L29.75,3.5 L12.25,3.5 L12.25,17.5 Z">
                                                </path>
                                                <path class=""
                                                    d="M40.25,14 L24.5,14 C23.53225,14 22.75,14.78225 22.75,15.75 L22.75,38.5 L19.25,38.5 L19.25,22.75 C19.25,21.78225 18.46775,21 17.5,21 L1.75,21 C0.78225,21 0,21.78225 0,22.75 L0,40.25 C0,41.21775 0.78225,42 1.75,42 L40.25,42 C41.21775,42 42,41.21775 42,40.25 L42,15.75 C42,14.78225 41.21775,14 40.25,14 Z M12.25,36.75 L7,36.75 L7,33.25 L12.25,33.25 L12.25,36.75 Z M12.25,29.75 L7,29.75 L7,26.25 L12.25,26.25 L12.25,29.75 Z M35,36.75 L29.75,36.75 L29.75,33.25 L35,33.25 L35,36.75 Z M35,29.75 L29.75,29.75 L29.75,26.25 L35,26.25 L35,29.75 Z M35,22.75 L29.75,22.75 L29.75,19.25 L35,19.25 L35,22.75 Z">
                                                </path>
                                            </g>
                                        </g>
                                    </g>
                                </g>
                            </svg>
                        </div>
                        <span class="ml-1 duration-300 opacity-100 pointer-events-none ease-soft">Buat</span>
                    </a>
                </li>

            </ul>
        </div>

    </aside>

    <!-- end sidenav -->

    <main class="bg-brown-50 xl:ml-68.5 max-h-fit ml-72 transition-all duration-200">
        <!-- cards -->
        <div class="pt-10 px-12 mb-10">
            <p class="text-2xl font-bold text-black">Edit Konten</p>
        </div>
        <div class="w-full px-12 mx-auto">
            <form class="w-full max-w" method="POST" action="{{ route('admin.store') }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="flex flex-wrap -mx-3 mb-6">
                    <div class="w-full px-3">
                        <label for="nama_prov" class="block mb-2 text-lg font-bold text-black">Provinsi</label>
                        <input value="{{ old('nama_prov', $content->nama_prov) }}" type="text" id="nama_prov"
                            name="nama_prov"
                            class="bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    </div>
                </div>

                <div class="flex flex-wrap -mx-3 mb-2">
                    <div class="w-full px-3 mb-6 md:mb-0">
                        <label for="sejarah" class="block mb-2 text-lg font-bold text-black">Sejarah</label>
                        <input
                            class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 focus:outline-none"
                            aria-describedby="file_input_help" id="pict_sejarah" type="file" name="pict_sejarah">
                        <p class="mt-1 text-sm text-black" id="file_input_help">SVG, PNG, JPG or GIF (MAX. 800x400px).
                        </p>
                        <textarea contenteditable="true" id="sejarah" name="sejarah" rows="4"
                            class="block p-2.5 w-full text-sm text-black bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Write your thoughts here...">{{ old('sejarah', $content->sejarah) }}</textarea>
                    </div>
                </div>

                <div class="flex flex-wrap -mx-3 mb-2">
                    <div class="w-full px-3 mb-6 md:mb-0">
                        <label for="baju_adat" class="block mb-2 text-lg font-bold text-black">Baju Adat</label>
                        <input
                            class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 focus:outline-none"
                            aria-describedby="file_input_help" id="pict_baju_adat" type="file"
                            name="pict_baju_adat">
                        <p class="mt-1 text-sm text-black" id="file_input_help">SVG, PNG, JPG or GIF (MAX. 800x400px).
                        </p>
                        <textarea id="baju_adat" name="baju_adat" rows="4"
                            class="block p-2.5 w-full text-sm text-black bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Write your thoughts here...">{{ old('sejarah', $content->baju_adat) }}</textarea>
                    </div>
                </div>

                <div class="flex flex-wrap -mx-3 mb-2">
                    <div class="w-full px-3 mb-6 md:mb-0">
                        <label for="message" class="block mb-2 text-lg font-bold text-black">Rumah Adat</label>
                        <input
                            class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 focus:outline-none"
                            aria-describedby="file_input_help" id="pict_rumah_adat" type="file"
                            name="pict_rumah_adat">
                        <p class="mt-1 text-sm text-black" id="file_input_help">SVG, PNG, JPG or GIF (MAX. 800x400px).
                        </p>
                        <textarea id="rumah_adat" name="rumah_adat" rows="4"
                            class="block p-2.5 w-full text-sm text-black bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Write your thoughts here...">{{ old('sejarah', $content->rumah_adat) }}</textarea>
                    </div>
                </div>

                <div class="flex flex-wrap -mx-3 mb-2">
                    <div class="w-full px-3 mb-6 md:mb-0">
                        <label for="message" class="block mb-2 text-lg font-bold text-black">Lagu Daerah</label>
                        <input
                            class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 focus:outline-none"
                            aria-describedby="file_input_help" id="pict_lagu_daerah" type="file"
                            name="pict_lagu_daerah">
                        <p class="mt-1 text-sm text-black" id="file_input_help">SVG, PNG, JPG or GIF (MAX. 800x400px).
                        </p>
                        <textarea id="lagu_daerah" name="lagu_daerah" rows="4"
                            class="block p-2.5 w-full text-sm text-black bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Write your thoughts here...">{{ old('sejarah', $content->lagu_daerah) }}</textarea>
                    </div>
                </div>

                <div class="flex flex-wrap -mx-3 mb-2 pb-6">
                    <div class="w-full px-3 mb-6 md:mb-0">
                        <label for="message" class="block mb-2 text-lg font-bold text-black">Senjata</label>
                        <input
                            class="block w-full text-sm text-black border border-gray-300 rounded-lg cursor-pointer bg-gray-50 focus:outline-none"
                            aria-describedby="file_input_help" id="pict_senjata" type="file" name="pict_senjata">
                        <p class="mt-1 text-sm text-black" id="file_input_help">SVG, PNG, JPG or GIF (MAX. 800x400px).
                        </p>
                        <textarea id="senjata" name="senjata" rows="4"
                            class="block p-2.5 w-full text-sm text-black bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Write your thoughts here...">{{ old('sejarah', $content->senjata) }}</textarea>
                        
                    </div>
                </div>
                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mb-8">
                    Simpan
                </button>
            </form>
            {{-- <footer class="pt-4">
          
        </footer> --}}
        </div>
        <!-- end cards -->
    </main>

</body>


<!-- plugin for scrollbar  -->
<script src="./assets/js/plugins/perfect-scrollbar.min.js" async></script>
<!-- github button -->
<script async defer src="https://buttons.github.io/buttons.js"></script>
<!-- main script file  -->
<script src="./assets/js/soft-ui-dashboard-tailwind.js?v=1.0.5" async></script>

</html>
