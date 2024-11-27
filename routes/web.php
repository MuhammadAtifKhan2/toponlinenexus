<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;


Route::get('/',[HomeController::class,'index']);
Route::get('about-us',[HomeController::class,'aboutUs']);
Route::get('services',[HomeController::class,'services']);
Route::get('blog',[HomeController::class,'blog']);
Route::get('blog-detail',[HomeController::class,'blogDetail']);
Route::get('pricing-plan',[HomeController::class,'pricingPlan']);
Route::get('feature',[HomeController::class,'feature']);
Route::get('team-members',[HomeController::class,'teamMembers']);
Route::get('testimonials',[HomeController::class,'testimonials']);
Route::get('quote',[HomeController::class,'quote']);
Route::get('contact',[HomeController::class,'contact']);