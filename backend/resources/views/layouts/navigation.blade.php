<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        <script src="{{ mix('js/app.js') }}" defer></script>
         @vite(['resources/js/app.js'])
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light mb-5" >
            <div class="container-fluid">
              <a class="navbar-brand" href="#">Laravel</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page"  href="/">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="/posts/">Posts</a>
                  </li>
                </ul>

              </div>
            </div>
          </nav>
    </body>
</html>

