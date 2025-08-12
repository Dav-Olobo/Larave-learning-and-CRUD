<!DOCTYPE html>
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
</html>