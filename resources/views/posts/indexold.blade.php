<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Post</title>
</head>
<body>
   <h2>All Posts!</h2> 
   <a href="{{route('posts.create')}}">Create New Post</a>
   @foreach($posts as $post)
   <div>
        <h2>{{$post->title}}</h2>
       <p>Posted on: {{$post->created_at}} | Last updated: {{$post->updated_at}}</p>
        <p>{{$post->message}}</p>
        <a href="{{route('posts.edit', $post->id)}}">Edit</a>
        <form action="{{route('posts.destroy', $post->id)}}" method="POST" style="display:inline;">
        @csrf
        @method('DELETE') <!-- this spoofs the DELETE method -->
                <button type="submit" onclick="return confirm('Are you sure you want to Delete this post')">Delete</button>
        </form>
        <hr>
   </div>
   @endforeach
</body>
</html>