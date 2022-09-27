@extends('layouts.app')

@section('content')

<header>
    <h1 class="text-center">Tutti i post</h1>
</header>
<main>
    <div class="container">
        <table class="table">
            <thead class="thead-dark">
              <tr>
                <th scope="col">#</th>
                <th scope="col">Titolo</th>
                <th scope="col">Slug</th>
                <th scope="col">Creato il</th>
                <th scope="col">Modificato il</th>
                <th scope="col">Interazioni</th>
              </tr>
            </thead>
            <tbody>
             @forelse($posts as $post)
             <tr>
                <th scope="row">{{$post->id}}</th>
                <td>{{$post->title}}</td>
                <td>{{$post->slug}}</td>
                <td>{{$post->created_at}}</td>
                <td>{{$post->updated_at}}</td>
                <td class="d-flex">
                    <a href="{{ route('admin.posts.show', $post) }}" class="btn btn-sm btn-primary font-weight-bold mr-2"><i class="fa-regular fa-eye"></i>  Vedi</a>
                    <form action="{{ route('admin.posts.destroy', $post->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-sm btn-danger font-weight-bold" type="submit"><i class="fa-regular fa-trash-can"></i>  Elimina</button>
                    </form>
                </td>
             </tr>
             @empty
             <tr>
                <td colspan="6">
                    <h2>Non ci sono post</h2>
                </td>
             </tr>
             @endforelse
            </tbody>
          </table>

    </div>
</main>
@endsection