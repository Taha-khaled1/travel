
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
use App\Mail\Testmail;
use App\Notifications\EmailverfyNotification;
use Illuminate\Support\Facades\Mail;
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










Route::get('sensendmaildmail', function (Request $request) {
    Mail::to('tahakhaled419@gmail.com')->send(new Testmail([  
        'full_name' => $request->name,
        'subject' => $request->subject,
        'email' =>  $request->email,
        'message' =>$request->description,
]));

    return '1';
})->name('sensendmaildmail');











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



Route::get('/favorites/index',[App\Http\Controllers\FavoriteController::class, 'index'])->name('favorites.index')->middleware('auth');

Route::post('/favorites/add/{id}',[App\Http\Controllers\FavoriteController::class, 'addFavorite'])->name('favorites.add')->middleware('auth');

Route::post('/favorites/remove/{id}',[App\Http\Controllers\FavoriteController::class, 'removeFavorite'] )->name('favorites.remove')->middleware('auth');
Route::get('/blogview',  [BlogController::class,'index'])->name('blogview');    Route::get('/blogs/{id}', [BlogController::class,'show'])->name('showblog');
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
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
Route::middleware(['admin'])->group(function () {
Route::controller(BookController::class)->group(function () {
    Route::post('/book.store', 'store')->name('book.store');
    Route::get('/booksroute', 'index');
    Route::get('/booksIsbook', 'booksIsbook')->name('booksIsbook');
    Route::post('/bookedit{id}', 'edit')->name('book.edit');
    Route::post('/bookunedit{id}', 'unedit')->name('book.unedit');
    Route::post('/book.destroy', 'destroy')->name('book.destroy');
});
Route::controller(DashboardController::class)->group(function () {
    Route::get('/dashboard', 'index')->middleware(['auth', 'verified'])->name('dashboard');
    // Route::post('/logout', 'logout')->middleware('sanctum');
    // Route::post('/register', 'register');
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
    Route::get('/blogscreate',  'create')->name('blogscreate');
    Route::post('/blogs.store', 'store')->name('blogs.store');
    Route::get('/blogs/{id}/edit',  'edit')->name('blogs.edit');
    Route::post('/blogs.update', 'update')->name('blogs.update');
    Route::post('/blogs.destroy', 'destroy')->name('blogs.destroy');


    });
    
Route::get('/{page}', [AdminController::class,'index']);

});