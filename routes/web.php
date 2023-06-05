<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\RecipeController;
use App\Http\Controllers\StepController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\LocaleController;
use App\Http\Controllers\IngredientController;

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
Route::get('/', [DashboardController::class, 'index']);

Route::post('change-locale', [LocaleController::class, 'changeLocale'])->name('change-locale');

Route::middleware('guest')->group(function () {

    Route::get('register', [AuthController::class, 'showRegistrationView'])->name('register');
    Route::post('register', [AuthController::class, 'register']);

    Route::get('login', [AuthController::class, 'showLoginView'])->name('login');
    Route::post('login', [AuthController::class, 'login']);


    Route::get('reset-password', [AuthController::class, 'showEnterEmailView'])->name('reset-password');
    Route::post('reset-password', [AuthController::class, 'enterEmail'])->name('reset-password');

    Route::get('show-verification-code-reset-password', [AuthController::class, 'showVerificationCodeResetPassword']);
    Route::post('send-verification-code-reset-password', [AuthController::class, 'sendVerificationCodeResetPassword'])->name('send-verification-code-reset-password');
    Route::post('verify-code', [AuthController::class, 'verifyCode'])->name('verify-code');

    Route::get('show-enter-new-password', [AuthController::class, 'showEnterNewPassword']);
    Route::post('save-new-password', [AuthController::class, 'saveNewPassword'])->name('save-new-password');
});

Route::middleware('auth')/* ->prefix('{locale}') */->group(function () {
    Route::get('logout', [AuthController::class, 'logout'])->name('logout');
    Route::post('send-verification-code', [AuthController::class, 'sendVerificationCode'])->name('send-verification-code');
    Route::post('verify-email', [AuthController::class, 'verifyEmail'])->name('verify-email');
    Route::get('show-verification-code', [AuthController::class, 'showVerificationCode'])->name('show-verification-code');
    Route::resource('profiles', ProfileController::class)->only(['index', 'edit','update', 'destroy']);
    Route::prefix('recipes')->group(function (){
        Route::get('{recipe}/detail', [RecipeController::class, 'showDetail']);
        Route::get('upload-image', [RecipeController::class, 'showUploadImage'])->name('recipes.upload-image');
        Route::post('upload-image', [RecipeController::class, 'uploadImage']);
        Route::get('upload-recipe-atribute', [RecipeController::class, 'showUploadRecipeAtribute'])->name('recipes.upload-recipe-atribute');
        Route::post('upload-recipe-atribute', [RecipeController::class, 'uploadRecipeAtribute']);
        Route::get('review-upload-recipe', [RecipeController::class, 'showReviewUploadRecipe'])->name('recipes.review-upload-recipe');
        Route::post('submit-recipe', [RecipeController::class, 'submitRecipe']);
        Route::get('upload-recipe-ingredient-and-step', [RecipeController::class, 'showUploadIngredientsAndSteps'])->name('recipes.upload-recipe-ingredient-and-step');
        Route::get('finish-upload-recipe', [RecipeController::class, 'showFinishUploadRecipe'])->name('recipes.finish-upload-recipe');
        /* Route::delete('{recipe}', [RecipeController::class, 'delete']);
        Route::put('{recipe}/edit', [RecipeController::class, 'update']);
        Route::get('{recipe}/edit', [RecipeController::class, 'showEdit']);
        Route::post('create', [RecipeController::class, 'create']); */
    });
    Route::prefix('steps')->group(function (){
        Route::post('create', [StepController::class, 'create']);
        Route::put('update/{id}', [StepController::class, 'update']);
        Route::delete('delete/{step}', [StepController::class, 'delete']);
    });
    
    Route::prefix('ingredients')->group(function (){
        Route::post('create', [IngredientController::class, 'create']);
        Route::put('update/{id}', [IngredientController::class, 'update']);
        Route::delete('delete/{ingredient}', [IngredientController::class, 'delete']);
    });

    /*  Route::get('verify-email', EmailVerificationPromptController::class)
    ->name('verification.notice');
    Route::get('verify-email/{id}/{hash}', VerifyEmailController::class)
    ->middleware(['signed', 'throttle:6,1'])
    ->name('verification.verify');
    Route::post('email/verification-notification', [EmailVerificationNotificationController::class, 'store'])
    ->middleware('throttle:6,1')
    ->name('verification.send');
    Route::get('confirm-password', [ConfirmablePasswordController::class, 'show'])
    ->name('password.confirm');
    Route::post('confirm-password', [ConfirmablePasswordController::class, 'store']);
    Route::put('password', [PasswordController::class, 'update'])->name('password.update');
    Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])
    ->name('logout');  */
});