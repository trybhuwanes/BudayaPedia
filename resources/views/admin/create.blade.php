<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @vite('resources/css/app.css')
    <title>Admin | Create</title>

    <script src=//code.jquery.com/jquery-3.5.1.slim.min.js integrity="sha256-4+XzXVhsDmqanXGHaHvgh1gMQKX40OUvDEBTu8JcmNs="
        crossorigin=anonymous></script>
    {{-- <script src="resources/js/index.js"></script> --}}

    <!-- Main Styling -->
    {{-- <link href="resources/css/style.css" rel="stylesheet" /> --}}

</head>

<body class="font-poppins">
    <aside id="sidebar"
    class="fixed top-0 left-0 z-20 flex flex-col flex-shrink-0 hidden w-64 h-full pt-8 font-normal duration-75 lg:flex transition-width"
    aria-label="Sidebar">
    <a class="flex ml-12 md:mr-24">
        {{-- <img src="/images/logo.svg" class="h-8 mr-3" alt="FlowBite Logo" /> --}}
        <span style="margin-top:0px; left: 100px; top: 3px; text-align: center; color: #4F0E0E; font-size: 20px; font-family: Jawa Palsu; font-weight: 400; letter-spacing: 1.50px; word-wrap: break-word">
            BudayaPedia</span>
    </a>
    <div
        class="relative flex flex-col flex-1 min-h-0 pt-0 bg-white border-r border-gray-200">
        <div class="flex flex-col flex-1 pt-5 pb-4 overflow-y-auto">
            <div
                class="flex-1 px-3 space-y-1 bg-white divide-y divide-gray-200">
                <ul class="pb-2 space-y-2">
                    <li>
                        <a
                        class="flex items-center w-full p-2 text-base text-black transition duration-75 rounded-lg group hover:bg-brown-50">
                            <svg class="w-6 h-6 text-black transition duration-75 group-hover:text-gray-900 "
                                fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path>
                                <path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"></path>
                            </svg>
                            <span class="ml-3" sidebar-toggle-item>Beranda</span>
                        </a>
                    </li>

                    <li>
                        <a class="flex items-center p-2 text-base text-black rounded-lg bg-gradient-to-r from-white to-brown-50 hover:bg-gray-100 group">
                            <svg class="flex-shrink-0 w-6 h-6 text--black transition duration-75 group-hover:text-gray-900 "
                                fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"
                                aria-hidden="true">
                                <path clip-rule="evenodd" fill-rule="evenodd"
                                    d="M.99 5.24A2.25 2.25 0 013.25 3h13.5A2.25 2.25 0 0119 5.25l.01 9.5A2.25 2.25 0 0116.76 17H3.26A2.267 2.267 0 011 14.74l-.01-9.5zm8.26 9.52v-.625a.75.75 0 00-.75-.75H3.25a.75.75 0 00-.75.75v.615c0 .414.336.75.75.75h5.373a.75.75 0 00.627-.74zm1.5 0a.75.75 0 00.627.74h5.373a.75.75 0 00.75-.75v-.615a.75.75 0 00-.75-.75H11.5a.75.75 0 00-.75.75v.625zm6.75-3.63v-.625a.75.75 0 00-.75-.75H11.5a.75.75 0 00-.75.75v.625c0 .414.336.75.75.75h5.25a.75.75 0 00.75-.75zm-8.25 0v-.625a.75.75 0 00-.75-.75H3.25a.75.75 0 00-.75.75v.625c0 .414.336.75.75.75H8.5a.75.75 0 00.75-.75zM17.5 7.5v-.625a.75.75 0 00-.75-.75H11.5a.75.75 0 00-.75.75V7.5c0 .414.336.75.75.75h5.25a.75.75 0 00.75-.75zm-8.25 0v-.625a.75.75 0 00-.75-.75H3.25a.75.75 0 00-.75.75V7.5c0 .414.336.75.75.75H8.5a.75.75 0 00.75-.75z">
                                </path>
                            </svg>
                            <span class="flex-1 ml-3 text-left whitespace-nowrap" sidebar-toggle-item>Buat</span>
                        </a>
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
                    <h1 class="pt-3 text-xl font-semibold text-gray-900 sm:text-2xl ">Buat Konten</h1>
                </div>
            </div>
        </div>
        <div class="mt-4 mx-8 space-y-6">
            <form action="{{ route('admin.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="grid grid-cols-12 gap-x-12">
                    <div class="col-span-full mb-4">
                        <label for="nama_prov" class="text-lg font-bold block mb-2 text-black">Nama
                            Provinsi</label>
                        <input type="text" name="nama_prov" id="nama_prov"
                            class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5"
                            placeholder="Masukkan nama provinsi" required>
                    </div>
                    <div class="col-span-12 mb-4">
                        <label for="sejarah" class="block mb-2 text-lg font-bold text-black ">Sejarah</label>

                        <input
                            class="mb-4 block w-full text-sm text-black border border-gray-300 rounded-lg cursor-pointer bg-gray-50  focus:outline-none"
                            name="pict_sejarah" id="pict_sejarah" type="file">

                        <textarea id="sejarah" rows="4" name="sejarah"
                            class="block p-2.5 w-full text-sm text-black bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500"
                            placeholder="Masukkan sejarah"></textarea>
                    </div>

                    <div class="col-span-12 mb-4">
                        <label for="baju_adat" class="text-lg font-bold block mb-2 text-black">Baju
                            Adat</label>

                        <input
                            class="mb-4 block w-full text-sm text-black border border-gray-300 rounded-lg cursor-pointer bg-gray-50"
                            name="pict_baju_adat" id="pict_baju_adat" type="file">

                        <textarea id="baju_adat" rows="4" name="baju_adat"
                            class="block p-2.5 w-full text-sm text-black bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500"
                            placeholder="Masukkan deskripsi baju adat"></textarea>
                    </div>
                    <div class="col-span-12 mb-4">
                        <label for="rumah_adat" class="text-lg font-bold block mb-2 text-black">Rumah
                            Adat</label>

                        <input
                            class="mb-4 block w-full text-sm text-black border border-gray-300 rounded-lg cursor-pointer bg-gray-50 focus:outline-none "
                            name="pict_rumah_adat" id="pict_rumah_adat" type="file">

                        <textarea id="rumah_adat" rows="4" name="rumah_adat"
                            class="block p-2.5 w-full text-sm text-black bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500 "
                            placeholder="Masukkan deskripsi rumah adat"></textarea>
                    </div>
                    <div class="col-span-12 mb-4">
                        <label for="lagu_daerah" class="text-lg font-bold block mb-2 text-black">Lagu
                            Daerah</label>
                        <input
                            class="mb-4 block w-full text-sm text-black border border-gray-300 rounded-lg cursor-pointer bg-gray-50 focus:outline-none "
                            name="pict_lagu_daerah" id="pict_lagu_daerah" type="file">
                        <textarea id="lagu_daerah" rows="4" name="lagu_daerah"
                            class="block p-2.5 w-full text-sm text-black bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500 "
                            placeholder="Masukkan deskripsi lagu daerah"></textarea>
                    </div>
                    <div class="col-span-12 mb-4">
                        <label for="senjata" class="text-lg font-bold block mb-2 text-black">Senjata</label>
                        <input
                            class="mb-4 block w-full text-sm text-black border border-gray-300 rounded-lg cursor-pointer bg-gray-50 focus:outline-none"
                            name="pict_senjata" id="pict_senjata" type="file">
                        <textarea id="senjata" rows="4" name="senjata"
                            class="block p-2.5 w-full text-sm text-black bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500 "
                            placeholder="Masukkan deskripsi senjata"></textarea>
                    </div>
                    <div class="ml-1 mb-10">
                        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                            Simpan
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </main>
</body>

</html>
