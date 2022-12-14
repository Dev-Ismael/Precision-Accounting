<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('/test', [App\Http\Controllers\TestController::class, 'index'])->name('test');


Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/about', [App\Http\Controllers\AboutController::class, 'index'])->name('about');
Route::get('/service/{slug}', [App\Http\Controllers\ServiceController::class, 'index'])->name('service');
Route::get('tax-center/{slug}', [App\Http\Controllers\TaxcenterController::class, 'index'])->name('tax_center');
Route::get('/resource', [App\Http\Controllers\ResourceController::class, 'index'])->name('resources');

// subscribe
Route::post('/subscribe', [App\Http\Controllers\SubscriberController::class, 'store'])->name('subscriber.store');

// Team
Route::get('/team', [App\Http\Controllers\MemberController::class, 'index'])->name('team');


// Consulting
Route::get('/consulting', [App\Http\Controllers\ConsultingController::class, 'index'])->name('consulting');
Route::post('/consulting/send', [App\Http\Controllers\ConsultingController::class, 'send'])->name('consulting.send');

// Contact
Route::get('/contact', [App\Http\Controllers\ContactController::class, 'index'])->name('contact');
Route::post('/contact/send', [App\Http\Controllers\ContactController::class, 'send'])->name('contact.send');

// Blog
Route::get('/blog', [App\Http\Controllers\BlogController::class, 'index'])->name('blog');
Route::post('/blog/search', [App\Http\Controllers\BlogController::class, 'search'])->name('blog.search');
Route::get('/{slug}', [App\Http\Controllers\BlogController::class, 'article'])->name('article');


/*===========================================================================
========== Admin Routes =====================================================
===========================================================================*/

