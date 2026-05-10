<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

// Public routes
Route::get('/', function () {
    return view('welcome');
});

Route::get('/resources/{slug}/download', function (string $slug) {
    $resource = config("library_resources.$slug");

    abort_unless($resource, 404);

    $body = implode(PHP_EOL, [
        $resource['title'],
        'Author: '.$resource['author'],
        'Category: '.$resource['category'],
        '',
        $resource['summary'],
    ]);

    return response($body, 200, [
        'Content-Type' => 'text/plain',
        'Content-Disposition' => 'attachment; filename="'.$slug.'.txt"',
    ]);
})->name('resources.download');

// Language switch route
Route::get('lang/{locale}', function ($locale) {
    if (in_array($locale, ['en', 'lg'])) {
        session()->put('locale', $locale);
    }
    return redirect()->back();
})->name('lang.switch');

// Authentication routes (public)
Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
Route::post('/register', [AuthController::class, 'register']);
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

// Protected routes (require authentication)
Route::middleware('auth')->group(function () {
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
    Route::get('/dashboard', [AuthController::class, 'dashboard'])->name('dashboard');
    
    // Placeholder routes for dashboard buttons
    Route::get('/browse', function () {
        return redirect('/#collections');
    })->name('resources.browse');
    
    Route::get('/resources/add', function () {
        return redirect()->route('dashboard')->with('success', 'Add Resource feature coming soon!');
    })->name('resources.add');
    
    Route::get('/favorites', function () {
        return redirect()->route('dashboard')->with('success', 'My Favorites feature coming soon!');
    })->name('favorites');
    
    Route::get('/profile/edit', function () {
        return redirect()->route('dashboard')->with('success', 'Edit Profile feature coming soon!');
    })->name('profile.edit');
});
