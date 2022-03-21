<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="HgPDRxG3KtCkm32qW0PLKBaGwObw6TJTTDsPjKZH">

    <title>Laravel</title>

    <!-- Scripts -->
    <script src="http://127.0.0.1:8000/js/app.js" defer=""></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="http://127.0.0.1:8000/css/app.css" rel="stylesheet">
</head>

<body>
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="#">
                    Task
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        <li class="nav-item d-flex">
                            <a class="nav-link" href="http://127.0.0.1:8000/login">Logout</a>
                            {{-- <h5>{{$user->username}}</h5> --}}
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        @php
            $moduels = $model_and_permissoin['modules'];
            $role_id = $model_and_permissoin['role_id'];
            // echo($moduels[0]);
        @endphp
        @foreach ($moduels as $module)
        {{-- <p>{{$role_id}}</p> --}}
        <a class="btn btn-primary" href="{{url($module->route.'/index')}}">{{$module->name}}</a>
        @endforeach

</body>

</html>
