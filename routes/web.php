<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\FaqsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\QueresController;
use App\Http\Controllers\RefundController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\TestimonialsController;
use App\Http\Controllers\Why;
use App\Http\Controllers\WhychooseusController;
use App\Http\Controllers\SericesofferController;
use App\Http\Controllers\TremsconditionsController;
use App\Models\Services;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;
use Illuminate\Support\Facades\Response;

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

// frontend

Route::get('/', [HomeController::class, 'data_show'])->name('frontend.index');
Route::get('/meta', [HomeController::class, 'meta'])->name('home.meta');

Route::get('contact-us', [QueresController::class, 'index'])->name('contact.index');
Route::post('/contact-us', [QueresController::class, 'store'])->name('contact.store');



Route::get('/about-us', [AboutController::class, 'show'])->name('about.show');
Route::get('/services', [ServicesController::class, 'meta_show'])->name('frontend.service');
Route::get('services/{services_slug}', [ServicesController::class, 'single'])->name('services.single');
Route::post('services/{services_slug}', [QueresController::class, 'single_store'])->name('services.singel_store');

Route::get('/terms-and-conditions', [TremsconditionsController::class, 'show'])->name('terms.show');
Route::get('/refund-policy', [RefundController::class, 'show'])->name('refund.show');

Route::get('/sitemap.xml', function () {
    $sitemap = Sitemap::create()
        ->add(Url::create('/'))
        ->add(Url::create('/about-us'))
        ->add(Url::create('/services'))
        ->add(Url::create('/contact-us'));

    return Response::make($sitemap->render(), 200, [
        'Content-Type' => 'application/xml'
    ]);
});

Route::get('/robots.txt', function () {
    return response()->file(public_path('robots.txt'));
});

