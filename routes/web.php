
<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;


Route::get('/software/designing', function () {
    return view('software.designing');
});


Route::get('/', function () {
    return view('welcome');
});


Route::get('/software/business', function () {
    return view('software.business');
});



Route::post('/software/business/book', function (Request $request) {
    $data = $request->validate([
        'name' => 'required',
        'email' => 'required|email',
        'service' => 'required',
        'details' => 'required',
    ]);

    $body = "Booking Details:\n" .
        "Name: {$data['name']}\n" .
        "Email: {$data['email']}\n" .
        "Service: {$data['service']}\n" .
        "Details: {$data['details']}\n";

    try {
        Mail::raw($body, function($message) use ($data) {
            $message->to('dulanjalidarmakirthi@gmail.com')
                    ->subject('New Software Business Booking');
        });
        return redirect('/software/business')->with('success', 'Your booking has been sent successfully!');
    } catch (\Exception $e) {
        return redirect('/software/business')->with('error', 'Failed to send booking email: ' . $e->getMessage());
    }
});
Route::get('/software/photograph', function () {
    return view('software.photograph');
});
Route::post('/software/photograph/book', function (Request $request) {
    $data = $request->validate([
        'name' => 'required',
        'email' => 'required|email',
        'service' => 'required',
        'details' => 'required',
    ]);

    $body = "Photography Booking Details:\n" .
        "Name: {$data['name']}\n" .
        "Email: {$data['email']}\n" .
        "Service: {$data['service']}\n" .
        "Details: {$data['details']}\n";

    try {
        Mail::raw($body, function($message) use ($data) {
            $message->to('dulanjalidarmakirthi@gmail.com')
                    ->subject('New Photography Booking');
        });
        return redirect('/software/photograph')->with('success', 'Your booking has been sent successfully!');
    } catch (\Exception $e) {
        return redirect('/software/photograph')->with('error', 'Failed to send booking email: ' . $e->getMessage());
    }
});
Route::get('/software/contact', function () {
    return view('software.contact');
});

Route::get('/software/story', function () {
    return view('software.story');
});