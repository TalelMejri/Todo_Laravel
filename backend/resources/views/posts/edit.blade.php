{{-- @extends("layouts.app")

@section("content") --}}
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Post') }}
        </h2>
    </x-slot>
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
</x-app-layout>
{{-- @endsection --}}
