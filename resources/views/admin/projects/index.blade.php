@extends ('layouts.app')

@section ('content')
<div class="container py-4">

    <div class="header-page d-flex justify-content-between align-items-center mb-3">
        <h1>Lista dei Progetti</h1>
        <a as="button" href="{{route('admin.projects.create')}}" class="btn btn-primary">Crea nuovo</a>
    </div>

    @if (session ('message'))
    <div class="alert alert-success">
        {{session('message')}}
    </div>
    @endif

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
            @foreach($projects as $project)
            <tr>
                <th scope="row">{{$project->id}}</th>
                <td>{{$project->title}}</td>
                <td>{{$project->slug}}</td>
                <td>
                    <div class="d-flex gap-2">
                        <a href="{{route('admin.projects.show', $project->slug)}}" as="button" class="btn btn-info"><i class="fa-solid fa-magnifying-glass"></i></a>
                        <a href="{{route('admin.projects.edit', $project)}}" as="button" class="btn btn-warning"><i class="fa-solid fa-pencil"></i></a>
                        <a href="#" as="button" class="btn btn-danger"><i class="fa-solid fa-trash"></i></a>  
                    </div>

                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection