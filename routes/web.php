
<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\TripController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WebController;
use Twilio\Rest\Client;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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

require __DIR__.'/auth.php';



// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');



Route::get('viewmass',function ()
{
     return  view('trip.sms_view');
})->name('viewmass');


Route::post('mass',function (Request $request)
{
     try {
        $account_sid = env('TWILIO_ACCOUNT_SID');
        $auth_token = env('TWILIO_AUTH_TOKEN');
        $client =new Client($account_sid, $auth_token);
        $message =  $client->messages->create(
            'whatsapp:+15074971407',
         [     
            'body'=>'Hello there!',
            'from'=>'whatsapp:+15074971407',
           
         ]
           
        ); 
        
        return $message;


     } catch (\Throwable $e) {
     
        return $e->getMessage();


     }


})->name('mass');



Route::controller(WebController::class)->group(function () {
    Route::get('/', 'index'); 
    Route::get('home', 'index')->name('home');
    Route::get('/contactUs', 'create')->name('contactUs');
    Route::get('/about', 'show')->name('about');
    Route::get('/alltrip', 'edit')->name('alltrip');
    Route::get('/check_out', 'checkout')->name('check_out');
    Route::get('/showDetailsForm', 'showDetailsForm')->name('showDetailsForm');
    Route::get('/alltripType{id}', 'moreType')->name('alltrip.Type');
    Route::get('/detalisTrip{id}', 'detalisTrip')->name('detalis.Trip');
    // Route::post('/register', 'register');
});
Route::controller(BookController::class)->group(function () {
    Route::post('/book.store', 'store')->name('book.store');
    Route::get('/booksroute', 'index');
    Route::post('/book.destroy', 'destroy')->name('book.destroy');
});
Route::controller(DashboardController::class)->group(function () {
    Route::get('/dashboard', 'index')->middleware(['auth', 'verified'])->name('dashboard');
    // Route::post('/logout', 'logout')->middleware('sanctum');
    // Route::post('/register', 'register');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::controller(SettingController::class)->group(function () {
    Route::get('/setting', 'index')->name('setting');
    Route::post('/setting.store', 'store')->name('setting.store');
    Route::post('/setting.update', 'update')->name('setting.update');
    Route::post('/setting.destroy', 'destroy')->name('setting.destroy');
});

Route::controller(UserController::class)->group(function () {
    Route::get('/user', 'index')->name('user');
    Route::post('/user.store', 'store')->name('user.store');
    Route::post('/user.edit', 'edit')->name('user.edit');
    Route::post('/user.update', 'update')->name('user.update');
    Route::post('/user.destroy', 'destroy')->name('user.destroy');
}); 


Route::controller(TripController::class)->group(function () {
    Route::get('/inserttrip', 'index')->name('inserttrip');
    Route::get('/viewTrip', 'viewTrip')->name('viewTrip');
     Route::post('/trip.store', 'store')->name('trip.store');
     Route::post('/trip.update{id}', 'update')->name('trip.update');
    Route::get('/trip.show{id}', 'show')->name('trip.show');
    // Route::post('/user.update', 'update')->name('user.update');
    Route::post('/trip.destroy', 'destroy')->name('trip.destroy');
});
Route::controller(EventController::class)->group(function () {
    // Route::get('/catogery', 'index')->name('catogery');
     Route::get('/catogeryview', 'index')->name('catogeryview');
     Route::post('/catogerystore', 'store')->name('catogery.store');
     Route::post('/catogeryupdate', 'update')->name('catogery.update');
     Route::post('/catogerydestroy', 'destroy')->name('catogery.destroy');
 });

 Route::controller(BlogController::class)->group(function () {
    Route::get('/blogview',  'index')->name('blogview');
    Route::get('/blogscreate',  'create')->name('blogscreate');
    Route::post('/blogs.store', 'store')->name('blogs.store');
    Route::get('/blogs/{id}/edit',  'edit')->name('blogs.edit');
    Route::post('/blogs.update', 'update')->name('blogs.update');
    Route::post('/blogs.destroy', 'destroy')->name('blogs.destroy');
    Route::get('/blogs/{id}', 'show')->name('showblog');

    });
    
Route::get('/{page}', [AdminController::class,'index']);

