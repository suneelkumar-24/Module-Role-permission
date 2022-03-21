<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>
            Task
        </title>
        <link rel="shortcut icon" href="{{ asset('images/favicon.png') }}" type="image/x-icon" />
        <link rel="stylesheet" href="{{ asset('css/animate.css') }}" />
        <link rel="stylesheet" href="{{ asset('css/tailwind.css') }}" />

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
        <!-- ==== WOW JS ==== -->
        <script src="{{ asset('js/wow.min.js') }}"></script>
        <script>
            new WOW().init();
        </script>
    </head>

    <body>
        @php
        // $model_and_permissoin = session()->get('model_and_permissoin');
        $moduels = $model_and_permissoin['modules'];
        $role_id = $model_and_permissoin['role_id'];
         // echo($moduels[0]);
         @endphp
        <!-- ====== Navbar Section Start -->
        <div class="ud-header bg-primary top-0 left-0 z-40 w-full flex items-center">
            <div class="container p-0">
                <div class="align-items-center flex items-center justify-between">
                    <div class="d-flex w-40">
                        <a href="" class="navbar-logo">
                            <img src="http://127.0.0.1:8000/images/logo/logo-white.svg" alt="logo" class="w-full header-logo" />
                        </a>
                    </div>
                    <div class="flex items-center justify-between px-4 w-full">
                        <div class="align-items-center d-flex">
                            <button id="navbarToggler" class="-translate-y-1/2 absolute block focus:ring-2 lg:hidden px-3 py-[6px] right-4 ring-primary rounded-lg top-1/2">
                                <span class="relative w-[30px] h-[2px] my-[6px] block bg-white"></span>
                                <span class="relative w-[30px] h-[2px] my-[6px] block bg-white"></span>
                                <span class="relative w-[30px] h-[2px] my-[6px] block bg-white"></span>
                            </button>
                            <nav id="navbarCollapse" class="absolute hidden lg:bg-transparent lg:block lg:max-w-full lg:px-4 lg:py-0 lg:shadow-none lg:static lg:w-full max-w-[250px] py-4 right-4 rounded-lg top-full w-full xl:px-6">
                                <ul class="blcok lg:flex">
                                    @foreach ($moduels as $module) {{--
                                    <p>{{$role_id}}</p>
                                    --}}
                                    <li class="relative group">
                                        <a
                                            href="{{url($module->route.'/index')}}"
                                            class="lg:inline-flex lg:mr-0 lg:py-6 mx-8 py-2 text-white"
                                            style="font-size: 20px;"
                                        >
                                            {{ $module->name }}
                                        </a>
                                    </li>
                                    @endforeach
                                </ul>
                            </nav>
                        </div>
                        <div class="hidden justify-end lg:pr-0 pr-16 sm:flex">
                            <div class="bg-opacity-20 duration-300 ease-in-out font-medium hover:bg-opacity-100 px-2 py-lg-2 rounded-lg signUpBtn text-base text-decoration-none text-white" style="background: rgb(125 162 223 / 81%);">
                                {{-- {{session()->get('username')}} --}}

                                <div class="btn-group">
                                    <button type="button">{{session()->get('username')}}</button>
                                    <button type="button" class=" dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown">
                                    </button>
                                    <div class="dropdown-menu">
                                        <a href="{{url('/login')}}" class="dropdown-item">Logout</a>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ====== Navbar Section End -->

        <!-- ====== Hero Section Start -->
        {{--
        <div id="home" class="relative pt-[120px] md:pt-[130px] lg:pt-[160px] bg-primary">--}} @yield('content') {{--</div>
        --}}
        <!-- ====== Hero Section End -->

        <!-- ====== All Scripts -->

        <script src="{{ asset('js/main.jss') }}"></script>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

        <script>
            // ==== for menu scroll
            const pageLink = document.querySelectorAll(".ud-menu-scroll");

            pageLink.forEach((elem) => {
                elem.addEventListener("click", (e) => {
                    e.preventDefault();
                    document.querySelector(elem.getAttribute("href")).scrollIntoView({
                        behavior: "smooth",
                        offsetTop: 1 - 60,
                    });
                });
            });

            // section menu active
            function onScroll(event) {
                const sections = document.querySelectorAll(".ud-menu-scroll");
                const scrollPos = window.pageYOffset || document.documentElement.scrollTop || document.body.scrollTop;

                for (let i = 0; i < sections.length; i++) {
                    const currLink = sections[i];
                    const val = currLink.getAttribute("href");
                    const refElement = document.querySelector(val);
                    const scrollTopMinus = scrollPos + 73;
                    if (refElement.offsetTop <= scrollTopMinus && refElement.offsetTop + refElement.offsetHeight > scrollTopMinus) {
                        document.querySelector(".ud-menu-scroll").classList.remove("active");
                        currLink.classList.add("active");
                    } else {
                        currLink.classList.remove("active");
                    }
                }
            }

            window.document.addEventListener("scroll", onScroll);
        </script>
    </body>
</html>
