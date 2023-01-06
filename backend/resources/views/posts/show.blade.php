
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
    </head>
    <body>
         @include('navigation')
         <br>
        {{$post->titel}}
        {{$post->id}}
        {{$post->user->email}}
        {{$post->Categorie->name}}
    </body>
</html>