Route::group([ "prefix" => "admin" , 'middleware' => "admin" , "as" => "admin." ] , function(){


    // Dashboard
    Route::get('/dashboard' , [App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('dashboard');


    // profile
    Route::get('profile/edit' , [App\Http\Controllers\Admin\ProfileController::class, 'edit'])->name("profile.edit");
    Route::put('profile/update' , [App\Http\Controllers\Admin\ProfileController::class, 'update'])->name("profile.update");


    // categories
    Route::get('category/perPage/{num}' , [App\Http\Controllers\Admin\CategoryController::class, 'perPage'])->name("category.perPage");
    Route::post('category/search' , [App\Http\Controllers\Admin\CategoryController::class, 'search'])->name("category.search");
    Route::post('category/multiAction' , [App\Http\Controllers\Admin\CategoryController::class, 'multiAction'])->name("category.multiAction");
    Route::resource('category', App\Http\Controllers\Admin\CategoryController::class);
    Route::get('category/destroy/{id}' , [App\Http\Controllers\Admin\CategoryController::class, 'destroy'] )->name("category.destroy");


    // articles
    Route::get('article/perPage/{num}' , [App\Http\Controllers\Admin\ArticleController::class, 'perPage'])->name("article.perPage");
    Route::post('article/search' , [App\Http\Controllers\Admin\ArticleController::class, 'search'])->name("article.search");
    Route::post('article/multiAction' , [App\Http\Controllers\Admin\ArticleController::class, 'multiAction'])->name("article.multiAction");
    Route::resource('article', App\Http\Controllers\Admin\ArticleController::class);
    Route::get('article/destroy/{id}' , [App\Http\Controllers\Admin\ArticleController::class, 'destroy'] )->name("article.destroy");



    // resources
    Route::get('resource/perPage/{num}' , [App\Http\Controllers\Admin\ResourceController::class, 'perPage'])->name("resource.perPage");
    Route::post('resource/search' , [App\Http\Controllers\Admin\ResourceController::class, 'search'])->name("resource.search");
    Route::post('resource/multiAction' , [App\Http\Controllers\Admin\ResourceController::class, 'multiAction'])->name("resource.multiAction");
    Route::resource('resource', App\Http\Controllers\Admin\ResourceController::class);
    Route::get('resource/destroy/{id}' , [App\Http\Controllers\Admin\ResourceController::class, 'destroy'] )->name("resource.destroy");



    // members
    Route::get('member/perPage/{num}' , [App\Http\Controllers\Admin\MemberController::class, 'perPage'])->name("member.perPage");
    Route::post('member/search' , [App\Http\Controllers\Admin\MemberController::class, 'search'])->name("member.search");
    Route::post('member/multiAction' , [App\Http\Controllers\Admin\MemberController::class, 'multiAction'])->name("member.multiAction");
    Route::resource('member', App\Http\Controllers\Admin\MemberController::class);
    Route::get('member/destroy/{id}' , [App\Http\Controllers\Admin\MemberController::class, 'destroy'] )->name("member.destroy");



    // tax_center
    Route::get('tax_center/perPage/{num}' , [App\Http\Controllers\Admin\TaxCenterController::class, 'perPage'])->name("tax_center.perPage");
    Route::post('tax_center/search' , [App\Http\Controllers\Admin\TaxCenterController::class, 'search'])->name("tax_center.search");
    Route::post('tax_center/multiAction' , [App\Http\Controllers\Admin\TaxCenterController::class, 'multiAction'])->name("tax_center.multiAction");
    Route::resource('tax_center', App\Http\Controllers\Admin\TaxCenterController::class);
    Route::get('tax_center/destroy/{id}' , [App\Http\Controllers\Admin\TaxCenterController::class, 'destroy'] )->name("tax_center.destroy");



    // service
    Route::get('service/perPage/{num}' , [App\Http\Controllers\Admin\ServiceController::class, 'perPage'])->name("service.perPage");
    Route::post('service/search' , [App\Http\Controllers\Admin\ServiceController::class, 'search'])->name("service.search");
    Route::post('service/multiAction' , [App\Http\Controllers\Admin\ServiceController::class, 'multiAction'])->name("service.multiAction");
    Route::resource('service', App\Http\Controllers\Admin\ServiceController::class);
    Route::get('service/destroy/{id}' , [App\Http\Controllers\Admin\ServiceController::class, 'destroy'] )->name("service.destroy");


    // testimonial
    Route::get('testimonial/perPage/{num}' , [App\Http\Controllers\Admin\TestimonialController::class, 'perPage'])->name("testimonial.perPage");
    Route::post('testimonial/search' , [App\Http\Controllers\Admin\TestimonialController::class, 'search'])->name("testimonial.search");
    Route::post('testimonial/multiAction' , [App\Http\Controllers\Admin\TestimonialController::class, 'multiAction'])->name("testimonial.multiAction");
    Route::resource('testimonial', App\Http\Controllers\Admin\TestimonialController::class);
    Route::get('testimonial/destroy/{id}' , [App\Http\Controllers\Admin\TestimonialController::class, 'destroy'] )->name("testimonial.destroy");


    // setting
    Route::get('setting/edit' , [App\Http\Controllers\Admin\SettingController::class, 'edit'])->name("setting.edit");
    Route::put('setting/update' , [App\Http\Controllers\Admin\SettingController::class, 'update'])->name("setting.update");




    // subscriber
    Route::get('subscriber/perPage/{num}' , [App\Http\Controllers\Admin\SubscriberController::class, 'perPage'])->name("subscriber.perPage");
    Route::post('subscriber/search' , [App\Http\Controllers\Admin\SubscriberController::class, 'search'])->name("subscriber.search");
    Route::post('subscriber/multiAction' , [App\Http\Controllers\Admin\SubscriberController::class, 'multiAction'])->name("subscriber.multiAction");
    Route::resource('subscriber', App\Http\Controllers\Admin\SubscriberController::class);
    Route::get('subscriber/destroy/{id}' , [App\Http\Controllers\Admin\SubscriberController::class, 'destroy'] )->name("subscriber.destroy");



    // newsletter
    Route::get('newsletter/perPage/{num}' , [App\Http\Controllers\Admin\NewsletterController::class, 'perPage'])->name("newsletter.perPage");
    Route::post('newsletter/search' , [App\Http\Controllers\Admin\NewsletterController::class, 'search'])->name("newsletter.search");
    Route::post('newsletter/multiAction' , [App\Http\Controllers\Admin\NewsletterController::class, 'multiAction'])->name("newsletter.multiAction");
    Route::resource('newsletter', App\Http\Controllers\Admin\NewsletterController::class);
    Route::get('newsletter/destroy/{id}' , [App\Http\Controllers\Admin\NewsletterController::class, 'destroy'] )->name("newsletter.destroy");





});
