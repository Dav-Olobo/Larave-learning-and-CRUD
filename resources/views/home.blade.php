@extends('layout.default')

@section('header')
       <p>This is the header</p>    
       <!-- @include('layout.sidemenu') -->
       @endsection

    @section('maincontent') 
    <h1>Home</h1>
    <form action="{{ route('formsubmission') }}" method="post">
    @csrf
    <label for="fullname">Fullname:</label>
    <input type="text" id="fullname" name="fullname" placeholder="Type your fullname" required>
    <br><br>
    <label for="email">E-mail:</label>
    <input type="email" id="email" name="email" placeholder="Type your email" required>
    <br><br>
    <button type="submit">Submit</button>
    </form>
    @endsection

@section('footer')
    <p>&copy; 2023 Your Website. All rights reserved.</p>
    @endsection
