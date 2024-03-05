<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('front.home');
})->name('home');

Route::get('/hair', function () {
    return view('front.hair.hair');
})->name('hair');

Route::get('/shampoo', function () {
    return view('front.hair.shampoo');
})->name('shampoo');
Route::get('/oils-treatments', function () {
    return view('front.hair.oils-treatments');
})->name('oils.treatments');

Route::get('/conditioner', function () {
    return view('front.hair.conditioner');
})->name('conditioner');

Route::get('/hair-masks', function () {
    return view('front.hair.hairmask');
})->name('hair.masks');

Route::get('/tonics', function () {
    return view('front.hair.tonics');
})->name('tonics');

Route::get('/styling', function () {
    return view('front.hair.styling');
})->name('styling');

Route::get('/brushes-combs', function () {
    return view('front.hair.brushes-combs');
})->name('brushes-combs');

Route::get('/perming', function () {
    return view('front.hair.perming');
})->name('perming');

Route::get('/electricals', function () {
    return view('front.hair.electricals');
})->name('electricals');

Route::get('/essentials', function () {
    return view('front.hair.essentials');
})->name('essentials');

Route::get('/contact-us', function () {
    return view('front.contact-us');
})->name('contact-us');

Route::get('/about-us', function () {
    return view('front.about-us');
})->name('about-us');

Route::get('/faqs', function () {
    return view('front.faqs');
})->name('faqs');
Route::get('/delivery-information', function () {
    return view('front.delivery-information');
})->name('delivery.information');
Route::get('/terms-and-conditions', function () {
    return view('front.terms-and-conditions');
})->name('terms-and-conditions');
Route::get('/cookie-policy', function () {
    return view('front.cookie-policy');
})->name('cookie-policy');



Route::get('/beauty', function () {
    return view('front.beauty.beauty');
})->name('beauty');

Route::get('/nail', function () {
    return view('front.beauty.nail');
})->name('nail');

Route::get('/lashes-brows', function () {
    return view('front.beauty.lashes-brows');
})->name('lashes-brows');

Route::get('/skincare', function () {
    return view('front.beauty.skincare');
})->name('skincare');

Route::get('/foundation', function () {
    return view('front.beauty.foundation');
})->name('foundation');

Route::get('/makeup', function () {
    return view('front.beauty.makeup');
})->name('makeup');

Route::get('/tanning', function () {
    return view('front.beauty.tanning');
})->name('tanning');

Route::get('/tools', function () {
    return view('front.beauty.tools');
})->name('tools');

Route::get('/hair-removal', function () {
    return view('front.beauty.hair-removal');
})->name('hair-removal');

Route::get('/thank-you', function () {    
    return view('front.thank-you');
})->name('thank.you');

Route::post('send-mail',[Controller::class,'sendmail'])->name('send.mail');