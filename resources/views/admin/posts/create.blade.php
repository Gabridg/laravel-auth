@extends('layouts.app')

@section('content')
<div class="container">

    <header>
        <h1>CREA POST</h1>
    </header>
    <hr>
    
    <form action="{{ route('admin.posts.store') }}" method="POST">
        @csrf

        <div class="row">
            <div class="col-12">
                <div class="form-group">
                    <label for="title">Titolo</label>
                    <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}" required minlength="10" maxlength="100">
                  </div>                
            </div>
            <div class="col-12">
                <div class="form-group">
                    <label for="content">Contenuto</label>
                    <textarea class="form-control" id="content" name="content" required>{{ old('content') }}</textarea>
                  </div>                
            </div>
            <div class="col-11">
                <div class="form-group">
                    <label for="image">Immagine</label>
                    <input type="url" class="form-control" value="{{ old('image') }}" id="image" name="image" required>
                  </div>                
            </div>
            <div class="col-1">
                <img src="https://media.istockphoto.com/vectors/thumbnail-image-vector-graphic-vector-id1147544807?k=20&m=1147544807&s=612x612&w=0&h=pBhz1dkwsCMq37Udtp9sfxbjaMl27JUapoyYpQm0anc=" alt="image preview" id="thumb" class="img-fluid">
            </div>
        </div>

        
        <hr>
        <footer class="d-flex justify-content-between align-items-center">
            <a href="{{ route('admin.posts.index')}}" class="btn btn-sm btn-secondary font-weight-bold"><i class="fa-solid fa-arrow-left"></i>  Torna alla lista</a>
            
            <button class="btn btn-sm btn-success font-weight-bold" type="submit">
                <i class="fa-regular fa-floppy-disk"></i>  Crea
            </button>
        </footer>
    </form>
    
</div>
@endsection