<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Laravel Breadcrumbs Test</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
    </head>
    <body>

        <div class="container">

            <nav class="navbar navbar-default" role="navigation">
                <div class="navbar-header">
                    <ul class="nav navbar-nav">
                        @include('_menu')
                    </ul>
                </div>
            </nav>

            {{-- Breadcrumbs::render() --}}

            @yield('content')

        </div>

    </body>
</html>