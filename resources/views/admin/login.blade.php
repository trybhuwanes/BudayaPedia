<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin | Masuk</title>
    @vite('resources/css/app.css')
</head>

<body class= "font-poppins">
    <main>
        <div style="width: 100%; height: 100%; position: absolute; background: white;">
            <div style="width: 100%; height: 420px; left: 15%; top: 150px; position: absolute">
                <div style="width: 294.70px; height: 396px; left: 25.30px; top: 0px; position: absolute">
                    <img style="width: 294.70px; height: 396px; left: 50%; top: 0px; position: absolute; border-radius: 8px"
                        src="assets/img/masuk.png" />
                </div>
            </div>
            <div
                style="left: 50%; top: 150px; position: absolute; color: #332317; font-size: 25px; font-family: Poppins; font-weight: 400; word-wrap: break-word">
                Masuk Sebagai Admin
                <form action="{{ route('login.perform') }}" method="POST" enctype="multipart/form-data">
                    {{-- @csrf --}}
                    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                    <div style="height: 75px; margin-top: 25px; position: absolute">
                        <div
                            style="left: 0px; top: 0px; color: #332317; font-size: 16px; font-family: Poppins; font-weight: 400">
                            Alamat Email</div>
                        <div
                            style="width: 270px; height: 45px; left: 0px; position: absolute; background: #F3F3F3; border-radius: 8px">
                            <input type="email" id="email" name="email"
                                class="bg-gray-50 border border-brown-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                            @if ($errors->has('email'))
                                <span class="text-danger text-left">{{ $errors->first('email') }}</span>
                            @endif
    
                        </div>
                    </div>
                    <div style="height: 75px; margin-top: 105px; position: absolute">
                        <div
                            style="left: 0px; top: 0px; position: absolute; color: #332317; font-size: 16px; font-family: Poppins; font-weight: 400; word-wrap: break-word">
                            Password</div>
                        <div
                            style="width: 270px; height: 45px; left: 0px; top: 30px; position: absolute; background: #F3F3F3; border-radius: 8px">
                            <input type="password" id="password" name="password"
                                class="bg-gray-50 border border-brown-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">
                            @if ($errors->has('password'))
                                <span class="text-danger text-left">{{ $errors->first('password') }}</span>
                            @endif
                        </div>
                    </div>
                    <div style="width: 270px; height: 20px; margin-top: 200px; position: absolute">
                        <button type="submit"
                            class="text-lg bg-brown2-50 hover:bg-brown2-900 text-white font-bold py-2 px-11 rounded w-full">
                            Masuk
                        </button>
                    </div>
                </form>
            </div>

        </div>
    </main>

</body>

</html>
