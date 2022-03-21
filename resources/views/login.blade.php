<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        {{-- < !-- CSRF Token --> --}}
        <title>Laravel</title>
        {{-- < !-- Scripts --> --}}
        <script src="http://127.0.0.1:8000/js/app.js" defer=""></script>
        {{-- < !-- Fonts --> --}}
        <link rel="dns-prefetch" href="//fonts.gstatic.com" />
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" />
        {{-- < !-- Styles --> --}}
        <link href="http://127.0.0.1:8000/css/app.css" rel="stylesheet" />
    </head>

    <body>
        <div id="app">
            <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
                <div class="container">
                    <a class="navbar-brand" href="http://127.0.0.1:8000">Laravel </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        {{-- < !-- Left Side Of Navbar --> --}}
                        <ul class="navbar-nav me-auto"></ul>
                        {{-- < !-- Right Side Of Navbar --> --}}
                        <ul class="navbar-nav ms-auto">
                            {{-- < !-- Authentication Links --> --}}
                            <li class="nav-item">
                                <a class="nav-link" href="http://127.0.0.1:8000/login">Login</a>
                                </li>
                        </ul>
                    </div>
                </div>
            </nav>
            @if (session('message'))
            <h6 class="alert alert-warning">{{session('message')}}</h6>
            @endif
            <main class="py-4">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-8">
                            <div class="card">
                                <div class="card-header">Login</div>
                                <div class="card-body">
                                    <form method="POST" action="{{ route('sign-in') }}">
                                        @csrf
                                        {{-- @csrf <input type="hidden" name="_token" value="HgPDRxG3KtCkm32qW0PLKBaGwObw6TJTTDsPjKZH" /> --}}
                                        <div class="row mb-3">
                                            <label for="username" class="col-md-4 col-form-label text-md-end">Username</label>
                                            <div class="col-md-6"><input id="username" type="username" class="form-control" name="username" value="" required="" autofocus="" /></div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="password" class="col-md-4 col-form-label text-md-end">Password</label>
                                            <div class="col-md-6"><input id="password" type="password" class="form-control" name="password" required="" autocomplete="current-password" /></div>
                                        </div>
                                        <div class="row mb-0">
                                            <div class="col-md-8 offset-md-4"><button type="submit" class="btn btn-primary">Login</button></div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </body>
</html>
