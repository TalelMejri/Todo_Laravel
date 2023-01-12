{{-- @extends("layouts.app")

@section("content") --}}
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Post') }}
        </h2>
    </x-slot>

<div class="container mt-5 py-3 ">
    @if($errors->any())
    <div class="alert alert-danger">
      <ul>
      @foreach ($errors->all() as $error )
      <li>{{$error}}</li>
      @endforeach
       </ul>
    </div>
   @endif
    <form action="{{route('posts.update',$post->id)}}" method="POST" enctype="multipart/form-data" class="shadow-lg p-5 rounded">
       @csrf
       @method('PUT')
        <h5 class="text-center mb-2">Edit Post Id <?=$post->id?></h5>
        <input type="hidden" class="form-control" name="id" value="<?=$post->id?>">
        <input type="text" class="form-control mb-2" name="titel" value="<?=old('titel') ?? $post->titel?>">
        <textarea class="form-control mb-2"  name="body"  cols="30" rows="10"><?=old('body') ?? $post->body?></textarea>
        <input type="file" class="form-control mb-2" name="image" value="<?=old('image') ?? $post->image?>">
        <div>
            <label >Author</label>
            <select class="form-control" name="user_id">
                @foreach ($users as $user)
                    <option value="{{$user->id}}"@if ( $user->id == (old('user_id') ?? $post->user_id) ) ? selected : "" @endif>{{$user->name}}</option>
                @endforeach
            </select>
            @error('user_id')
            <small class="text-danger mb-2">{{$message}}</small>
             @enderror
        </div>
        <div>
            <label >categorie</label>
            <select class="form-control" name="categorie_id" >
                @foreach ($categories as $categorie)
                    <option value="{{$categorie->id}}" @if ( $categorie->id == (old('categorie_id') ?? $post->categorie_id) ) ? selected : "" @endif>{{$categorie->name}}</option>
                @endforeach
            </select>
            @error('categorie_id')
              <small class="text-danger mb-2">{{$message}}</small>
            @enderror
        </div>
       <div class="text-center">
            <button class="btn btn-outline-warning">Edit</button>
       </div>
    </form>
</div>
</x-app-layout>
{{-- @endsection --}}
