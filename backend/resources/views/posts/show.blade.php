{{-- @extends("layouts.app")

@section("content") --}}

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('posts.show') }}
        </h2>
    </x-slot>
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
</x-app-layout>

{{-- @endsection --}}
