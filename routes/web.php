<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\PenyewaController;
use \App\Http\Controllers\LoginController;
use \App\Http\Controllers\HomeController;
use \App\Http\Controllers\AdminController;
use \App\Http\Controllers\KamarController;

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


// DashBoard admin
Route::get("/admin/kamar",[KamarController::class,"kamar"])->middleware("admin");
Route::get("/admin/kamar/edit/{id}",[KamarController::class,"edit"])->middleware("admin");
Route::post("/admin/kamar/edit/{id}",[KamarController::class,"update"])->middleware("admin");
Route::get("/admin/kamar/delete/{id}",[KamarController::class,"destroy"])->middleware("admin");
Route::get("/admin/tambah",[KamarController::class,"tambahKamar"])->middleware("admin");
Route::post("/admin/tambah",[KamarController::class,"store"])->middleware("admin");
Route::get("/admin/login",[AdminController::class,"login"])->middleware("guest")->name("login");
Route::post("/admin/login",[AdminController::class,"auth"]);
Route::post("/logout",[AdminController::class,"logout"]);
Route::get("/admin",[AdminController::class,"index"])->middleware("auth");
Route::get("/admin/penyewa/aktif",[PenyewaController::class,"penyewaAktif"])->middleware("admin");
Route::get("/admin/penyewa",[PenyewaController::class,"penyewa"])->middleware("admin");
Route::get("/admin/penyewa/tambah",[PenyewaController::class,"tambahPenyewa"])->middleware("admin");
Route::post("/admin/penyewa/tambah",[PenyewaController::class,"store"])->middleware("admin");
Route::get("/admin/penyewa/edit/{id}",[PenyewaController::class,"edit"])->middleware("admin");
Route::post("/admin/penyewa/edit/{id}",[PenyewaController::class,"update"])->middleware("admin");
Route::get("/admin/penyewa/delete/{id}",[PenyewaController::class,"destroy"])->middleware("admin");
Route::get("/admin/laporan",[AdminController::class,"laporan"])->middleware("admin");
Route::get("/admin/pembayaran",[AdminController::class,"pembayaran"])->middleware("admin");

// Index atau Main Homepage
Route::get('/', [HomeController::class,"index"]);
Route::get("/login", [HomeController::class,"login"])->middleware("guest");
Route::post("/login", [HomeController::class,"auth"]);
Route::get("/penyewa",[PenyewaController::class,"index"])->middleware("auth");
Route::get("/penyewa/kos",[PenyewaController::class,"kosSaya"])->middleware("auth");
Route::get("/penyewa/riwayat",[PenyewaController::class,"riwayat"])->middleware("auth");
