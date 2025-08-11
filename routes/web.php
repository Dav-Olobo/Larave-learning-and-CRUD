<?php
//use GuzzleHttp\Psr7\Request;

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('home');
});

Route::post("/formsubmitted", function (Request $request) {

    //Validation can be added here if needed
 $request->validate([
   'fullname' => 'required|max:30|min:3',
    'email' => 'required|email|max:100|min:5',
   ]);
    // $fullname = request('fullname'); // This retrieves the 'fullname' input from the form
    // $email = request('email'); // This retrieves the 'email' input from the form
    $fullname = $request->input("fullname"); 
    $email = $request->input("email"); 
    
    return "Your full name is: $fullname, and your Email is: $email";
})->name('formsubmission');



// Get Route Example
// Route::get('/contact', function () {
//     return view('contact');
// });

// Parameters usnig Route
// Route::get('/portfolio/{firstname}/{lastname}', function ($firstname, $lastname) {
    
//     //return view('portfolio');
//     return 'Hello, '.$firstname. " ". $lastname;
// });

// Route::get('/portfolio', function () {
//     return 'This is a Portfolio page';
// });

// //Named Route
// Route::get('/test', function () {
//     return 'This is a test';
// });

// Route::get('/test', function () {
//     return 'This is a test';
// })->name("testpage");

// //Group Route
// //Portfolio related route
// Route::prefix('portfolio')->group(function () {
//     Route::get('/company', function () {
//         return view('company');
//        });

//     Route::get('/projects', function () {
//         return view('company');
//     });
// });

Route::get('/contact', function () {
    return view('contact');
});

Route::post('/contactsubmit', function () {
    return "Contact form submitted successfully!";
})->name('contactsubmission');
