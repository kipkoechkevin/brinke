<?php

use App\Http\Livewire\AboutComponent;
use App\Http\Livewire\Consultation;
use App\Http\Livewire\ContactComponent;
use App\Http\Livewire\Digital;
use App\Http\Livewire\HomeComponent;
use App\Http\Livewire\Seo;
use App\Http\Livewire\ServicesComponent;
use App\Http\Livewire\Software;
use App\Http\Livewire\Ui;
use App\Http\Livewire\Web;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', HomeComponent::class)->name('home');
Route::get('/about', AboutComponent::class)->name('about');
Route::get('/contact', ContactComponent::class)->name('contact');
Route::get('/services', ServicesComponent::class)->name('services');
Route::get('/services/software', Software::class)->name('software');
Route::get('/services/web', Web::class)->name('web');
Route::get('/services/seo', Seo::class)->name('seo');
Route::get('/services/digital', Digital::class)->name('digital');
Route::get('/services/ui', Ui::class)->name('ui');
Route::get('/services/consultation', Consultation::class)->name('consultation');
