<!doctype html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="theme-color" content="#000000">
    <title>Presensi dan Pencatatan Harian PKL</title>
    <meta name="description" content="Mobilekit HTML Mobile UI Kit">
    <meta name="keywords" content="bootstrap 4, mobile template, cordova, phonegap, mobile, html" />
    <link rel="icon" type="image/png" href="{{ asset('assets/img/favicon.png')}}" sizes="32x32">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/img/icon/192x192.png')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css')}}">
    <link rel="manifest" href="__manifest.json">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <style>
        body {
            background: url('{{ asset('assets/img/bg. jpg') }}') no-repeat center center fixed;
            background-size: 100% 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            position: relative;
        }
        
        .background-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
        }
        
        .login-container {
            background: rgba(255, 255, 255, 0.9);
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            text-align: center;
            max-width: 400px;
            width: 100%;
            position: relative;
            z-index: 2;
        }
    </style>
</head>

<body>
    <div class="background-overlay"></div>
    <div class="login-container">
        <div class="section">
            <img src="{{asset('assets/img/login/login.png')}}" alt="image" class="form-image" width="100">
        </div>
        <h1>Presensi dan Catatan Harian PKL</h1>
        <h4>Silahkan Login</h4>
        
        <form action="/proseslogin" method="POST">
            @csrf
            <div class="form-group">
                <input type="text" name="npm" class="form-control" placeholder="NPM">
            </div>
            <div class="form-group">
                <input type="password" name="password" class="form-control" placeholder="Password">
            </div>
            <div class="form-links mt-2">
                <a href="#" class="text-muted" id="forgotPassword">Forgot Password?</a>
            </div>
            <button type="submit" class="btn btn-primary btn-block" style="background-color: maroon; border: none;">Log in</button>
        </form>
    </div>
</body>

</html>
