<!DOCTYPE html>
<html lang=en>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        <script src="{{ mix('js/app.js') }}" defer></script>
         @vite(['resources/js/app.js'])
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
    </head>
    <body class="">
        <div class="container mt-5 py-3 ">
            <form action="/posts/{{$post->id}}" method="POST" class="shadow-lg p-5 rounded">
                {{ csrf_field() }}
                {{ method_field('PUT') }}
                <h5 class="text-center mb-2">Edit Post Id <?=$post->id?></h5>
                <input type="hidden" class="form-control" name="id" value="<?=$post->id?>">
                <input type="text" class="form-control mb-2" name="titel" value="<?=$post->titel?>">
                <textarea class="form-control mb-2"  name="body"  cols="30" rows="10"><?=$post->body?></textarea>
               <div class="text-center">
                    <button class="btn btn-outline-warning">Edit</button>
               </div>
            </form>
        </div>

    </body>
</html>
