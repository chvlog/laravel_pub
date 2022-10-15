<?php
 

use Illuminate\Http\Request;
use App\Http\Controllers\taskController;




 Route::POST("addtask",[taskController::class,'addTask']);
 Route::get ("/",[taskController::class,'fatchTask']);
 Route::get("delete/{id}",[taskController::class,'delete']);