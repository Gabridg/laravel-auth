@extends('layouts.app')

@section('content')
<header>
    <h1 class="text-center">{{$post->title}}</h1>
</header>

<div class="container">
    <div class="clearfix">
        <img class="float-left mr-3" src="{{ $post->image }}" alt="{{ $post->title }}">
        <p>{{$post->content}}</p>
    </div>
    <div class="d-flex flex-column">
        <time><strong>Post creato il:</strong> {{$post->created_at}}</time>
        <time><strong>Post modificato il:</strong> {{$post->updated_at}}</time>
    </div>
    
    <hr>
    
    <footer class="d-flex align-items-center justify-content-between">
        <div>
            <a href="{{ route('admin.posts.index')}}" class="btn btn-sm btn-secondary font-weight-bold"><i class="fa-solid fa-arrow-left"></i>  Torna alla lista</a>
        </div>
        <div class="d-flex align-items-center justify-content-end">
            <form action="{{ route('admin.posts.destroy', $post->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button class="btn btn-sm btn-danger font-weight-bold" type="submit"><i class="fa-regular fa-trash-can"></i>  Elimina</button>
            </form>
        </div>
        
    </footer>
    
</div>

@endsection