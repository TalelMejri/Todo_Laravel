<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Add Post') }}
        </h2>
    </x-slot>

    <div class="container mt-5 py-3 ">
        @if($errors->any())
          <div class="alert alert-danger">
            <ul>
            @foreach ($errors->all() as $error )
            <li>   {{$error}}</li>
            @endforeach
             </ul>
          </div>
         @endif
        <form action="{{route('posts.store')}}" method="POST">
            @csrf
            <div>
            <label >Titel</label>
            <input  class="form-control mb-2 @error('titel') is-invalid @enderror" type="text" name="titel" value="{{old('titel')}}" >
             @error('titel')
                <small class="text-danger mb-2">{{$message}}</small>
             @enderror
            </div>
            <div>
            <label >Body</label>
            <textarea class="form-control @error('body') is-invalid @enderror" row="3" name="body"  >{{old('body')}}</textarea>
            @error('body')
            <small class="text-danger mb-2">{{$message}}</small>
         @enderror
            </div>
           <div>
            <label >Author</label>
            <select class="form-control @error('user_id') is-invalid @enderror" name="user_id" value="{{old('user_id')}}">
                @foreach ($users as $user)
                    <option value="{{$user->id}}">{{$user->name}}</option>
                @endforeach
            </select>
            @error('user_id')
            <small class="text-danger mb-2">{{$message}}</small>
         @enderror
        </div>
        <div>
            <label >categorie</label>
            <select class="form-control @error('categorie_id') is-invalid @enderror" name="categorie_id" value="{{old('categorie_id')}}" >
                @foreach ($categories as $categorie)
                    <option value="{{$categorie->id}}">{{$categorie->name}}</option>
                @endforeach
            </select>
            @error('categorie_id')
              <small class="text-danger mb-2">{{$message}}</small>
            @enderror
        </div>
            <button class="mt-2 btn btn-outline-primary">Add Post</button>
        </form>
    </div>


</x-app-layout>
