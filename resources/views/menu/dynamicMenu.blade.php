
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="https://bootstrapthemes.co/demo/resource/bootstrap-4-multi-dropdown-hover-navbar/css/bootstrap-4-hover-navbar.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body class="bg-dark ">
<nav class="navbar navbar-expand-md navbar-light bg-light btco-hover-menu">
    <a class="navbar-brand" href="#">Menus</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse py-4" id="navbarNavDropdown">
        <ul class="navbar-nav">
            @foreach($menus as $menu)
            <li class="nav-item dropdown">
                <a class="nav-link {{ count($menu->childs) ? 'dropdown-toggle' :'' }}" href="https://bootstrapthemes.co" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                   {{ $menu->title }}
                </a>
                <ul class="dropdown-menu " aria-labelledby="navbarDropdownMenuLink">
                  @if(count($menu->childs))
                    @include('menu.menusub',['childs' => $menu->childs])
                  @endif
                </ul>
            </li>
            @endforeach

            
        </ul>
        <div class="button" style="position: absolute;right: 0;">
        @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                    <x-app-layout></x-app-layout>

                    @else
                        <a href="{{ route('login') }}" style="margin:10px">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" style="margin:10px">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
        </div>
    </div>
</nav>
<div style="position: absolute; left:50%; top:55%;">
  <h1 class="text-white">Home </h1>
</div>
</body>
</html>