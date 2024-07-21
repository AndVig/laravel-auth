@extends ('layouts.app')

@section ('content')
<div class="container py-4">

    <div class="header-page d-flex justify-content-between align-items-center mb-3">
        <h1>Crea un nuovo post</h1>

    </div>

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors-> all() as $error)
            <li>{{$error}}</li>
            @endforeach
        </ul>

    </div>

    <form action="{{route('admin.projects.store')}}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="post-title" class="form-label">Titolo</label>
            <input type="text" class="form-control" id="post-title" name="title">
        </div>
        <div class="mb-3">
            <label for="post-content" class="form-label">Contenuto del post</label>
            <textarea class="form-control" id="post-content" rows="5" name="content"></textarea>
        </div>
        <button class="btn btn-primary">Crea Post</button>
    </form>
    <hr>
    <a href="{{route('admin.post.index')}}" class="btn btn-info">Torna alla lista dei post</a>
</div>
@endsection