<?php

use App\Http\Controllers\ParticipantController;
use App\Models\Participant;
use App\Models\Role;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('test', function () {
    $counts = Participant::all()->countBy('role_id');
    foreach($counts as $key => $count) {
        echo $key . ': ' . $count . '<br>';
        echo Role::find($key)->name . '<br>';
    }
});


Route::resource('deelnemers', ParticipantController::class);
