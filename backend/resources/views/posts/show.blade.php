@extends("layouts.app")

@section("content")
<div class="container">
    <h5 class="text-center mb-4 text-danger">Posts id : {{$post->id}}</h5>
    <table class="table table-dark table-striped ">
        <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Titel</th>
              <th scope="col">email user</th>
              <th scope="col">Categorie name</th>
            </tr>
          </thead>
          <tbody>
            <tr>
               <th> {{$post->id}}</th>
               <td> {{$post->titel}}</td>
               <td> {{$post->user->email}}</td>
               <td> {{$post->Categorie->name}}</td>
            </tr>
          </tbody>
    </table>
</div>
@endsection
