<!DOCTYPE html>
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
        @method('PUT') <!-- Tells Laravel to treat this as a PUT request -->
        <label for="title">Title:</label>
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
</html>