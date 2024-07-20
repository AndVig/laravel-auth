@extends ('layouts.app')

@section ('content')
<div class="container py-4">

    <div class="header-page d-flex justify-content-between align-items-center mb-3">
        <h1>Lista dei Post</h1>
        <button class="btn btn-primary">Crea nuovo</button>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th scope="col" class="col">#</th>
                <th scope="col" class="col-7">Last</th>
                <th scope="col" class="col">Slug</th>
                <th scope="col" class="col"></th>
            </tr>
        </thead>
        <tbody>
            @foreach($posts as $post)
            <tr>
                <th scope="row">{{$post->id}}</th>
                <td>{{$post->title}}</td>
                <td>{{$post->slug}}</td>
                <td>
                    <div class="d-flex gap-2">
                        <a href="{{ route('admin.posts.show') }}" as="button" class="btn btn-info"><i class="fa-solid fa-magnifying-glass"></i></a>
                        <a href="#" as="button" class="btn btn-warning"><i class="fa-solid fa-pencil"></i></a>
                        <a href="#" as="button" class="btn btn-danger"><i class="fa-solid fa-trash"></i></a>  
                    </div>

                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection