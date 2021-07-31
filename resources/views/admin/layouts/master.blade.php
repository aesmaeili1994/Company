<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>panel-website</title>
    <!-- add css -->
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    @yield('css')
</head>
<body>
    <!-- make panel -->
    <section class="container-fluid p-0">
        <!-- make menu -->
        <section class="menu">
            <nav class="navbar navbar-expand-md navbar-dark" style="background-color: rgba(255,255,255,.2)">
                <!-- Toggler/collapsibe Button -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!-- Navbar links -->
                <div class="collapse navbar-collapse" id="collapsibleNavbar">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('panel.data')}}">seo</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('slider.index')}}">slider</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('about.index')}}">about</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('product.index')}}">product</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('team.index')}}">team</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('post.index')}}">post</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('info.index')}}">info</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('social.index')}}">social</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('link.index')}}">link</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('contact.index')}}">contact</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('home.page')}}" target="_blank">show-website</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </li>
                    </ul>
                </div>
            </nav>
        </section>
        <!-- end make menu -->

        <!-- make content panel -->
        <section class="content">
            @yield('content')
        </section>
        <!-- end make content panel -->
    </section>
    <!-- end make panel -->



<!-- add js -->
<script src="{{asset('js/app.js')}}"></script>
@yield('js')

</body>
</html>
