<!DOCTYPE html>
<html lang="de">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>{{ $title }}</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
  <div class="container">
    <nav class="mb-3">
      <a href="portfolio">Portfolio</a> |
      <a href="service">Service</a>
    </nav>
    <h1>Übung 2</h1>
    <div class="card">
      <div class="card-header">
        <h2>{{ $cardheader }}</h2>
      </div>
      <div class="card-body">
        <h4 class="card-title">{{ $cardtitle }}</h4>
        <p class="card-text">{{ $slot }}</p>
      </div>
      <div class="card-footer">
        <p><a href="#">{{ $cardfooter }}</a></p>
      </div>
    </div>
  </div>
</body>
</html>
