<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\MediaController;
use App\Http\Controllers\CareerOpportunityController;
use App\Http\Controllers\SolutionController;
use App\Http\Controllers\SiteController;

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

Route::get('/welcome', function () {
    return view('welcome');
});

// WEBSITE Frontend
Route::get('/', [SiteController::class, 'index'])->name('siteIndex');
Route::get('/about', [SiteController::class, 'about'])->name('siteAbout');
Route::get('/solutions', [SiteController::class, 'service'])->name('siteService');
// Route::get('/service-single/{id}', [SiteController::class, 'serviceSingle'])->name('siteServiceSingle');
Route::get('/service-single', [SiteController::class, 'serviceSingle'])->name('siteServiceSingle');
Route::get('/solution/{id}', [SiteController::class, 'solution'])->name('siteSolution');
Route::get('/project', [SiteController::class, 'project'])->name('siteProject');
Route::get('/media_and_events', [SiteController::class, 'mediaEvents'])->name('siteMedia');
Route::get('/customer', [SiteController::class, 'customer'])->name('siteCustomer');
Route::get('/career', [SiteController::class, 'career'])->name('siteCareer');
Route::get('/contact', [SiteController::class, 'contact'])->name('siteContact');
Route::post('/sendmail', [SiteController::class, 'sendMail'])->name('siteMail');
Route::get('/career-opportunity', [SiteController::class, 'careerOpp'])->name('siteCarOpp');
Route::get('/life-at-oculin', [SiteController::class, 'oculife'])->name('siteOculife');

// SOLUTIONS
Route::get('/advanced-meter-infrastructure', [SiteController::class, 'ami'])->name('siteSolAMI');
Route::get('/mdm-billings', [SiteController::class, 'mdm'])->name('siteSolMDM');
Route::get('/mobileapps', [SiteController::class, 'mobileApps'])->name('siteSolMApps');
Route::get('/data-center', [SiteController::class, 'dataCenter'])->name('siteSolData');
Route::get('/network-cyber-security', [SiteController::class, 'network'])->name('siteSolNet');
// STATIC
Route::get('/strategy-operation', [SiteController::class, 'categoryOne'])->name('siteCategory1');
Route::get('/beSpoken', [SiteController::class, 'bespokern'])->name('bespoken');
Route::get('/network2', [SiteController::class, 'netInfra'])->name('netinfrastructure');


Route::get('/data-center2', [SiteController::class, 'categoryTwo'])->name('siteCategory2');
Route::get('/cloud', [SiteController::class, 'cloudData'])->name('cloudData');
Route::get('/big-data', [SiteController::class, 'bigData'])->name('bigData');



Route::get('/technology', [SiteController::class, 'categoryThree'])->name('siteCategory3');
Route::get('/oracle', [SiteController::class, 'oracle'])->name('oracle');
Route::get('/sap', [SiteController::class, 'sap'])->name('sap');


// WEBSITE Backend
// AUTHENTICATION
Route::prefix('authentication')->group(function() {
    Route::get('/register', [AuthenticationController::class, 'register'])->name('adminRegister')->middleware('alreadyLoggedIn');
    Route::post('/auth-register', [AuthenticationController::class, 'authRegister'])->name('authRegister');
    Route::get('/login', [AuthenticationController::class,'login'])->name('adminLogin')->middleware('alreadyLoggedIn');
    Route::post('/auth-login', [AuthenticationController::class, 'authLogin'])->name('authLogin');
    Route::get('/logout', [AuthenticationController::class, 'logout'])->name('adminLogout');
});

Route::prefix('admin')->group(function() {
    Route::get('/', [AdminController::class, 'index'])->name('adminIndex')->middleware('notLoggedIn');
    Route::prefix('media')->group(function() {
        Route::get('/', [MediaController::class, 'index'])->name('mediaIndex');
        Route::get('/create', [MediaController::class, 'create'])->name('mediaCreate');
        Route::post('/store', [MediaController::class, 'store'])->name('mediaStore');
        Route::get('/edit/{id}', [MediaController::class, 'edit'])->name('mediaEdit');
        Route::patch('/update/{id}', [MediaController::class, 'update'])->name('mediaUpdate');
        Route::delete('/delete/{id}', [MediaController::class, 'destroy'])->name('mediaDelete');
    });
    Route::prefix('/career-opportunity')->group(function() {
        Route::get('/', [CareerOpportunityController::class, 'index'])->name('careerOpIndex');
        Route::get('/create', [CareerOpportunityController::class, 'create'])->name('careerOpCreate');
        Route::post('/store', [CareerOpportunityController::class, 'store'])->name('careerOpStore');
        Route::get('/edit/{id}', [CareerOpportunityController::class, 'edit'])->name('careerOpEdit');
        Route::patch('/update/{id}', [CareerOpportunityController::class, 'update'])->name('careerOpUpdate');
        Route::delete('/delete/{id}', [CareerOpportunityController::class, 'destroy'])->name('careerOpDelete');
    });
    Route::prefix('solutions')->group(function() {
        Route::get('/', [SolutionController::class, 'index'])->name('solutionIndex');
        Route::get('/create', [SolutionController::class, 'create'])->name('solutionCreate');
        Route::post('/store', [SolutionController::class, 'store'])->name('solutionStore');
        Route::get('/edit/{id}', [SolutionController::class, 'edit'])->name('solutionEdit');
        Route::patch('/update/{id}', [SolutionController::class, 'update'])->name('solutionUpdate');
        Route::delete('/delete/{id}', [SolutionController::class, 'destroy'])->name('solutionDelete');
    });
});


