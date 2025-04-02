<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Das wrapper-Template</title>
</head>
<body>
    <nav>
        <a href="portfolio">Portfolio</a>
        <a href="service">Service</a>

    </nav>

    <h1>Laravel Bootstrap-Card</h1>
    <div class="container">

            <div class="card">
                <div class="card-header">
                    <h2>@yield('card-header')</h2>
                </div>

                <div class="card-body">
                    <h5 class="card-title">@yield('card-title')</h5>
                    <p class="card-text">@yield('card-text')</p>
                </div>

                <div class="card-footer">
                    <p>@yield('footer')</p>
                </div>
            </div>

    </div>

</body>
</html>
