<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Succes</title>
    @vite('resources/css/app.css')
</head>

<body class= "font-poppins">
    <div style="width: 100%; height: 100%; padding-left:33%; position: relative; background: white">
        <div
            style="top: 300px; padding-left:8%; position: absolute; text-align: center; color: #332317; font-size: 28px; font-family: Poppins; font-weight: 400; word-wrap: break-word">
            Selamat Datang</div>
        <div
            style="width: fit-content; padding-left: 4.5%; top: 350px; position: absolute; text-align: center; color: #594745; font-size: 16px; font-family: Poppins; font-weight: 400; line-height: 28.80px; word-wrap: break-word">
            Anda telah berhasil terdaftar.<br />Mari bersama menjelajah budaya bangsa!</div>
        <div style="width: 180px; height: 45px; margin-left: 10%; top: 450px; position: absolute">
            <a href="{{ route('content.home') }}">
                <button
                    class="bg-brown2-500 hover:bg-brown2-700 text-white font-bold py-2 px-11 rounded w-full text-center">
                    Beranda
                </button>
            </a>
        </div>
        <div
            style=" top: 182px; position: absolute; text-align: center; color: #4F0E0E; font-size: 64px; font-family: Jawa Palsu; font-weight: 400; letter-spacing: 3.20px; word-wrap: break-word">
            BudayaPedia</div>
    </div>
</body>

</html>
