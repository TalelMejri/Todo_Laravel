
 <!DOCTYPE html>
 <html lang=en>
     <head>
         <meta charset="utf-8">
         <meta name="viewport" content="width=device-width, initial-scale=1">
         <title>Laravel</title>
     </head>
     <body>
        @include('../navigation')
<table>
    <thead>
        <tr>
            <th>Id</th>
            <th>Title</th>
            <th>Body</th>
            <th>category</th>
            <th>actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($posts as $post)
            <tr>
                <th>{{$post->id}}</th>
                <td>{{$post->titel}}</td>
                <td>{{substr($post->body,50).'...'}}</td>
                <td>{{$post->categorie->name}}</td>
                <td>
                    <button><a href="/show">show</button>
                    <button>edit</button>
                    <button>delete</button>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

     </body>
 </html>
