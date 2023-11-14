<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>@yield('title')</title>
</head>
<body>
<header class="bg-dark p-3">
    <div class="container">
        <div class="row justify-content-between">
            <div id="aa" class="text-warning">Inventory System</div> 
            <nav>
            
            <a class="p-2" href="{{ route('product') }}">Products</a>
            <a class="p-2" href="{{ route('supplier') }}">Supplier</a>
            <a class="p-2" href="{{ route('category') }}">Category</a>
            <a class="p-2" href="{{ route('order') }}">Order</a>
            <a class="p-2" href="{{ route('customer') }}">Customer</a>
            <a class="p-2" href="{{ route('orderdetail') }}">Order Detail</a>

            @if(auth()->check())
                <a href="{{route('logout')}}">Log Out</a>
            @else
                <a class="p-2" href="{{ route('login') }}">Log In</a>
                <a class="p-2" href="{{ route('registration') }}">Register</a>

            @endif

            </nav>
        </div>
    </div>
</header>

    @yield('content')
    </body>
</html>