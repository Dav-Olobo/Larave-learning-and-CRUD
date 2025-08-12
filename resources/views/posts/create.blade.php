<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Create New Post!</h1>
    <form action="{{route('posts.store')}}" method="POST">
    @csrf
    <label for="title">Title:</label>
    <input type="text" name="title" value="{{old('title')}}">
    <br><br>
    <label for="body">Message:</label> 
    <textarea name="message">{{old('message')}}</textarea>
    <br><br>
    <button type="submit">Save</button>
    </form>
    @if($errors->any())
        <div>
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
            @endif
        </div>
</body>
</html> -->


@extends('layout.app')

@section('title', 'Create Post')

@section('content')
<div class="row">
    <div class="col-md-8 offset-md-2">
        <h1>Create Post</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <strong>Whoops!</strong> There were some problems with your input.
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('posts.store') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label for="title" class="form-label">Post Title</label>
                <input type="text" name="title" value="{{ old('title') }}" class="form-control" id="title" required>
            </div>

            <div class="mb-3">
                <label for="content" class="form-label">Post Content</label>
                <textarea name="message" class="form-control" id="message" rows="5" required>{{ old('content') }}</textarea>
            </div>

            <button type="submit" class="btn btn-success">Create</button>
            <a href="{{ route('posts.index') }}" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
</div>
@endsection