// admin
Route::group(['prefix' => 'codesavvy-admin', 'as' => 'admin.',], function () {

    Route::get('/', [AuthController::class, 'showLoginForm'])->name('login');
    Route::post('/', [AuthController::class, 'login'])->name('auth.login');
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('dashboard')->middleware('auth');

    Route::get('/profile', [ProfileController::class, 'index'])->name('profile.index')->middleware('auth');
    Route::post('/profile', [ProfileController::class, 'store'])->name('profile.store');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::put('/profile', [ProfileController::class, 'update'])->name('profile.update'); 

    // Home Routes
    Route::get('/home', [HomeController::class, 'index'])->name('home.index')->middleware('auth');
    Route::post('/home', [HomeController::class, 'store'])->name('home.store');
    Route::post('/home/update/{home}', [HomeController::class, 'update'])->name('home.update');


    // About Routes
    Route::get('/about', [AboutController::class, 'index'])->name('about.index')->middleware('auth');
    Route::post('/about/update/{about}', [AboutController::class, 'update'])->name('about.update');
    Route::post('/about', [AboutController::class, 'store'])->name('about.store');
    Route::get('/meta', [AboutController::class, 'meta']);


    // Query Routes
    Route::get('/querys', [QueresController::class, 'view_admin'])->name('querys.index');
    Route::get('/querys', [QueresController::class, 'show'])->name('querys.show')->middleware('auth');
    Route::delete('/querys/{id}', [QueresController::class, 'destroy'])->name('querys.destroy');

    // Testimonials Routes
    Route::get('/testimonials', [TestimonialsController::class, 'index'])->name('testimonials.index')->middleware('auth');
    Route::get('/testimonials_view', [TestimonialsController::class, 'show'])->name('testimonials.show');
    Route::post('/testimonials', [TestimonialsController::class, 'store'])->name('testimonials.store');
    Route::get('/testimonials/{testimonial}/edit', [TestimonialsController::class, 'edit'])->name('testimonials.edit');
    Route::put('/testimonials/{testimonials}', [TestimonialsController::class, 'update'])->name('testimonials.update');
    Route::delete('/testimonials/{testimonials}', [TestimonialsController::class, 'destroy'])->name('testimonials.destroy');


    Route::get('/add-services', [ServicesController::class, 'index'])->name('services.index')->middleware('auth');
    Route::post('/add-services', [ServicesController::class, 'store']);
    Route::get('/services', [ServicesController::class, 'show'])->name('services.show')->middleware('auth');
    Route::get('/services-update/{id}', [ServicesController::class, 'edit'])->name('services.edit');
    Route::post('/services-update/{id}', [ServicesController::class, 'update'])->name('services.update');
    Route::post('/services', [ServicesController::class, 'meta']);

  // Banner Views
    Route::get('/banner', [BannerController::class, 'index'])->name('banner.index')->middleware('auth');
    Route::post('/banner', [BannerController::class, 'store']);

    // // FAQ Routes
     Route::get('/add_faq', [FaqsController::class, 'index'])->name('faq.index')->middleware('auth');
     Route::get('/add_faq', [FaqsController::class, 'show_services'])->name('faq.show_services')->middleware('auth');
     Route::middleware('auth')->post('/add_faq', [FaqsController::class, 'store'])->name('faq.store');
     Route::get('/view_faq', [FaqsController::class, 'show'])->name('faq.show')->middleware('auth');
     Route::get('/update_faq/{id}', [FaqsController::class, 'edit'])->name('faq.edit');
     Route::post('/update_faq/{id}', [FaqsController::class, 'update'])->name('faq.update');
     Route::get('/view_faq/{faqs}', [FaqsController::class, 'destroy'])->name('faq.destroy');

    //  comman-part

    Route::get('/why', [WhychooseusController::class, 'index'])->name('why.index')->middleware('auth');
    Route::get('/why', [WhychooseusController::class, 'show_services'])->name('why.show_services')->middleware('auth');
    Route::get('/view-why', [WhychooseusController::class, 'show'])->name('view.show')->middleware('auth');
    Route::post('/why', [WhychooseusController::class, 'store'])->name('why.store');
    Route::get('/update-why/{id}', [WhychooseusController::class, 'edit'])->name('why.edit')->middleware('auth');
    Route::post('/update-why/{id}', [WhychooseusController::class, 'update'])->name('why.update');
    Route::get('/view-why/{whychooseus}', [WhychooseusController::class, 'destroy'])->name('why.destroy');

    // Offer
    Route::get('/offer', [SericesofferController::class, 'index'])->name('offer.index')->middleware('auth');
    Route::get('/offer-add', [SericesofferController::class, 'show_services'])->name('offer.show_services')->middleware('auth');
    Route::post('/offer-add', [SericesofferController::class, 'store'])->name('offer.store');
    Route::get('/offer', [SericesofferController::class, 'show'])->name('view.show')->middleware('auth');
    Route::get('/update-offer/{id}', [SericesofferController::class, 'edit'])->name('offer.edit')->middleware('auth');
    Route::post('/update-offer/{id}', [SericesofferController::class, 'update'])->name('offer.update')->middleware('auth');
    Route::get('/offer/{offer}', [SericesofferController::class, 'destroy'])->name('why.destroy');


    //terms-and-conditions
    Route::get('/terms-and-conditions', [TremsconditionsController::class, 'index'])->name('terms.index')->middleware('auth');
    Route::get('/terms-and-conditions', [TremsconditionsController::class, 'edit'])->name('terms.edit')->middleware('auth');
    Route::post('/terms-and-conditions', [TremsconditionsController::class, 'update'])->name('terms.update')->middleware('auth');

    //refund-policy
    Route::get('/refund-policy', [RefundController::class, 'index'])->name('refund.index')->middleware('auth');
    Route::get('/refund-policy', [RefundController::class, 'edit'])->name('refund.edit')->middleware('auth');
    Route::post('/refund-policy', [RefundController::class, 'update'])->name('refund.update')->middleware('auth');
    

    // Static Views 
    Route::view('/map', 'admin.map')->name('map')->middleware('auth');
    Route::view('/social', 'admin.social')->name('social')->middleware('auth');

    //Invoices
    Route::get('/invoice', [InvoiceController::class, 'index'])->name('invoice.index')->middleware('auth');
    Route::post('/invoice', [InvoiceController::class, 'store'])->name('invoice.store')->middleware('auth');
    Route::get('/generate-invoice/{id}', [InvoiceController::class, 'generateInvoice']);
    
});
