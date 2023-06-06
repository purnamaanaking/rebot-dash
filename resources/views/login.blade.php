<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login | Re-Bot Dashboard</title>
    @vite('resources/sass/app.scss')
</head>
<body class="bg-white">
    <div class="container m-auto">
        <div class="d-flex justify-content-center">
            <form>
                <div class="py-5 text-center" style="width: 600px;">
                    <div>
                        <img class="img-fluid" src="{{ Vite::asset('resources/images/login.png') }}" alt="Login Image">
                        <h1 class="">Re-Bot Dashboard</h1>
                        <p class="text-secondary">Dashboard of Your Rehabilitation Robot</p>
                    </div>
                    <div class="px-5 mt-3">
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="username"><i class="bi bi-person"></i></span>
                            <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="username">
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="password"><i class="bi bi-key"></i></span>
                            <input type="password" class="form-control" placeholder="Password" aria-label="Password" aria-describedby="password">
                        </div>
                        <div class="mt-4">
                            <a href="{{ route('dashboard') }}" class="btn btn-primary btn-lg w-100">Log In</a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    @vite('resources/js/app.js')
</body>
</html>
