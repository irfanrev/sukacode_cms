<?php

use App\Filament\Resources\ProjectResource;
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

Route::get('/team', function() {
    $team = Team::all();

    return TeamResource::collection($team);
});

Route::get('/project', function() {
    $project = Project::all();

    return ResourcesProjectResource::collection($project);
});

Route::get('/feedback', function() {
    $feedback = Feedback::all();

    return FeedbackResource::collection($feedback);
});

Route::get('clients', function() {
    $clients = Client::all();

    return ClientsResource::collection($clients);
});

Route::get('settings', function() {
    $settings = Setting::all();

    return settingsResource::collection($settings);
});