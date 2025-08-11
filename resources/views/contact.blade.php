@extends('layout.default')

@section('header')
    <p>This is the contact header</p>
    @endsection

@section('maincontent')
    <h1>Contact Us</h1>
    <form action="{{ route('contactsubmission') }}" method="post">
        @csrf
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" placeholder="Type your name" required>
        <br><br>
        <label for="email">E-mail:</label>
        <input type="email" id="email" name="email" placeholder="Type your email" required>
        <br><br>
        <label for="message">Message:</label>
        <textarea id="message" name="message" placeholder="Type your message" required></textarea>
        <br><br>
        <button type="submit">Send</button>
    </form> 
    @endsection     

    @section('footer')
    <p>&copy; 2023 Your Website. All rights reserved.</p>       
    @endsection