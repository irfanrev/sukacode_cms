<?php

use App\Filament\Resources\ProjectResource;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\Team as ControllersTeam;
use App\Http\Resources\ClientsResource;
use App\Http\Resources\FeedbackResource;
use App\Http\Resources\ProjectResource as ResourcesProjectResource;
use App\Http\Resources\SettingsResource;
use App\Http\Resources\TeamResource;
use App\Models\Client;
use App\Models\Feedback;
use App\Models\Project;
use App\Models\Setting;
use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/team', [ControllersTeam::class, 'index']);

Route::get('/project', [ProjectController::class, 'index']);

Route::get('/feedback', [FeedbackController::class, 'index']);

Route::get('clients', [ClientController::class, 'index']);

Route::get('settings', function() {
    $settings = Setting::all();

    return settingsResource::collection($settings);
});