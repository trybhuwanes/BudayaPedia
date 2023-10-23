<!--
=========================================================
* Soft UI Dashboard Tailwind - v1.0.5
=========================================================

* Product Page: https://www.creative-tim.com/product/soft-ui-dashboard-tailwind
* Copyright 2023 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://www.creative-tim.com/license)
* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @vite('resources/css/app.css')
    <title>Dashboard Admin BudayaPedia</title>
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <!-- Main Styling -->
    <link href="./assets/css/soft-ui-dashboard-tailwind.css?v=1.0.5" rel="stylesheet" />    
    
  </head>

  <body class="m-0 font-poppins text-base antialiased font-normal leading-default bg-gray-50 text-slate-500">
    <!-- sidenav  -->
    <aside class="max-w-62.5 ease-nav-brand z-990 fixed inset-y-0 my-4 ml-4 block w-full -translate-x-full flex-wrap items-center justify-between overflow-y-auto rounded-2xl border-0 bg-white p-0 antialiased shadow-none transition-transform duration-200 xl:left-0 xl:translate-x-0 xl:bg-transparent">
      <div class="h-19.5">
        <i class="absolute top-0 right-0 hidden p-4 opacity-50 cursor-pointer fas fa-times text-slate-400 xl:hidden" sidenav-close></i>
        <a class="block px-8 py-6 m-0 text-sm whitespace-nowrap text-slate-700" href="javascript:;" target="_blank">
          <span class="ml-1 font-semibold transition-all duration-200 ease-nav-brand">BudayaPedia</span>
        </a>
      </div>

      <hr class="h-px mt-0 bg-transparent bg-gradient-to-r from-transparent via-black/40 to-transparent" />

      <div class="items-center block w-auto max-h-screen overflow-auto h-sidenav grow basis-full">
        <ul class="flex flex-col pl-0 mb-0">
          <li class="mt-0.5 w-full">
            <a class="py-2.7 shadow-soft-xl text-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap rounded-lg bg-white px-4 font-semibold text-slate-700 transition-colors" href="{{ url('/admin') }}">
              <div class="bg-gradient-to-tl from-brown-500 to-darkbrown-500 shadow-soft-2xl mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-white bg-center stroke-0 text-center xl:p-2.5">
                <svg width="12px" height="12px" viewBox="0 0 45 40" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                  <title>shop</title>
                  <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <g transform="translate(-1716.000000, -439.000000)" fill="#FFFFFF" fill-rule="nonzero">
                      <g transform="translate(1716.000000, 291.000000)">
                        <g transform="translate(0.000000, 148.000000)">
                          <path
                            class="opacity-60"
                            d="M46.7199583,10.7414583 L40.8449583,0.949791667 C40.4909749,0.360605034 39.8540131,0 39.1666667,0 L7.83333333,0 C7.1459869,0 6.50902508,0.360605034 6.15504167,0.949791667 L0.280041667,10.7414583 C0.0969176761,11.0460037 -1.23209662e-05,11.3946378 -1.23209662e-05,11.75 C-0.00758042603,16.0663731 3.48367543,19.5725301 7.80004167,19.5833333 L7.81570833,19.5833333 C9.75003686,19.5882688 11.6168794,18.8726691 13.0522917,17.5760417 C16.0171492,20.2556967 20.5292675,20.2556967 23.494125,17.5760417 C26.4604562,20.2616016 30.9794188,20.2616016 33.94575,17.5760417 C36.2421905,19.6477597 39.5441143,20.1708521 42.3684437,18.9103691 C45.1927731,17.649886 47.0084685,14.8428276 47.0000295,11.75 C47.0000295,11.3946378 46.9030823,11.0460037 46.7199583,10.7414583 Z"
                          ></path>
                          <path
                            class=""
                            d="M39.198,22.4912623 C37.3776246,22.4928106 35.5817531,22.0149171 33.951625,21.0951667 L33.92225,21.1107282 C31.1430221,22.6838032 27.9255001,22.9318916 24.9844167,21.7998837 C24.4750389,21.605469 23.9777983,21.3722567 23.4960833,21.1018359 L23.4745417,21.1129513 C20.6961809,22.6871153 17.4786145,22.9344611 14.5386667,21.7998837 C14.029926,21.6054643 13.533337,21.3722507 13.0522917,21.1018359 C11.4250962,22.0190609 9.63246555,22.4947009 7.81570833,22.4912623 C7.16510551,22.4842162 6.51607673,22.4173045 5.875,22.2911849 L5.875,44.7220845 C5.875,45.9498589 6.7517757,46.9451667 7.83333333,46.9451667 L19.5833333,46.9451667 L19.5833333,33.6066734 L27.4166667,33.6066734 L27.4166667,46.9451667 L39.1666667,46.9451667 C40.2482243,46.9451667 41.125,45.9498589 41.125,44.7220845 L41.125,22.2822926 C40.4887822,22.4116582 39.8442868,22.4815492 39.198,22.4912623 Z"
                          ></path>
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
            <a class="py-2.7 text-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap px-4 transition-colors" href="{{ url('/buat') }}">
              <div class="shadow-soft-2xl mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-white bg-center stroke-0 text-center xl:p-2.5">
                <svg width="12px" height="12px" viewBox="0 0 42 42" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                  <title>office</title>
                  <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <g transform="translate(-1869.000000, -293.000000)" fill="#FFFFFF" fill-rule="nonzero">
                      <g transform="translate(1716.000000, 291.000000)">
                        <g transform="translate(153.000000, 2.000000)">
                          <path class="fill-slate-800 opacity-60" d="M12.25,17.5 L8.75,17.5 L8.75,1.75 C8.75,0.78225 9.53225,0 10.5,0 L31.5,0 C32.46775,0 33.25,0.78225 33.25,1.75 L33.25,12.25 L29.75,12.25 L29.75,3.5 L12.25,3.5 L12.25,17.5 Z"></path>
                          <path class="fill-slate-800" d="M40.25,14 L24.5,14 C23.53225,14 22.75,14.78225 22.75,15.75 L22.75,38.5 L19.25,38.5 L19.25,22.75 C19.25,21.78225 18.46775,21 17.5,21 L1.75,21 C0.78225,21 0,21.78225 0,22.75 L0,40.25 C0,41.21775 0.78225,42 1.75,42 L40.25,42 C41.21775,42 42,41.21775 42,40.25 L42,15.75 C42,14.78225 41.21775,14 40.25,14 Z M12.25,36.75 L7,36.75 L7,33.25 L12.25,33.25 L12.25,36.75 Z M12.25,29.75 L7,29.75 L7,26.25 L12.25,26.25 L12.25,29.75 Z M35,36.75 L29.75,36.75 L29.75,33.25 L35,33.25 L35,36.75 Z M35,29.75 L29.75,29.75 L29.75,26.25 L35,26.25 L35,29.75 Z M35,22.75 L29.75,22.75 L29.75,19.25 L35,19.25 L35,22.75 Z"></path>
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

    <main class="ease-soft-in-out xl:ml-68.5 h-screen transition-all duration-200 bg-brown-500">
      <!-- cards -->
      <div class="w-full px-6 py-6 mx-auto">
        <h3 class="text-gray-900">Dashboard Admin</h3>
      </div>
      <div class="w-full px-6 py-6 mx-auto bg-brown-50">
        <!-- row 1 -->
        <div class="flex flex-wrap -mx-3">
          <!-- card1 -->
          <div class="w-full max-w-full px-3 mb-6 sm:w-1/2 sm:flex-none xl:mb-0 xl:w-1/4">
            <div class="relative flex flex-col min-w-0 break-words bg-white shadow-soft-xl rounded-2xl bg-clip-border">
              <div class="flex-auto p-4">
                <div class="flex flex-row -mx-3">
                  <div class="flex-none w-2/3 max-w-full px-3">
                    <div>
                      <p class="mb-0 text-sm font-semibold leading-normal">Hari Ini</p>
                      <h5 class="mb-0 font-bold">
                        250
                      </h5>
                    </div>
                  </div>
                  <div class="px-3 text-right basis-1/3">
                    <div class="inline-block w-12 h-12 text-center rounded-lg bg-gradient-to-tl from-brown-700 to-darkbrown-500">
                      <i class="fa fa-users text-lg relative top-2.5 text-white" aria-hidden="true"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- card2 -->
          <div class="w-full max-w-full px-3 mb-6 sm:w-1/2 sm:flex-none xl:mb-0 xl:w-1/4">
            <div class="relative flex flex-col min-w-0 break-words bg-white shadow-soft-xl rounded-2xl bg-clip-border">
              <div class="flex-auto p-4">
                <div class="flex flex-row -mx-3">
                  <div class="flex-none w-2/3 max-w-full px-3">
                    <div>
                      <p class="mb-0 text-sm font-semibold leading-normal">Bulan Ini</p>
                      <h5 class="mb-0 font-bold">
                        99.679
                      </h5>
                    </div>
                  </div>
                  <div class="px-3 text-right basis-1/3">
                    <div class="inline-block w-12 h-12 text-center rounded-lg bg-gradient-to-tl from-brown-700 to-darkbrown-500">
                      <i class="fa fa-users text-lg relative top-2.5 text-white" aria-hidden="true"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- card3 -->
          <div class="w-full max-w-full px-3 mb-6 sm:w-1/2 sm:flex-none xl:mb-0 xl:w-1/4">
            <div class="relative flex flex-col min-w-0 break-words bg-white shadow-soft-xl rounded-2xl bg-clip-border">
              <div class="flex-auto p-4">
                <div class="flex flex-row -mx-3">
                  <div class="flex-none w-2/3 max-w-full px-3">
                    <div>
                      <p class="mb-0 text-sm font-semibold leading-normal">Tahun Ini</p>
                      <h5 class="mb-0 font-bold">
                        856.795
                      </h5>
                    </div>
                  </div>
                  <div class="px-3 text-right basis-1/3">
                    <div class="inline-block w-12 h-12 text-center rounded-lg bg-gradient-to-tl from-brown-700 to-darkbrown-500">
                      <i class="fa fa-users text-lg relative top-2.5 text-white" aria-hidden="true"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>

        <!-- cards row 4 -->

        <div class="flex flex-wrap my-6 -mx-3">
          <!-- card 1 -->

          <div class="flex-auto px-0 pt-0 pb-2">
            <div class="p-0 overflow-x-auto rounded-2xl">
              <table class="items-center w-full mb-0 align-top border-gray-200 text-white">
                <thead class="align-bottom bg-darkbrown-500">
                  <tr>
                    <th class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b shadow-none text-sm border-b-solid tracking-none whitespace-nowrap text-white opacity-70">Provinsi</th>
                    <th class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b shadow-none text-sm border-b-solid tracking-none whitespace-nowrap text-white opacity-70">Dibuat</th>
                    <th class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b shadow-none text-sm border-b-solid tracking-none whitespace-nowrap text-white opacity-70">Diedit</th>
                    <th class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b shadow-none text-sm border-b-solid tracking-none whitespace-nowrap text-white opacity-70">Aksi</th>
                  </tr>
                </thead>
                <tbody class="bg-white">
                  <tr>
                    <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                      <div class="flex px-2 py-1">
                        <div class="flex flex-col justify-center">
                          <h6 class="mb-0 text-sm leading-normal">Jawa Timur</h6>
                        </div>
                      </div>
                    </td>
                    <td class="p-2 align-middle bg-transparent border-b  shadow-transparent">
                        <div class="flex px-2 py-1">
                            <div class="flex flex-col justify-center">
                              <h6 class="mb-0 text-sm leading-normal">12-18-2023 14.59</h6>
                            </div>
                        </div>
                    </td>
                    <td class="p-2 align-middle bg-transparent border-b  shadow-transparent">
                        <div class="flex px-2 py-1">
                            <div class="flex flex-col justify-center">
                              <h6 class="mb-0 text-sm leading-normal">12-18-2023 14.59</h6>
                            </div>
                        </div>
                    </td>
                    <td class="p-2 align-middle bg-transparent border-b  shadow-transparent">
                        <div class="flex px-2 py-1">
                            <div class="flex justify-center">
                              <i class="fa fa-pencil relative text-black" aria-hidden="true" href="{{ url('/buat') }}"></i>
                              <i class="fa fa-eye px-2 text-black" aria-hidden="true"></i>
                              <i class="fa fa-trash relative text-black" aria-hidden="true"></i>
                            </div>
                        </div>
                    </td>
                  </tr>
                  <tr>
                    <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                      <div class="flex px-2 py-1">
                        <div class="flex flex-col justify-center">
                          <h6 class="mb-0 text-sm leading-normal">Jawa Tengah</h6>
                        </div>
                      </div>
                    </td>
                    <td class="p-2 align-middle bg-transparent border-b  shadow-transparent">
                        <div class="flex px-2 py-1">
                            <div class="flex flex-col justify-center">
                              <h6 class="mb-0 text-sm leading-normal">12-18-2023 14.59</h6>
                            </div>
                        </div>
                    </td>
                    <td class="p-2 align-middle bg-transparent border-b  shadow-transparent">
                        <div class="flex px-2 py-1">
                            <div class="flex flex-col justify-center">
                              <h6 class="mb-0 text-sm leading-normal">12-18-2023 14.59</h6>
                            </div>
                        </div>
                    </td>
                    <td class="p-2 align-middle bg-transparent border-b  shadow-transparent">
                        <div class="flex px-2 py-1">
                          <div class="flex justify-center">
                            <i class="fa fa-pencil relative text-black" aria-hidden="true" href="{{ url('/buat') }}"></i>
                            <i class="fa fa-eye px-2 text-black" aria-hidden="true"></i>
                            <i class="fa fa-trash relative text-black" aria-hidden="true"></i>
                          </div>
                        </div>
                    </td>
                  </tr>
                  <tr>
                    <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                      <div class="flex px-2 py-1">
                        <div class="flex flex-col justify-center">
                          <h6 class="mb-0 text-sm leading-normal">Jawa Barat</h6>
                        </div>
                      </div>
                    </td>
                    <td class="p-2 align-middle bg-transparent border-b  shadow-transparent">
                        <div class="flex px-2 py-1">
                            <div class="flex flex-col justify-center">
                              <h6 class="mb-0 text-sm leading-normal">12-18-2023 14.59</h6>
                            </div>
                        </div>
                    </td>
                    <td class="p-2 align-middle bg-transparent border-b  shadow-transparent">
                        <div class="flex px-2 py-1">
                            <div class="flex flex-col justify-center">
                              <h6 class="mb-0 text-sm leading-normal">12-18-2023 14.59</h6>
                            </div>
                        </div>
                    </td>
                    <td class="p-2 align-middle bg-transparent border-b  shadow-transparent">
                        <div class="flex px-2 py-1">
                          <div class="flex justify-center">
                            <i class="fa fa-pencil relative text-black" aria-hidden="true" href="{{ url('/buat') }}"></i>
                            <i class="fa fa-eye px-2 text-black" aria-hidden="true"></i>
                            <i class="fa fa-trash relative text-black" aria-hidden="true"></i>
                          </div>
                        </div>
                    </td>
                  </tr>
                  <tr>
                    <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                      <div class="flex px-2 py-1">
                        <div class="flex flex-col justify-center">
                          <h6 class="mb-0 text-sm leading-normal">Bali</h6>
                        </div>
                      </div>
                    </td>
                    <td class="p-2 align-middle bg-transparent border-b  shadow-transparent">
                        <div class="flex px-2 py-1">
                            <div class="flex flex-col justify-center">
                              <h6 class="mb-0 text-sm leading-normal">12-18-2023 14.59</h6>
                            </div>
                        </div>
                    </td>
                    <td class="p-2 align-middle bg-transparent border-b  shadow-transparent">
                        <div class="flex px-2 py-1">
                            <div class="flex flex-col justify-center">
                              <h6 class="mb-0 text-sm leading-normal">12-18-2023 14.59</h6>
                            </div>
                        </div>
                    </td>
                    <td class="p-2 align-middle bg-transparent border-b  shadow-transparent">
                        <div class="flex px-2 py-1">
                          <div class="flex justify-center">
                            <i class="fa fa-pencil relative text-black" aria-hidden="true" href="{{ url('/buat') }}"></i>
                            <i class="fa fa-eye px-2 text-black" aria-hidden="true"></i>
                            <i class="fa fa-trash relative text-black" aria-hidden="true"></i>
                          </div>
                        </div>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>

        </div>

        {{-- <footer class="pt-4">
          
        </footer> --}}
      </div>
      <!-- end cards -->
    </main>

  </body>
  <!-- plugin for charts  -->
  <script src="./assets/js/plugins/chartjs.min.js" async></script>
  <!-- plugin for scrollbar  -->
  <script src="./assets/js/plugins/perfect-scrollbar.min.js" async></script>
  <!-- github button -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- main script file  -->
  <script src="./assets/js/soft-ui-dashboard-tailwind.js?v=1.0.5" async></script>
</html>
