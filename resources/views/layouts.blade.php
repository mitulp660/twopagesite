<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Two-Page_HW</title>
        <link rel="stylesheet" href="/css/app.css">

    </head>
    <body>
        @include('inc.navbar')

        <div class="container">
            <div class="row">
                <div class="col-md-auto-12 col-lg-auto-12">
                    @yield('content')
                </div>

                <div class="col-md-12 col-lg-12">
                    @include('inc.sidebar')
                 </div>
            </div>
        </div>

    </body>
</html>
