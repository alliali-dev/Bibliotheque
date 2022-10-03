<?php

use App\Http\Controllers\AuteurController;
use App\Http\Controllers\web\RegisteredUserController;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\EditeurController;
use App\Http\Controllers\EmailsenderController;
use App\Http\Controllers\LivreController;
use App\Http\Controllers\TypelivreController;
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

Route::get('/', function () {
    return view('home');
});

//Dashboard


// Route::get('/dashboard.dashboardadmin', function () {
//     return view('dashboard.dashboardadmin');
// })->middleware(['web'])->name('boss');
// Route::get('/dashboard', function () {
//     return view('dashboard.dashboardsuperadmin');
// })->middleware(['web'])->name('bigboss');


require __DIR__ . '/auth.php';

Route::get('/dashboard/dashboard', function () {
    return view('dashboard.dashboard');
})->middleware(['auth'])->name('dashboard');


//home
// Route::get('/', function () {
//     return view('home');
// })->name('home');

Route::get('/livres/categories.categorie', [CategorieController::class, 'create'])->middleware(['web'])->name('catg');  //retourne formulaire categorie
Route::get('/livres/categories.categories', [CategorieController::class, 'createForSuperAdmin'])->middleware(['web'])->name('catgs');

Route::post('/livres/categories', [CategorieController::class, 'store'])->name('savecat');

Route::get('/livres/categories.liste', [CategorieController::class, 'liste'])->middleware(['web'])->name('listcat');
Route::get('/livres/categories.listes', [CategorieController::class, 'listeForSuperAdmin'])->middleware(['web'])->name('listcats');
Route::get('/livres/categories.listess', [CategorieController::class, 'listeForAdmin'])->middleware(['web'])->name('listcatss');

Route::get('/livres/audio/audio', [LivreController::class, 'create'])->name('audio');

// Route::get('/livres/numerique/numerique',[LivreController::class,'create'])->name('pdf');
Route::get('/livres/numerique/numerique', [LivreController::class, 'createForAdmin'])->middleware(['web'])->middleware(['web'])->name('pdf');
Route::get('/livres/numerique/numeriques', [LivreController::class, 'createForSuperAdmin'])->middleware(['web'])->name('pdfs');

Route::post('/livres/numerique', [LivreController::class, 'store'])->name('savepdf');
Route::get('/', [LivreController::class, 'liste'])->middleware(['web'])->name('listepdf');
Route::get('/livres/numerique/listes', [LivreController::class, 'listeForSuperAdmin'])->middleware(['web'])->name('listepdfs');
Route::get('/livres/numerique/listess', [LivreController::class, 'listeForAdmin'])->middleware(['web'])->name('listepdfss');

//afficher un livre
Route::get('/livres/lecture/{id}', [LivreController::class, 'show'])->name('lecture');

// formulaire auteur
Route::get('/auteurs/auteur', [AuteurController::class, 'create'])->middleware(['web'])->name('auteur');
Route::get('/auteurs/auteurs', [AuteurController::class, 'createForSuperAdmin'])->middleware(['web'])->name('auteurs');

// save auteur
Route::post('/auteurs/auteur', [AuteurController::class, 'store'])->name('saveAut');

// liste auteurs
Route::get('/auteurs/liste', [AuteurController::class, 'liste'])->middleware(['web'])->name('listaut');
Route::get('/auteurs/listess', [AuteurController::class, 'listeForAdmin'])->middleware(['web'])->name('listautss');
Route::get('/auteurs/listes', [AuteurController::class, 'listeForSuperAdmin'])->middleware(['web'])->name('listauts');

// formulaire editeur
Route::get('/editeurs.editeur', [EditeurController::class, 'create'])->middleware(['web'])->name('editeur');
Route::get('/editeurs.editeurs', [EditeurController::class, 'createForSuperAdmin'])->middleware(['web'])->name('editeurs');

// save editeur
Route::post('/editeurs', [EditeurController::class, 'store'])->name('saveedi');

// liste editeurs
Route::get('/editeurs.liste', [EditeurController::class, 'liste'])->middleware(['web'])->name('listedi');
Route::get('/editeurs.listes', [EditeurController::class, 'listeForSuperAdmin'])->middleware(['web'])->name('listedis');
Route::get('/editeurs.listess', [EditeurController::class, 'listeForAdmin'])->middleware(['web'])->name('listediss');

// formulaire typelivre
Route::get('/livres/typelivre/typelivre', [TypelivreController::class, 'create'])->name('typelivre');
Route::get('/livres/typelivre/typelivres', [TypelivreController::class, 'createForSuperAdmin'])->name('typelivres');

Route::post('/livres/typelivre', [TypelivreController::class, 'store'])->name('savetypelivre');

Route::get('/livres/typelivre/liste', [TypelivreController::class, 'liste'])->name('listtype');
Route::get('/livres/typelivre/listes', [TypelivreController::class, 'listeForSuperAdmin'])->name('listtypes');
Route::get('/livres/typelivre/listess', [TypelivreController::class, 'listeForAdmin'])->name('listtypess');


// Emails
Route::get('/Emails.EmailSender', [EmailsenderController::class, 'formEmailSend'])->name('Email');
Route::post('/Emails', [EmailsenderController::class, 'EmailSend'])->name('Emailsend');
