
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
     <body>
        @include('../navigation')
        <div class="container-fluid">

            <h1 class="text-center mb-2 text-primary">List Posts</h1>
<table class="table border table-striped">
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
                    <button  class="btn btn-primary mb-1"><a class="text-decoration-none text-dark" href="/posts/{{$post->id}}">show</a></button>
                    <button class="btn btn-warning mb-1">edit</button>
                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal{{$post->id}}"> delete </button>
  <div class="modal fade" id="exampleModal{{$post->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
           delete posts {{$post->titel}}
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <form action="/posts/{{$post->id}}" method="post">
            {{ csrf_field() }}
            {{ method_field('DELETE') }}
            <button class="btn btn-danger" >delete</button>
        </form>
        </div>
      </div>
    </div>
  </div>
                    {{-- <button><a href="/posts/delete/{{$post->id}}" >delete</a> </button> --}}
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
</div>
     </body>
 </html>
