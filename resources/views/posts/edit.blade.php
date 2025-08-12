<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Post</title>
</head>
<body>
    <h1>Edit Post!</h1>
    <form action="{{route('posts.update', $post->id)}}" method="POST">
        @csrf
        @method('PUT')  Tells Laravel to treat this as a PUT request -->
        <!-- <label for="title">Title:</label>
        <input type="text" name="title" value="{{old('title', $post->title)}}">
        <br><br>
        <label for="message">Message:</label>
        <textarea name="message">{{old('message', $post->message)}}</textarea>
        <br><br>
        <button type="submit">Update</button>
    </form>
    @if($errors->any())
        <div>
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <a href="{{route('posts.index')}}">Back to All Posts</a>
</body>
</html> --> 

@extends('layout.app')

@section('title', 'Edit Post')

@section('content')
<div class="row">
    <div class="col-md-8 offset-md-2">
        <h1>Edit Post</h1>

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

        <form action="{{ route('posts.update', $post) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="title" class="form-label">Post Title</label>
                <input type="text" name="title" value="{{ old('title', $post->title) }}" class="form-control" id="title" required>
            </div>

            <div class="mb-3">
                <label for="message" class="form-label">Post Message</label>
                <textarea name="message" class="form-control" id="messae" rows="5" required>{{ old('message', $post->message) }}</textarea>
            </div>

            <button type="submit" class="btn btn-primary">Update</button>
            <a href="{{ route('posts.index') }}" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
</div>
@endsection
