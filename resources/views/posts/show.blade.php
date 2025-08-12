@extends('layout.app')

@section('title', $post->title)

@section('content')
<div class="row">
    <div class="col-md-8 offset-md-2">
        <h1>{{ $post->title }}</h1>
        <p class="text-muted">Created on {{ $post->created_at->format('F j, Y') }}</p>

        <div class="mb-4">
            {{ $post->message }}
        </div>

        <a href="{{ route('posts.edit', $post) }}" class="btn btn-warning">Edit</a>

        <form action="{{ route('posts.destroy', $post) }}" method="POST" style="display:inline;">
            @csrf
            @method('DELETE')
            <button type="submit" onclick="return confirm('Are you sure?')" class="btn btn-danger">Delete</button>
        </form>

        <a href="{{ route('posts.index') }}" class="btn btn-secondary">Back to All Posts</a>
    </div>
</div>
@endsection
