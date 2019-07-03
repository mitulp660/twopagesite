<!doctype html>
<html lang="en">
<head>
    <title>2-pageSite</title>@include('includes.head')
</head>
<body>
<div class="container">
    @include('includes.header')
    <main role="main">
        @yield('content')

    </main>

</div>
<footer class="container-fluid bg-gray text-white text-center">
    <div class="container">
        @include('includes.footer')
    </div>
</footer>
@include('includes.footer')
</body>
</html>

