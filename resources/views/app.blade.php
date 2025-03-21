<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="d-flex">
        <!-- Sidebar -->
        <div class="bg-dark text-white vh-100 p-3" style="width: 250px;">
            <h4 class="text-center">Shoe Store</h4>
            <ul class="nav flex-column">
                <li class="nav-item"><a href="{{ url('/') }}" class="nav-link text-white">Home</a></li>
                <li class="nav-item"><a href="{{ url('/products') }}" class="nav-link text-white">Products</a></li>
                <li class="nav-item"><a href="{{ url('/cart') }}" class="nav-link text-white">Cart</a></li>
                <li class="nav-item"><a href="{{ url('/profile') }}" class="nav-link text-white">Profile</a></li>
                @auth
                    <li class="nav-item"><a href="{{ url('/logout') }}" class="nav-link text-white">Logout</a></li>
                @else
                    <li class="nav-item"><a href="{{ url('/login') }}" class="nav-link text-white">Login</a></li>
                    <li class="nav-item"><a href="{{ url('/register') }}" class="nav-link text-white">Register</a></li>
                @endauth
            </ul>
        </div>

        <!-- Main Content -->
        <div class="p-3 w-100">
            @yield('content')
        </div>
    </div>
</body>
</html>
