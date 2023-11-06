<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @vite('resources/css/app.css')
    <title>Dashboard Admin BudayaPedia</title>

    <script src=//code.jquery.com/jquery-3.5.1.slim.min.js integrity="sha256-4+XzXVhsDmqanXGHaHvgh1gMQKX40OUvDEBTu8JcmNs="
        crossorigin=anonymous></script>
    {{-- <script src="resources/js/index.js"></script> --}}

    <!-- Main Styling -->
    {{-- <link href="resources/css/style.css" rel="stylesheet" /> --}}

</head>

<body class="font-poppins">
    <aside id="sidebar"
        class="fixed top-0 left-0 z-20 flex flex-col flex-shrink-0 w-64 h-full pt-8 font-normal duration-75 lg:flex transition-width"
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
                            <a href="{{ route('admin.create') }}">
                                <button type="button"
                                class="flex items-center w-full p-2 text-base text-black transition duration-75 rounded-lg group hover:bg-brown-50">
                                <svg class="flex-shrink-0 w-6 h-6 text--black transition duration-75 group-hover:text-gray-900 "
                                    fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"
                                    aria-hidden="true">
                                    <path clip-rule="evenodd" fill-rule="evenodd"
                                        d="M.99 5.24A2.25 2.25 0 013.25 3h13.5A2.25 2.25 0 0119 5.25l.01 9.5A2.25 2.25 0 0116.76 17H3.26A2.267 2.267 0 011 14.74l-.01-9.5zm8.26 9.52v-.625a.75.75 0 00-.75-.75H3.25a.75.75 0 00-.75.75v.615c0 .414.336.75.75.75h5.373a.75.75 0 00.627-.74zm1.5 0a.75.75 0 00.627.74h5.373a.75.75 0 00.75-.75v-.615a.75.75 0 00-.75-.75H11.5a.75.75 0 00-.75.75v.625zm6.75-3.63v-.625a.75.75 0 00-.75-.75H11.5a.75.75 0 00-.75.75v.625c0 .414.336.75.75.75h5.25a.75.75 0 00.75-.75zm-8.25 0v-.625a.75.75 0 00-.75-.75H3.25a.75.75 0 00-.75.75v.625c0 .414.336.75.75.75H8.5a.75.75 0 00.75-.75zM17.5 7.5v-.625a.75.75 0 00-.75-.75H11.5a.75.75 0 00-.75.75V7.5c0 .414.336.75.75.75h5.25a.75.75 0 00.75-.75zm-8.25 0v-.625a.75.75 0 00-.75-.75H3.25a.75.75 0 00-.75.75V7.5c0 .414.336.75.75.75H8.5a.75.75 0 00.75-.75z">
                                    </path>
                                </svg>
                                <span class="flex-1 ml-3 text-left whitespace-nowrap" sidebar-toggle-item>Buat</span>
                            </button>
                            </a>
                        </li>
                    </ul>

                </div>
            </div>

        </div>
    </aside>

    <div class="fixed inset-0 z-10 hidden bg-gray-900/50 dark:bg-gray-900/90" id="sidebarBackdrop"></div>

    <main class="relative overflow-y-auto bg-brown-50 h-screen lg:ml-64">

        {{-- ATAS TABEL  --}}
        <div class="block sm:flex items-center justify-between border-b bg-brown-500 lg:mt-1.5">
            <div class="w-full mb-1">
                <div class="mx-8 mb-4 mt-5">
                    <h1 class="pt-3 text-xl font-semibold text-gray-900 sm:text-2xl ">Beranda</h1>
                </div>
                <div class="sm:flex">
                    {{-- <div
                        class="mx-8 pb-3 items-center hidden sm:flex sm:divide-x sm:divide-gray-100 sm:mb-0">
                        <form class="lg:pr-3" action="#" method="GET">
                            <label for="users-search" class="sr-only">Search</label>
                            <div class="relative mt-1 lg:w-64 xl:w-96">
                                <input type="text" id="users-search"
                                    class="bg-gray-50 border border-gray-300 text-black sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 "
                                    placeholder="Search for users">
                            </div>
                        </form>

                    </div> --}}
                    {{-- <div class="flex items-center ml-auto space-x-2 sm:space-x-3"> --}}
                        <a href="{{ route('admin.create') }}">
                            <button id="addButton" type="button" 
                            class="ml-8 mb-4 mr-8 inline-flex items-center justify-center w-1/2 px-3 py-2 text-sm font-medium text-center text-black rounded-lg bg-darkbrown-50 hover:bg-brown2-50 focus:ring-4 focus:ring-darkbrown sm:w-auto">
                            <svg class="w-5 h-5 mr-2 -ml-1" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            Add Content
                        </button>
                        </a>
                    {{-- </div> --}}
                </div>
            </div>
        </div>

        {{-- TABEL KONTEN --}}
        <div class="flex flex-wrap mx-8">
            <div class="flex-auto px-0 pt-0 pb-2">
                <div class="min-w-full align-middle">
                    <div class="p-0 overflow-x-auto rounded-2xl">
                        <table class="items-center w-full mb-0 align-top text-white">
                            <thead class="bg-darkbrown-500">
                                <tr>
                                    <th scope="col"
                                        class="pl-8 p-3 font-bold text-sm text-left text-white uppercase ">
                                        No
                                    </th>
                                    <th scope="col" class="p-3 text-sm font-bold text-left text-white uppercase">
                                        Provinsi
                                    </th>
                                    <th scope="col" class="p-3 text-sm font-bold text-left text-white uppercase">
                                        Dibuat
                                    </th>
                                    <th scope="col" class="p-3 text-sm font-bold text-left text-white uppercase">
                                        Diupdate
                                    </th>
                                    <th scope="col" class="p-3 text-sm font-bold text-left text-white uppercase">
                                        Actions
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                <?php $number = 1; ?>
                                @foreach ($content as $content)
                                    <tr class="hover:bg-brown-500 ">
                                        <td
                                            class="pl-8 max-w-sm p-4 overflow-hidden text-base font-normal text-black truncate xl:max-w-xs">
                                            {{ $number++ }}</td>
                                        <td
                                            class="max-w-sm p-2 overflow-hidden text-base font-normal text-black truncate xl:max-w-xs">
                                            {{ $content->nama_prov }}</td>
                                        <td class="p-2 text-base font-medium whitespace-nowrap text-black">
                                            {{ $content->created_at }}</td>
                                        <td class="p-2 text-base font-medium whitespace-nowrap text-black">
                                            {{ $content->updated_at }}</td>
                                        <td class="p-2 space-x-2 whitespace-nowrap">
                                            <a href="{{ url("baca/$content->id") }}" >
                                                <button id="readButton" type="button" data-modal-toggle="read-user-modal" data-target="#read-content-modal" data-url="{{ route('admin.read', $content->id)}}"
                                                class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white rounded-lg bg-blue-500 hover:bg-blue-700 focus:ring-4 focus:ring-blue-500">
                                                    <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z">
                                                        </path>
                                                        <path fill-rule="evenodd"
                                                            d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z"
                                                            clip-rule="evenodd"></path>
                                                    </svg>
                                                Baca
                                                </button>
                                            </a>
                                            <a href="{{ url("edit/$content->id") }}" data-id="{{ $content->id }}">
                                                <button id="editButton" type="button" data-modal-toggle="edit-user-modal"
                                                data-target="#edit-content-modal"
                                                class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white rounded-lg bg-green-500 hover:bg-green-700 focus:ring-4 focus:ring-green-500">
                                                    <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z">
                                                        </path>
                                                        <path fill-rule="evenodd"
                                                            d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z"
                                                            clip-rule="evenodd"></path>
                                                    </svg>
                                                Edit
                                                </button>
                                            </a>

                                            <a href="{{ url("delete/$content->id") }}" data-id="{{ $content->id }}"
                                                data-modal-toggle="delete-user-modal"
                                                data-target="#delete-content-modal">
                                                <button id="deleteButton" data- type="button"
                                                    onclick="return confirm('Apakah anda yakin?');"
                                                    class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-red-600 rounded-lg hover:bg-red-800 focus:ring-4 focus:ring-red-300 dark:focus:ring-red-900">
                                                    <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd"
                                                            d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                                                            clip-rule="evenodd"></path>
                                                    </svg>
                                                    Hapus
                                                </button>
                                            </a>

                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div
            class="mt-64 sticky bottom-0 right-0 items-center w-full p-4 bg-brown-50 border-t border-gray-200 sm:flex sm:justify-between">
            <div class="flex items-center mb-4 sm:mb-0">
                <a href="#"
                    class="inline-flex justify-center p-1 text-black rounded cursor-pointer  hover:bg-gray-100">
                    <svg class="w-7 h-7" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
                            clip-rule="evenodd"></path>
                    </svg>
                </a>
                <a href="#"
                    class="inline-flex justify-center p-1 mr-2 text-black rounded cursor-pointer hover:bg-gray-100">
                    <svg class="w-7 h-7" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                            clip-rule="evenodd"></path>
                    </svg>
                </a>
                <span class="text-sm font-normal text-black ">Showing <span
                        class="font-semibold text-black">1-20</span> of <span
                        class="font-semibold text-black">2290</span></span>
            </div>
            <div class="flex items-center space-x-3">
                <a href="#"
                    class="inline-flex items-center justify-center flex-1 px-3 py-2 text-sm font-medium text-center text-black rounded-lg bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300">
                    <svg class="w-5 h-5 mr-1 -ml-1"" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
                            clip-rule="evenodd"></path>
                    </svg>
                    Previous
                </a>
                <a href="#"
                    class="inline-flex items-center justify-center flex-1 px-3 py-2 text-sm font-medium text-center text-black rounded-lg bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300">
                    Next
                    <svg class="w-5 h-5 ml-1 -mr-1" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                            clip-rule="evenodd"></path>
                    </svg>
                </a>
            </div>
        </div>

    </main>
</body>

</html>
