<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BudayaPedia | Masuk</title>
    @vite('resources/css/app.css')
</head>

<body class= "font-poppins">
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
                            class="block py-2 pl-3 pr-4 text-black rounded hover:bg-gray-100 md:hover:bg-transparent ">Provinsi</a>
                    </li>
                    <li>
                        <a href="{{ route('register') }}">
                            <button class="bg-brown2-50 hover:bg-brown2-900 text-white font-bold py-2 px-8 rounded w-full">
                                Daftar
                            </button>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    
    <main>
        <div style="width: 100%; height: 100%; position: absolute; background: white;">
            <div style="width: 100%; height: 420px; left: 172px; top: 150px; position: absolute">
                <div style="width: 294.70px; height: 396px; left: 25.30px; top: 0px; position: absolute">
                    <img style="width: 294.70px; height: 396px; left: 0px; top: 0px; position: absolute; border-radius: 8px" src="assets/img/masuk.png" />
                </div>
            </div>
            <div
                style="left: 612px; top: 150px; position: absolute; color: #332317; font-size: 25px; font-family: Poppins; font-weight: 400; word-wrap: break-word">
                Silahkan masuk atau <br />mendaftar terlebih dahulu.
            </div>
                <form action="{{ route('login.perform') }}" method="POST" enctype="multipart/form-data">
                    {{-- @csrf --}}
                    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                    <div style="height: 75px; left: 612px; top: 250px; position: absolute">
                        <div
                            style="left: 0px; top: 0px; color: #332317; font-size: 16px; font-family: Poppins; font-weight: 400">
                            Alamat Email</div>
                        <div
                            style="width: 270px; height: 45px; left: 0px; top: 30px; position: absolute; background: #F3F3F3; border-radius: 8px">
                            <input type="email" id="email" name="email" class="bg-gray-50 border border-brown-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                            @if ($errors->has('email'))
                                <span class="text-danger text-left">{{ $errors->first('email') }}</span>
                            @endif

                        </div>
                    </div>
                    <div style="height: 75px; left: 613px; top: 340px; position: absolute">
                        <div
                            style="left: 0px; top: 0px; position: absolute; color: #332317; font-size: 16px; font-family: Poppins; font-weight: 400; word-wrap: break-word">
                            Password</div>
                        <div
                            style="width: 270px; height: 45px; left: 0px; top: 30px; position: absolute; background: #F3F3F3; border-radius: 8px">
                            <input type="password" id="password" name="password" class="bg-gray-50 border border-brown-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">
                            @if ($errors->has('password'))
                                <span class="text-danger text-left">{{ $errors->first('password') }}</span>
                            @endif
                        </div>
                    </div>
                    <div style="width: 270px; height: 45px; left: 612px; top: 440px; position: absolute">
                        <button type="submit" class="bg-brown2-50 hover:bg-brown2-900 text-white font-bold py-2.5 px-11 rounded w-full">
                            Masuk
                        </button>
                    </div>
                </form>
    
    
            <div style="width: 100%; height: 58px; left: 80px; top: 33px; position: absolute">
                <div style="width: 120px; height: 45px; left: 950px; top: 0px; position: absolute">
                    <!-- <div
                        style="width: 120px; height: 45px; left: 0px; top: 0px; position: absolute; background: #BB8760; border-radius: 6px">
                    </div> -->
                    <button class="bg-brown2-500 hover:bg-brown2-700 text-white font-bold py-2 px-11 rounded w-full text-center"> Masuk
                </button>
                </div>
                <div
                    style="left: 650px; top: 11px; position: absolute; text-align: right; color: #332317; font-size: 16px; font-family: Poppins; font-weight: 400; word-wrap: break-word">
                    Beranda</div>
                <div
                    style="left: 750px; top: 11px; position: absolute; text-align: right; color: #332317; font-size: 16px; font-family: Poppins; font-weight: 400; word-wrap: break-word">
                    Provinsi</div>
                <div
                    style="left: 850px; top: 11px; position: absolute; text-align: right; color: #332317; font-size: 16px; font-family: Poppins; font-weight: 400; word-wrap: break-word">
                    Daftar</div>    
            </div>
        </div>
    </main>

</body>

</html>