
        {{-- @extends("layouts.app")
        @section('content') --}}
        <x-app-layout>
            <x-slot name="header">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    {{ __('Posts') }}
                </h2>
            </x-slot>

        <div class="container-fluid">
            {{-- @if(isset($message))
              <div class="alert alert-success">
                   <?php //$message ?>
              </div>
            @endif --}}
              <h1 class="text-center mb-2 text-primary">List Posts</h1>
                <form class="d-flex container mb-5" action="/posts/" method="GET">
                  <input class="form-control me-2" name="search" type="search" placeholder="Search" aria-label="Search">
                  <button class="btn btn-outline-danger"  type="submit">Search</button>
                </form>
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
                  <td>{{substr($post->body,2).'...'}}</td>
                  <td>{{$post->categorie->name}}</td>
                  <td>
                      <button  class="mb-1"><a class="btn btn-danger"  href="/posts/{{$post->id}}">show</a></button>
                      <button class="  mb-1"><a href="/posts/find/{{$post->id}}">edit</a></button>
                      <form action="/posts/{{$post->id}}" method="POST">
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}
                             <button type="submit" > delete </button>
                       </form>
                      {{-- <div class="modal fade" id="exampleModal{{$post->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
            <button type="button" class="" data-bs-dismiss="modal">Close</button>
            <form action="/posts/{{$post->id}}" method="post">
              {{ csrf_field() }}
              {{ method_field('DELETE') }}
              <button class="" >delete</button>
          </form>
          </div>
        </div>
      </div>
    </div> --}}
                      {{-- <button><a href="/posts/delete/{{$post->id}}" >delete</a> </button> --}}
                  </td>
              </tr>
          @endforeach
      </tbody>
  </table>
  </div>
</x-app-layout>
        {{-- @endsection*/ --}}
