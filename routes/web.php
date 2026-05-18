
<?php

use App\Models\Idea;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IdeaController;


Route::get('/', function () {
    return redirect('/ideas');
});

Route::get('/ideas',[IdeaController::class,'index']);
//display a single idea;
Route::get('/ideas/{idea}',[IdeaController::class,'show']); 
//storing a new idea;
Route::post('/ideas', [IdeaController::class,'store']);

//update and existing idea;
Route::patch('/ideas/{idea}', [IdeaController::class,'update']);
//edit
Route::get('idea/{idea}',[IdeaController::class,'edit']);

//delete an idea moved outside the
Route::delete('/ideas/{idea}', [IdeaController::class,'destroy']);


   Route::get('/register',[RegisteredUserController::class,'create']);
   Route::post('/regiser',[RegisteredUserController::class,'store']);