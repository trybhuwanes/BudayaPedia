<!DOCTYPE html> <html lang="en"> <head> <meta charset="UTF-8"> <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> @vite('resources/css/app.css') <link
    rel="stylesheets" href="">
<title>BudayaPedia | Daftar</title>
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
                            class="block py-2 pl-3 pr-4 text-black rounded hover:bg-gray-100 md:hover:bg-transparent ">Provinsi</a>
                    </li>
                    <li>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <main>
        <div style="width: 100%; height: 100%; left:35%; position: relative; background: white">
            <div
                style="top: 125px; left:-3%; position: absolute; color: #332317; font-size: 28px; font-family: Poppins; font-weight: 400; word-wrap: break-word">
                Lengkapi Keterangan Formulir Anda
            </div>
            <form method="POST" action="{{ route('register.perform') }}" enctype="multipart/form-data">
                @csrf
                <div style="width: 350px; height: 75px; top: 165px; position: absolute">
                    <div
                        style="left: 10px; top: 20px; position: absolute; color: #332317; font-size: 16px; font-family: Poppins; font-weight: 400; word-wrap: break-word">
                        Nama</div>
                    <input type="text" id="name" name="name"
                        style="padding-left: 15px; width: 350px; height: 50px; left: 0px; top: 50px; position: absolute; background: #F3F3F3; border-radius: 8px; border: 1px solid #BB8760;">
                </div>
                <div style="height: 75px; top: 285px; position: absolute">
                    <div
                        style="left: 10px; position: absolute; color: #332317; font-size: 16px; font-family: Poppins; font-weight: 400; word-wrap: break-word">
                        Email</div>
                    <input type="email" id="email" name="email"
                        style=" padding-left: 15px; width: 350px; height: 50px; left: 0px; top: 30px; position: absolute; background: #F3F3F3; border-radius: 8px; border: 1px solid #BB8760;">
                </div>
                <div style="height: 75px; top: 385px; position: absolute">
                    <div
                        style="position: absolute; color: #332317; font-size: 16px; font-family: Poppins; font-weight: 400; word-wrap: break-word">
                        Password</div>
                    <input type="password" id="password" name="password"
                        style=" padding-left: 15px; width: 350px; height: 50px; left: 0px; top: 30px; position: absolute; background: #F3F3F3; border-radius: 8px; border: 1px solid #BB8760;">
                </div>
                <div style="width: 350px; height: 45px; top: 500px; position: absolute">
                    <button type="submit" class="bg-brown2-500 hover:bg-brown2-700 text-white font-bold py-2 px-20 h-12 w-full rounded ">
                        Daftar Sekarang
                    </button>
                </div>
            </form>
            
            <div style="width: 350px; height: 45px; top: 560px; position: absolute">
                <a href="{{ route('login') }}">
                    <button
                     class="bg-transparent hover:bg-brown2-500 text-brown2-700 font-semibold hover:text-white py-2 px-4 h-12 w-full border border-brown2-500 hover:border-transparent rounded">
                    Kembali Masuk
                </button>
                </a>
                
            </div>
        </div>
    </main>

</body>

</html>