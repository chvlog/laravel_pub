<?php
 

use Illuminate\Http\Request;
use App\Http\Controllers\taskController;




 Route::POST("addtask",[taskController::class,'AddTask']);
 Route::get ("/",[taskController::class,'FatchTask']);
 Route::get("delete/{id}",[taskController::class,'Delete']);