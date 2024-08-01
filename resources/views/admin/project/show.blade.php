
@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-12">
            <h1>{{ $project->id }}</h1>
            <h2>{{ $project->title }}</h2>
            <h3>{{ $project->author }}</h3>
            <h4>{{ $project->date }}</h4>
            <p>
                {{ $project->content }}
            </p>
        </div>
    </div>
</div>
@endsection
