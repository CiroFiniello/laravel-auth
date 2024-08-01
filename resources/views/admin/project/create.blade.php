

@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-8 p-3">
            <form action="{{route('admin.project.store')}}" method="POST">
                @method("POST")
                @csrf

                <div class="mb-3">
                    <h1>
                        Create New Post
                    </h1>
                </div>

                <div class="mb-3">
                    <label for="title">Title</label>
                    <input type="text" name="title" id="title" class="form-control">
                </div>


                <div class="mb-3">
                    <label for="image">image url</label>
                    <input type="text" name="image" id="image" class="form-control">
                </div>

                <div class="mb-3">
                    <label for="content">Post content</label>
                    <textarea name="content" id="content" cols="30" rows="15" class="form-control"></textarea>
                </div>
                <input type="submit" value="Create New Post" class="btn btn-primary btn-lg">
                <input type="reset" value="Reset Fields" class="btn btn-warning btn-lg">
            </form>
        </div>
    </div>
</div>
@endsection
